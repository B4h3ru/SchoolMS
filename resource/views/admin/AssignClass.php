<?php
require_once __DIR__.'/../../../includes/include.inc.php';

$manage = new AdminView();

// if(isset($_SESSION['user']) && $_SESSION['user']=='admin'){
if($_SERVER['REQUEST_METHOD']=='POST'){
    $teacher_id = htmlspecialchars(stripslashes(trim($_POST['SelectTeacherId'])));
    $subject_id = htmlspecialchars(stripslashes(trim($_POST['SelectSubject'])));
    $classRm_id = htmlspecialchars(stripslashes(trim($_POST['SelectclassId'])));

    if($manage->assignTchC($classRm_id,$teacher_id,$subject_id)){
        echo '<script>alert("Techer class is successfuly assigned");</script>';
    }else{
        echo '<script>alert("Techer class assigning is failed");</script>';

    }

}


// }else{}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/assgignclass.css">
    <title>Assign Class</title>
    <style>
        
    </style>
</head>
<body>
    <?php include('header.php') ?>
      
    <?php include('llinks.php')?>

    <div class="container">
        <button onclick="show1();">Assign Teacher</button>
        <button onclick="show2();">Assign Babysister</button>
    </div>
    
    <div class="assign" id="assign_teacher">
        <h1>Assign Teacher</h1>
        <form action="AssignClass.php" method="POST">
                <label for="">Teacher ID</label><br>
                <select id="select-TeacherId" name="SelectTeacherId">
                <?php
                    $getStd = $manage->getTeacher();
                    if($getStd != null){
                        while($row = $getStd->fetch_assoc()){
                            $tchID = $row['employee_id'];
                            $tchFullName = $row['first_name'].' '.$row['midle_name'];
                            $gender = $row['gender'];
                            $dob = $row['date_of_birth'];
                            $address = $row['address'];

                            echo '<option  value="'.$tchID .'">'.$tchID .' - '.$tchFullName.'</option>';
                        }
                    }
                    ?>
<!-- 
                <option value="tch435">tch435</option>
                <option value="rchi8590">rchi8590</option> -->
                </select><br>
                <label for="">Subject ID</label><br>
                <select id="select-SubjectId" name="SelectSubject">
                <?php
                $subjectID = $manage->getSubject();
                if($subjectID!=null){
                    while($row = $subjectID->fetch_assoc()){
                        echo '<option value="'.$row['subject_id'].'">'.$row['subject_id'].' - '.$row['subject_name'].'</option>';
                    }
                }
                ?>

                        <!-- <option value="sub435">sub435</option>
                        <option value="subi8590">subi8590</option> -->
                </select><br> 
                <label for="">Class Room ID</label><br>
                <select id="select-classId" name="SelectclassId">
                <?php
                    $classroom = $manage->getClassroom();
                    if($classroom != null){
                        while($row =  $classroom->fetch_assoc()){
                            $class = $row['classroom_id'];
                            echo '<option  value="'.$class .'">'.$class .'</option>';
                            
                        }
                    }
                ?>
                    <!-- <option value="cl435">cl435</option>
                    <option value="cli8590">cli8590</option> -->
                </select><br>
                <input type="submit" value="Assign" name="Assign">
         </form>
    </div>

    <div class="assign" id="assign_babysitter">
        <h1>Assign Baby Sitter</h1>
        <form action="Assignbabysitterclass.php" method="POST">
            <label for="">Babysitter ID</label><br>
            <select id="select-BabysitterId" name="SelectBabysitterId">
            <?php
                $getStd = $manage->getBabysitter();
                if($getStd != null){
                    while($row = $getStd->fetch_assoc()){
                        $baID = $row['employee_id'];
                        $baFullName = $row['first_name'].' '.$row['midle_name'];
                        $gender = $row['gender'];
                        $dob = $row['date_of_birth'];
                        $address = $row['address'];

                        echo '<option  value="'.$baID .'">'.$baID .' - '.$baFullName.'</option>';



                }
            }
            
            ?>

                <!-- <option value="bbs435">bbs435</option>
                <option value="bbsi8590">bbs8590</option> -->
            </select><br>
            <label for="">Class Room ID</label><br>
            <select id="select-classId" name="SelectclassRoomId">
            <?php
            $classroom = $manage->getClassroom();
            if($classroom != null){
                while($row =  $classroom->fetch_assoc()){
                    $class = $row['classroom_id'];
                    echo '<option  value="'.$class .'">'.$class .'</option>';
                    
                }
            }
            ?>
                <!-- <option value="cl435">cl435</option>
                <option value="cli8590">cli8590</option> -->
            </select><br>
            <input type="submit" value="Assign" name="Assign">
   
        </form>
     
    </div><br><br><br><br>
    <?php include('footer.php') ?>
    <script>
const teacherDiv = document.getElementById('assign_teacher');
      const babysitterDiv = document.getElementById('assign_babysitter');
function show1() {
      
      teacherDiv.style.display = 'block';
      babysitterDiv.style.display='none';
}
function show2(){
    babysitterDiv.style.display = 'block';
    teacherDiv.style.display='none';
}
    
    </script>
</body>
</html>