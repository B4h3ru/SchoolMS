<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assests/style/admincss/dashboard1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <title>Dashboard</title>
</head>
<body>
    <?php include('header.php')?>
    <?php include('llinks.php')?>
        <div class="dashboard">
            <h1>Dashboard</h1>
            <p>There will be some description here!</p>
        </div>

        <?php

?>

        <div class="grid">
            <div class="card">
                <a href="table.php" id="studentIcon" onclick="student();"><i class="fa-solid fa-graduation-cap"></i></a>
                <h2>12000</h2>
                <p>Student</p>
            </div>
            <div class="card">
                <a href="table.php" id="teacherIcon" onclick="teacher();"><i class="fa-solid fa-person-chalkboard"></i></a>
                <h2>1200</h2>
                <p>Teacher</p>
            </div>
            <div class="card">
                <a href="table.php" id="BabysitterIcon" onclick="babysitter();"><i class="fa-solid fa-person-breastfeeding"></i></a>
                <h2>1200</h2>
                <p>Babysitter</p>
            </div>
            <div class="card">
                <a  href="table.php" id="AdministratorsIcon" onclick="admin();"><i class="fa-solid fa-user-tie"></i></a>
                <h2>12</h2>
                <p>Administrators</p>
            </div>
            <div class="action-buttons">
                <button onclick="show('add_class')">Add Classroom</button>
                <button onclick="show('add_subject')">Add Subjects</button>
            </div>
       <?php  include('footer.php') ?>
      
    <script src="table.js"></script>

</body>
</html>