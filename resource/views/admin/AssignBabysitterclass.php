<?php
require_once __DIR__.'/../../../includes/include.inc.php';

$manage = new AdminView();

// if(isset($_SESSION['user']) && $_SESSION['user']=='admin'){
if($_SERVER['REQUEST_METHOD']=='POST'){
    $babysitter_id = htmlspecialchars(stripslashes(trim($_POST['SelectBabysitterId'])));
    $classRm_id = htmlspecialchars(stripslashes(trim($_POST['SelectclassRoomId'])));

    if($manage->assignBabystrC($babysitter_id,$classRm_id)){
        echo '<script>alert("Babysitter class ids successfuly assigned");</script>';
        header('location: AssignClass.php');
        exit();
    }else{
        echo '<script>alert("Babysiter class assigning is failed");</script>';
        // header('location: AssignClass.php');
        // exit();
       
    }

}



// }else{}
?>