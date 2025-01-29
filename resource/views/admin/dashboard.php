<?php
require_once __DIR__.'/../../../includes/include.inc.php';

$manage = new AdminView();
// session_start();
// if(isset($_SESSION['user']) && $_SESSION['role']=='admin'){
    if($_SERVER['REQUEST_METHOD']=='POST'){
        // $subject_id = htmlspecialchars(stripslashes(trim($_POST['SubjectId'])));
        $subjectName = htmlspecialchars(stripslashes(trim($_POST['SubjectName'])));
        $grade = htmlspecialchars(stripslashes(trim($_POST['Grade'])));
        $dec = htmlspecialchars(stripslashes(trim($_POST['Discription'])));

        if($manage->addS($subjectName,$grade,$dec)){
            echo '<script>alert("Subject is successfuly added");</script>';
        }
        else{
            echo '<script>alert("subject adding is failed");</script>';

        }

    }

// }else{
// header('loaction: /../../../index.php');
// exit();
// }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/dashboard.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <title>Dashboard</title>
</head>
<body>
    <?php include('header.php')?>
    <?php include('llinks.php')?>
    <div id="container">
    <div class="dashboard">
            <h1>Dashboard</h1>
            <p>Think-Of Solution  school management system admin panel</p>
        </div>

        <?php

?>

        <div class="grid">
            
            <div onclick="student();" class="card">
                <a id="studentIcon" ><i class="fa-solid fa-graduation-cap"></i></a>
                <h2>List of</h2>
                <p>Student</p>
            </div>
            <div onclick="teacher();" class="card">
                <a  id="teacherIcon" ><i class="fa-solid fa-person-chalkboard"></i></a>
                <h2>List of</h2>
                <p>Teacher</p>
            </div>
            <div onclick="babysitter();" class="card">
                <a id="BabysitterIcon" ><i class="fa-solid fa-person-breastfeeding"></i></a>
                <h2>List of</h2>
                <p>Babysitter</p>
            </div>
            <div onclick="admin();" class="card">
                <a  id="AdministratorsIcon" ><i class="fa-solid fa-user-tie"></i></a>
                <h2>List of</h2>
                <p>Administrators</p>
            </div>
            <div class="action-buttons">
                <button onclick="show1();">Add Classroom</button>
                <button onclick="show2();">Add Subjects</button>
            </div>
       
        </div>

    </div>
       
         <!-- add class room form -->
         <div class="add_class" id="addclass">
           <h1> Add Class Room</h1>
         
    <form action="Addclassroom.php" method="POST">
        <!-- <label for="ClassRoomId">Class Room ID:</label><br>
        <input type="text" name="ClassRoomId" id="ClassRoomId" required><br><br> -->
        <label for="Section">Section:</label><br>
        <input type="text" name="Section" id="Section" required><br><br>
        <label for="Grade">Grade:</label><br>
        <input style="height: 40px; width:320px; border-radius: 10px;" type="number" name="Grade" id="Grade" required><br><br>
        <input type="submit" name="Add" value="ADD">
    </form>
</div>

<!-- for add subject  -->

<div class="add_subject" id="addsubject">
           <h1> Add Subjects</h1>
         
    <form action="dashboard.php" method="POST">
        <!-- <label for="Subject ID">Subject ID:</label><br>
        <input type="text" name="SubjectId" id="SubjectID" required><br><br> -->
        <label for="Subject Name">Subject Name:</label><br>
        <input type="text" name="SubjectName" id="SubjectName" required><br><br>
        <label for="Grade">Grade:</label><br>
        <input style="height: 40px; width:320px; border-radius: 10px;" type="number" name="Grade" id="Grade" required><br><br>
         <label for="Discription">Discription:</label><br>
        <input type="text" name="Discription" id="Discription" required><br><br>
        <input type="submit" value="ADD">
    </form>
</div>

<!-- table -->
  
 <div class="Icon" id="stuedntTable">
         <h1>All Student List</h1>
    <table>
        <thead>
            <tr>
                <th>Student ID</th>
                <th>Full Name</th>
                <th>Gender</th>
                <th>Date of Birth</th>
                <th>Address</th>
                <th>Full Info</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $getStd = $manage->getStudent();
            if($getStd != null){
                while($row = $getStd->fetch_assoc()){
                    $stdID = $row['student_id'];
                    $stdFullName = $row['first_name'].' '.$row['midle_name'];
                    $gender = $row['gender'];
                    $dob = $row['date_of_birth'];
                    $address = $row['address'];

                    echo '<tr>
                            <td>'.$stdID.'</td>
                            <td>'.$stdFullName.'</td>
                            <td>'.$gender.'</td>
                            <td>'.$dob.'</td>
                            <td>'.$address.'</td>
                            <td><button class="details-btn"><a href="#Details.php?stdID='.$stdID.'">Details</a></button></td>
                          </tr>';


                }
            }
            
            ?>
            <!-- <tr>
                <td>std8938</td>
                <td>Natan Hailu</td>
                <td>Male</td>
                <td>1-9-2001</td>
                <td>AA</td>
                <td><button class="details-btn"><a href="##Details.php?stdID">Details</a></button></td>
            </tr> -->
            <!-- Empty rows -->
            <!-- <tr><td></td><td></td><td></td><td></td><td></td><td><button class="details-btn">Details</button></td></tr>
            <tr><td></td><td></td><td></td><td></td><td></td><td><button class="details-btn">Details</button></td></tr>
            <tr><td></td><td></td><td></td><td></td><td></td><td><button class="details-btn">Details</button></td></tr>
            <tr><td></td><td></td><td></td><td></td><td></td><td><button class="details-btn">Details</button></td></tr>
            <tr><td></td><td></td><td></td><td></td><td></td><td><button class="details-btn">Details</button></td></tr>
            <tr><td></td><td></td><td></td><td></td><td></td><td><button class="details-btn">Details</button></td></tr>
            <tr><td></td><td></td><td></td><td></td><td></td><td><button class="details-btn">Details</button></td></tr>
            <tr><td></td><td></td><td></td><td></td><td></td><td><button class="details-btn">Details</button></td></tr>
            <tr><td></td><td></td><td></td><td></td><td></td><td><button class="details-btn">Details</button></td></tr> -->
        </tbody>
    </table>
       </div>

      
       <div class="Icon" id="teacherTable">
         <h1>All Teacher List</h1>
    <table>
        <thead>
        
            <tr>
                <th>Teacher ID</th>
                <th>Full Name</th>
                <th>Gender</th>
                <th>Date of Birth</th>
                <th>Address</th>
                <th>Full Info</th>
            </tr>
        </thead>
        <tbody>
        <?php
            $getStd = $manage->getTeacher();
            if($getStd != null){
                while($row = $getStd->fetch_assoc()){
                    $tchID = $row['employee_id'];
                    $tchFullName = $row['first_name'].' '.$row['midle_name'];
                    $gender = $row['gender'];
                    $dob = $row['date_of_birth'];
                    $address = $row['address'];

                    echo '<tr>
                            <td>'.$tchID.'</td>
                            <td>'.$tchFullName.'</td>
                            <td>'.$gender.'</td>
                            <td>'.$dob.'</td>
                            <td>'.$address.'</td>
                            <td><button class="details-btn"><a href="#Details.php?stdID='.$tchID.'">Details</a></button></td>
                          </tr>';

                }
            }
            
            ?>
            <!-- <tr>
                <td>Tch8938</td>
                <td>Natan Hailu</td>
                <td>Male</td>
                <td>1-9-2001</td>
                <td>AA</td>
                <td><button class="details-btn">Details</button></td>
            </tr> -->
            <!-- Empty rows -->
            <!-- <tr><td></td><td></td><td></td><td></td><td></td><td><button class="details-btn">Details</button></td></tr>
            <tr><td></td><td></td><td></td><td></td><td></td><td><button class="details-btn">Details</button></td></tr>
            <tr><td></td><td></td><td></td><td></td><td></td><td><button class="details-btn">Details</button></td></tr>
            <tr><td></td><td></td><td></td><td></td><td></td><td><button class="details-btn">Details</button></td></tr>
            <tr><td></td><td></td><td></td><td></td><td></td><td><button class="details-btn">Details</button></td></tr>
            <tr><td></td><td></td><td></td><td></td><td></td><td><button class="details-btn">Details</button></td></tr>
            <tr><td></td><td></td><td></td><td></td><td></td><td><button class="details-btn">Details</button></td></tr>
            <tr><td></td><td></td><td></td><td></td><td></td><td><button class="details-btn">Details</button></td></tr>
            <tr><td></td><td></td><td></td><td></td><td></td><td><button class="details-btn">Details</button></td></tr> -->
        </tbody>
    </table>
       </div>

       <div class="Icon" id="BabysitterTable">
         <h1>All Babysitter List </h1>
    <table>
        <thead>
            <tr>
                <th>Babysitter ID</th>
                <th>Full Name</th>
                <th>Gender</th>
                <th>Date of Birth</th>
                <th>Address</th>
                <th>Full Info</th>
            </tr>
        </thead>
        <tbody>
        <?php
            $getStd = $manage->getBabysitter();
            if($getStd != null){
                while($row = $getStd->fetch_assoc()){
                    $baID = $row['employee_id'];
                    $baFullName = $row['first_name'].' '.$row['midle_name'];
                    $gender = $row['gender'];
                    $dob = $row['date_of_birth'];
                    $address = $row['address'];

                    echo '<tr>
                            <td>'.$baID.'</td>
                            <td>'.$baFullName.'</td>
                            <td>'.$gender.'</td>
                            <td>'.$dob.'</td>
                            <td>'.$address.'</td>
                            <td><button class="details-btn"><a href="#Details.php?stdID='.$baID.'">Details</a></button></td>
                          </tr>';


                }
            }
            
            ?>
            <!-- <tr>
                <td>Bad8938</td>
                <td>Natan Hailu</td>
                <td>Male</td>
                <td>1-9-2001</td>
                <td>AA</td>
                <td><button class="details-btn">Details</button></td>
            </tr> -->
            <!-- Empty rows -->
            <!-- <tr><td></td><td></td><td></td><td></td><td></td><td><button class="details-btn">Details</button></td></tr>
            <tr><td></td><td></td><td></td><td></td><td></td><td><button class="details-btn">Details</button></td></tr>
            <tr><td></td><td></td><td></td><td></td><td></td><td><button class="details-btn">Details</button></td></tr>
            <tr><td></td><td></td><td></td><td></td><td></td><td><button class="details-btn">Details</button></td></tr>
            <tr><td></td><td></td><td></td><td></td><td></td><td><button class="details-btn">Details</button></td></tr>
            <tr><td></td><td></td><td></td><td></td><td></td><td><button class="details-btn">Details</button></td></tr>
            <tr><td></td><td></td><td></td><td></td><td></td><td><button class="details-btn">Details</button></td></tr>
            <tr><td></td><td></td><td></td><td></td><td></td><td><button class="details-btn">Details</button></td></tr>
            <tr><td></td><td></td><td></td><td></td><td></td><td><button class="details-btn">Details</button></td></tr> -->
        </tbody>
    </table>
       </div>
       
       <div class="Icon" id="adminTable">
       <h1>All Admin List</h1>
    <table>
        <thead>
            <tr>
                <th>Admin ID</th>
                <th>Full Name</th>
                <th>Gender</th>
                <th>Date of Birth</th>
                <th>Address</th>
                <th>Full Info</th>
            </tr>
        </thead>
        <tbody>
        <?php
            $getStd = $manage->getAdmin();
            if($getStd != null){
                while($row = $getStd->fetch_assoc()){
                    $adID = $row['employee_id'];
                    $adFullName = $row['first_name'].' '.$row['midle_name'];
                    $gender = $row['gender'];
                    $dob = $row['date_of_birth'];
                    $address = $row['address'];

                    echo '<tr>
                            <td>'.$adID.'</td>
                            <td>'.$adFullName.'</td>
                            <td>'.$gender.'</td>
                            <td>'.$dob.'</td>
                            <td>'.$address.'</td>
                            <td><button class="details-btn"><a href="#Details.php?stdID='.$adID.'">Details</a></button></td>
                          </tr>';


                }
            }
            
            ?>
            <!-- <tr>
                <td>Add8938</td>
                <td>Natan Hailu</td>
                <td>Male</td>
                <td>1-9-2001</td>
                <td>AA</td>
                <td><button class="details-btn">Details</button></td>
            </tr> -->
            <!-- Empty rows -->
            <!-- <tr><td></td><td></td><td></td><td></td><td></td><td><button class="details-btn">Details</button></td></tr>
            <tr><td></td><td></td><td></td><td></td><td></td><td><button class="details-btn">Details</button></td></tr>
            <tr><td></td><td></td><td></td><td></td><td></td><td><button class="details-btn">Details</button></td></tr>
            <tr><td></td><td></td><td></td><td></td><td></td><td><button class="details-btn">Details</button></td></tr>
            <tr><td></td><td></td><td></td><td></td><td></td><td><button class="details-btn">Details</button></td></tr>
            <tr><td></td><td></td><td></td><td></td><td></td><td><button class="details-btn">Details</button></td></tr>
            <tr><td></td><td></td><td></td><td></td><td></td><td><button class="details-btn">Details</button></td></tr>
            <tr><td></td><td></td><td></td><td></td><td></td><td><button class="details-btn">Details</button></td></tr>
            <tr><td></td><td></td><td></td><td></td><td></td><td><button class="details-btn">Details</button></td></tr> -->
        </tbody>
    </table>
       </div>
              

       <?php include('footer.php') ?>
      
    <script >
        const container=document.getElementById('container');
            const addclass=document.getElementById('addclass');
             const addsubject=document.getElementById('addsubject');
            
        function show1(){  
      
            addclass.style.display = 'block';
            addsubject.style.display='none';
            container.style.display='none';
            }
        function show2(){
            addsubject.style.display = 'block';
            addclass.style.display='none';
            container.style.display='none';
        }
            // table
const studentt=document.getElementById('stuedntTable');
const teacherr=document.getElementById('teacherTable');
const babysitterr=document.getElementById('BabysitterTable');
const adminn=document.getElementById('adminTable');

function student(){
       container.style.display='none';
            studentt.style.display='block';
            
            
        
}
function teacher(){ 
      teacherr.style.display='block';  
       container.style.display='none';
    
    
}
function babysitter(){
    babysitterr.style.display='block'; 
          container.style.display='none';
    
  

}
function admin(){
        adminn.style.display='block';
    container.style.display='none';
    
   

}
    </script>

</body>
</html>