<?php
require_once __DIR__.'/../../../includes/include.inc.php';

$manage = new AdminView();

session_start();
if(!isset($_SESSION['user'])){
    header('location: ../../../index.php');
    // exit();
}  
if(isset($_SESSION['user'])){
    if($_SESSION['role'] != 'admin'){
    header('location: ../../../index.php');
    exit();
}

}


    if($_SERVER['REQUEST_METHOD']=='POST'){
        $fname = htmlspecialchars(stripslashes(trim($_POST['FirstName'])));
        $mname = htmlspecialchars(stripslashes(trim($_POST['MiddleName'])));
        $lname = htmlspecialchars(stripslashes(trim($_POST['LastName'])));
        $gender = htmlspecialchars(stripslashes(trim($_POST['SelectGender'])));
        $addres = htmlspecialchars(stripslashes(trim($_POST['Adress'])));
        $phoneNumber = htmlspecialchars(stripslashes(trim($_POST['PhoneNumber'])));
        // $email = htmlspecialchars(stripslashes(trim($_POST['Email'])));
        $dob = htmlspecialchars(stripslashes(trim($_POST['DateOfBirth'])));
        $classRmID = htmlspecialchars(stripslashes(trim($_POST['AssignClass'])));

        //parent info
        $Pfname = htmlspecialchars(stripslashes(trim($_POST['Name'])));
        $Plname = htmlspecialchars(stripslashes(trim($_POST['LName'])));
        $Pgender = htmlspecialchars(stripslashes(trim($_POST['Gender'])));
        $Paddres = htmlspecialchars(stripslashes(trim($_POST['Paddress'])));
        $Pemail = htmlspecialchars(stripslashes(trim($_POST['E_mail'])));
        $PphoneNumber = htmlspecialchars(stripslashes(trim($_POST['PhoneNum'])));
        $Pdob = htmlspecialchars(stripslashes(trim($_POST['Dob'])));



        $std_id = 'Std'. uniqid().rand(10,10000);
        $accountID = 'Std'.uniqid().rand(1000,10000);
        $parentID = 'Pa'.uniqid();
        $username = '@'.$fname;
        $password = $fname.'@'.rand(1000,9999);
        $role = "student";

        if($manage->addStdParent($parentID,$Pfname,$Pgender,$Plname,$Paddres,$PphoneNumber,$Pemail,$Pdob)){
            if($manage->createA($accountID,$username,$password,$role)){
                if($manage->registerStd($std_id,$accountID,$parentID,$fname,$mname,$lname,$addres,$gender,$phoneNumber,$dob)){
                    // echo '<script>alert("Student information Successfuly Added");</script>';
                    if($manage->assignStdC($std_id,$classRmID)){
                        echo '<script>alert("Student  Successfuly asigned");</script>';
                    }
                    else{
                        echo '<script>alert("Student class assign failed");</script>';
                    }  
                }
                else{
                    echo '<script>alert("Student registration failed");</script>';

                }
            } else{
                echo '<script>alert("Student account registration failed");</script>';

            }
            
        }else{
            echo '<script>alert("Student patent registeration faled");</script>';

        }
        
        
        

    }



?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/student.css">
    <title>ADD Student</title>
</head>
<body>
    <?php include('header.php') ?>
    <h1>Add Student</h1>
    <div class="student_page">
        <h3><h3>
        <form action="Student.php" method="POST">
            <p style="margin-bottom: 20px;">Student Information</p>
            <label for="">First Name </label><br>
            <input type="text" name="FirstName" id=""><br>
            <label for="">Middle Name</label><br>
            <input type="text" name="MiddleName" id=""><br>
            <label for="">Last Name</label><br>
            <input type="text" name="LastName" id=""><br>
            <label for="">Gender</label><br>
            <select id="select-role" name="SelectGender">
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select><br>
            <label for="">Date of Birth</label><br>
            <input type="date" name="DateOfBirth" ><br>
            <label for="">Adress</label><br>
            <input type="text" name="Adress" id=""><br>
            <label for="">Phone Number</label><br>
            <input type="text" name="PhoneNumber" id=""><br>
            <label for="">Assign ClassRoom</label><br>
            <select id="select-role" name="AssignClass">
            <?php
            $classroom = $manage->getClassroom();
            if($classroom != null){
                while($row =  $classroom->fetch_assoc()){
                    $class = $row['classroom_id'];
                    echo '<option  value="'.$class .'">'.$class .'</option>';
                    
                }
            }
           
            ?>
            </select><br>
            
            <div class="parent">
                <h3>Parent Information</h3>
                <label for="">First Name </label><br>
                <input type="text" name="Name"><br>
                <label for="">Last Name</label><br>
                <input type="text" name="LName" id=""><br>
                <label for="">Adress</label><br>
                <input type="text" name="Paddress" id=""><br>
                <label for="">Gender</label><br>
                <select  name="Gender">
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select><br>
                
                <label for="">Date of Birth</label><br>
                <input type="date" name="Dob" ><br>
                <label for="">Phone Number</label><br>
                <input type="text" name="PhoneNum" id=""><br>
                <label for="">Email</label><br>
                <input type="email" name="E_mail" id=""><br>
                <input type="submit" value="Add">
            </div>
        </form>

    </div>
    <?php //include('footer.php') ?>
</body>
</html>