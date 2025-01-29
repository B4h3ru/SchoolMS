<?php
require_once __DIR__.'/../../../includes/include.inc.php';

$manage = new AdminView();

// if(isset($_SESSION['user']) && $_SESSION['user']=='admin'){
if($_SERVER['REQUEST_METHOD']=='POST'){
    // $classRm_id = htmlspecialchars(stripslashes(trim($_POST['ClassRoomId'])));
    $section = htmlspecialchars(stripslashes(trim($_POST['Section'])));
    $grade = htmlspecialchars(stripslashes(trim($_POST['Grade'])));


    if($manage->addC($section,$grade)){
        echo '<script>alert("Class Room is successfuly added");</script>';
        header('location: dashboard.php');
        exit();
    }else{
        echo '<script>alert("Class Room adding is failed");</script>';
        // header('location: dashboard.php');
        // exit();
       
    }

}



// }else{}
?>