<?php
require_once __DIR__.'/../../../includes/include.inc.php';
$manage = new View();

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
    $oldPass = htmlspecialchars(stripslashes(trim($_POST['OldPassword'])));
    $newPass = htmlspecialchars(stripslashes(trim($_POST['NewPassword'])));
    $confirmPass = htmlspecialchars(stripslashes(trim($_POST['ConfirmNewPassword'])));

    $username = $_SESSION['user'];


    if($newPass == $confirmPass ){
        if($manage->changeP($username,$oldPass,$newPass)){
            echo '<script>alert("Password is successfuly changed");</script>';
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/profile.css">
    <title>Profile</title>
   
</head>
<body>
    <?php include('header.php') ?>
    <div class="profile_page" id="profile_page">
           <h1>Profiles</h1>
           <img src="pro.png">
           <h3>Username :@adminstrator</h3>
           <h3>ID: ad0986u985</h3>
           <button onclick="show();" >Change Password</button>
        </div>
        <div class="change_password" id="change_password">
           <h1> change password</h1>
           <form action="profile.php" method="POST">
                <label for="Old password*">current password*</label><br>
                <input type="password" name="OldPassword" id="" placeholder="Enter Current Password"><br><br>
                <label for="Password">New Password*</label><br>
                <input type="password" name="NewPassword" id="" placeholder="Enter New Password"><br><br>
                <label for="Password">Confirm New Password*</label><br>
                <input type="password" name="ConfirmNewPassword" id="" placeholder="Confirm New Password"><br><br>
                <input type="submit" name="Change" value="Change" >
             </form>
         </div>
<?php include('footer.php') ?>
    <script>
    const chpass=document.getElementById('change_password');
    const pro=document.getElementById('profile_page');
        function hide(){
           
        chpass.style.display='none'; 
        }
        function show(){
            chpass.style.display='block';
            pro.style.display='none'; 
        }
       hide();
    </script>
</body>
</html>