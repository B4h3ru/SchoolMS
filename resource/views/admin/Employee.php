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
        $email = htmlspecialchars(stripslashes(trim($_POST['Email'])));
        $dob = htmlspecialchars(stripslashes(trim($_POST['DateOfBirth'])));
        $role = htmlspecialchars(stripslashes(trim($_POST['SelectRole'])));

        if($role== 'admin') $accountID = 'Ad'.uniqid();
        else if ($role=='teacher') $accountID = 'Tch'.uniqid();
        else if ($role=='babysitter') $accountID = 'Ba'.uniqid();
        $username = '@'.$fname;
        $password = $fname.'@'.rand(1000,9999);
        if($manage->createA($accountID,$username,$password,$role)){
            if($manage->registerEmployee($accountID,$fname,$mname,$lname,$gender,$addres,$phoneNumber,$email,$role,$dob)){
                echo '<script>alert("Employee Successfuly Added");</script>';
            }
        }
        
        
        

    }


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/employee.css">
    <title>Add Employee</title>
</head>
<body>
    <?php include('header.php') ?>
    <div class="employee_page">
      <h1>Add Employee</h1>
        <div>
            <form action="" method="POST">
                <label for="">First Name </label><br>
                <input type="text" name="FirstName" id="">
                </div>
                <div>
                <label for="">Middle Name</label><br>
                <input type="text" name="MiddleName" id="">
                </div>
                <div>
                <label for="">Last Name</label><br>
                <input type="text" name="LastName" id="">
                </div>
                <div>
                    <label for="">Gender</label><br>
                    <select id="select-role" name="SelectGender">
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                </div>

                <div>
                <label for="">Adress</label><br>
                <input type="text" name="Adress" id="">
                </div>
                <div>
                <label for="">Phone Number</label><br>
                <input type="text" name="PhoneNumber" id="">
                </div>
                <div>
                <label for="">Email</label><br>
                <input type="email" name="Email" id="">
                </div>
                
                <div>
                    <label for="">Date of Birth</label><br>
                    <input type="date" name="DateOfBirth" >
                </div>
                <div>
                    <label for="">Role</label><br>
                    <select id="select-role" name="SelectRole">
                        <option value="teacher">teacher</option>
                        <option value="admin">admin</option>
                        <option value="babysitter">babysitter</option>
                    
                    </select>
                     <input type="submit" value="Add" >
                </div>
               
        </form>
   </div>
    <?php  include('footer.php') ?>
</body>
</html>