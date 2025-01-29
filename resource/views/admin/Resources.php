<?php
require_once __DIR__.'/../../../includes/include.inc.php';

$manage = new AdminView();

// if(isset($_SESSION['user']) && $_SESSION['role']=='admin'){
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $uploadPath = "../../../storage/uploads/";
        $uploadname = $_FILES['resouce']['name'];
        $filetype =  $_FILES['resouce']['type'];
        $uploadFile =  $uploadPath.$uploadname;
        
        // $tempPath = $_FILES['file']['tmp_name'];

        $SujectID = htmlspecialchars($_POST['SelectSubID']);
        $role = htmlspecialchars($_POST['SelectRole']);
        $FilePath = $uploadPath.$uploadname;
    
        // if(isset($_FILES['file']) && $_FILES['resouce']['error'] == 0){
        //     $allowType = ['application/pdf', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document'];
            // if(in_array($filetype,$allowType)){
                if(move_uploaded_file($_FILES['resouce']['tmp_name'],$uploadFile)){
                if($manage->addR($SujectID,$uploadFile,$role)){
                     echo '<script> alert("The resouce is sucessfully added");</script>';
                  }
                  else{
                    echo '<script> alert("The resouce adding  db  failed");</script>';
                  }
                }
                else{
                    echo '<script> alert("The resouce adding  failed");</script>';
                }
            // }
            // else{
            //     echo '<script> alert("The resouce type failed");</script>';

            // }
            
    
        // }
    }
    



// }else{}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/resource.css">
    <title>Document</title>
</head>
<body>
    <?php include('header.php') ?>
<div class="resource_page">
           <h1> Add Resource</h1>
         
    <form action="Resources.php" method='POST' enctype="multipart/form-data">
        <div>
        <label for="SelectSubID">Subject ID</label>
            <select id="select-role" name="SelectSubID">
                <?php
                $subjectID = $manage->getSubject();
                if($subjectID!=null){
                    while($row = $subjectID->fetch_assoc()){
                        echo '<option value="'.$row['subject_id'].'">'.$row['subject_id'].' - '.$row['subject_name'].'</option>';
                    }
                }
                ?>
                <!-- <option value="Student">Student Text Book</option>
                <option value="Teacher"></option> -->
            </select>
        </div>
        <div >
            <label for="resource">Student Resource:</label>
            <input type="file" id="student-resource" name="resouce">
        </div>
        <div >
            <label for="select-role">Select Role:</label>
            <select id="select-role" name="SelectRole">
                <option value="student">Student Text Book</option>
                <option value="teacher">Teacher teaching Book</option>
            </select>
        </div>

         <input type="submit" value="ADD">
    </form>
</div>
<?php include('footer.php') ?>
</body>
</html>