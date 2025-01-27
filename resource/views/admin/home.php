<?php
require_once __DIR__."../../../../includes/include.inc.php";

$model = new AdminView();
// $model->checkConnection();
if($_SERVER['REQUEST_METHOD']=='POST'){
    $fname = $_POST['firstname'];
    $mname = $_POST['midlename'];
    $lname = $_POST['lastname'];
    $address = $_POST['address'];
    $gender = $_POST['gender'];
    $phonNo = $_POST['phonNo'];
    $email = $_POST['email'];
    $dob = $_POST['dob'];
    // $doj = $_POST['doj'];
    // $actId =$_POST['actId'];
    // $username =$_POST['username'];
    // $pass = $_POST['password'];
    $role =$_POST['role'];
    
    if($role == 'admin'){
        $actId ="Ad". floor(microtime(true) * 1000);
    }else if($role=='teacher'){
        $actId ="Tch". floor(microtime(true) * 1000);
    }
    else if($role=='babysitter'){
        $actId ="Ba". floor(microtime(true) * 1000);
    }
    
    $username = "@".$fname; //username generating
    $pass = $fname.rand(1000,9999); // password gentating
    $create = $model->createA($actId,$username,$pass,$role);
    if($create){
        $add = $model->registerEmployee($actId,$fname,$mname,$lname,$gender,$address,$phonNo,$email,$role,$dob);
        if($add){
             echo "<script>alert(' successfully added');</script>";
        }
       
    }else{
        echo "<script>alert('failed');</script>";
    }


}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SchoolMS</title>
</head>
<body>
    <form action="/SchoolMs/admin" method="POST" style="text-align: center;">
       <h1>add employee</h1>
       First Name: <input type="text" name="firstname" ><br><br>
       midle Name: <input type="text" name="midlename" ><br><br>
       last Name: <input type="text" name="lastname" ><br><br>
       Address : <input type="text" name="address" ><br><br>
       gender: <input type="text" name="gender" ><br><br>
       phone number: <input type="number" name="phonNo" ><br><br>
       email: <input type="email" name="email" ><br><br>
      date if birth: <input type="date" name="dob" ><br><br>
      <!-- date of join: <input type="date" name="doj" ><br><br> -->
      <!-- <h1>create Account </h1> -->
      <!-- Account ID : <input type="text" name="actId" ><br><br> -->
      <!-- UesrName : <input type="text" name="username"><br><br> -->
      <!-- password : <input type="password" name="password"><br><br> -->
      Role : <select name="role" id="">
                <option value="admin">admin</option>
                <!-- <option value="student">Student</option> -->
                <option value="teacher">teacher</option>
                <option value="babysitter">babysitter</option>
            </select><br><br>
      <input type="submit" value="Submit">

    </form>
    
</body>
</html>




