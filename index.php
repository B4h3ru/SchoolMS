<?php 
include __DIR__.'/includes/include.inc.php';

$manage = new View();
if($_SERVER['REQUEST_METHOD'] =='POST'){
    $username = htmlspecialchars(stripslashes(trim($_POST['Username'])));
    $password = htmlspecialchars(stripslashes(trim($_POST['Password'])));

    $userData = $manage->Validate($username,$password);
    if($userData != null){
        $data = $userData->fetch_assoc();
        if($data['role'] == 'admin'){
            session_reset();
            $_SESSION['user'] =$username;
            $_SESSION['role'] ='admin';
            header('location: resource/views/admin/dashboard.php');
            exit();
        }
        else if($data['role'] == 'teacher'){
            session_reset();
            $_SESSION['user'] = $username;
            $_SESSION['role'] ='teacher';
            $_SESSION['accountID'] = $data['account_id'];

            // header('location: resource/views/admin/dashboard.php');
            // exit();
            
        }
        else if($data['role'] == 'babysitter'){
            session_reset();
            $_SESSION['user'] = $username;
            $_SESSION['role'] = 'babysitter';
            $_SESSION['accountID'] =$data['account_id'];

            // header('location: resource/views/admin/dashboard.php');
            // exit();
            
        }
        else if($data['role'] == 'student'){
            session_reset();
            $_SESSION['user'] = $username;
            $_SESSION['role'] = 'student';
            $_SESSION['accountID'] = $data['account_id'];

            // header('location: resource/views/admin/dashboard.php');
            // exit();
            
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="resource/assats/style/login.css">
    <title>login</title>
</head>
<body>
    <div class="container">
        <!-- <div class="typing-text ">Wellcome To School Managment System</div> -->
       
        <div class="right">
           <h3>Login</h3>
           <form action="index.php" method="POST">
            <label for="Username">Username</label><br>
            <input type="text" name="Username" id="" placeholder="Enter username"><br><br>
            <label for="Password">Password</label><br>
            <input  type="password" name="Password" id="" placeholder="Enter Password"><br>
            <div class="chb">
                <!-- <a href="">Remember Me</a> -->
                <!-- <input type="checkbox" name="Checkbox" id=""> -->
                <!-- <a href="">Forget Password</a><br> -->
            </div>
            
             <input type="submit" name="Login" value="Login" >
        </form><br>
        <hr><br>
        <h4>&copy;2024.All rights reserved
        </h4>
        </div>
    </div>
</body>
</html>