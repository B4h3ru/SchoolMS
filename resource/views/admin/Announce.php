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


// if(isset($_SESSION['user']) && $_SESSION['user']=='admin'){
if($_SERVER['REQUEST_METHOD']=='POST'){
  $title = htmlspecialchars(stripslashes(trim($_POST['Subject'])));
  $text = htmlspecialchars(stripslashes(trim($_POST['text'])));
  
  if($manage->postAnn($title,$text)){
    echo '<script>alert("Announcment is Successfuly Posted");</script>';
  }else{
    echo '<script>alert("Announcment Post  failed");</script>';
  }

}

// }else{}


?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/announce.css">
    <title>Document</title>
</head>
<body>
    <?php include('header.php') ?>
    <?php include('llinks.php')?>
      <div class="announce_page">
     
      <h1>Add Announcement</h1>
      <div>
        <form action="Announce.php" method="POST">
            <label for="Subject "><h2>Title</h2> </label>
            <input style="width: 500px;" type="text" name="Subject" class="subject"  required>
          </div>
          <div>
          <label for="Body"> <h2>Body</h2>   </label>
          <!-- <input type="text" name="Body" class="body" required> -->
          <textarea style="width: 500px;"  name="text" cols="60" rows="20" placeholder="post content"></textarea>
          </div>
            <input type="submit"  value="POST">
          </div>
       </form>
   
    <?php //include('footer.php') ?>
</body>
</html>
