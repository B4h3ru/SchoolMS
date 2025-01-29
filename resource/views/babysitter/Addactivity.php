<?php
require_once __DIR__.'/../../../includes/include.inc.php';

$manage = new BabysitterView();
if($_SERVER['REQUEST_METHOD']=='POST'){
    $subjectID = htmlspecialchars(stripslashes(trim($_POST['subject'])));
  

   

}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Activity</title>
    <link rel="stylesheet" href="Addactivity.css">
</head>
<body>
    <nav class="navbar">
        <button class="nav-btn"><a href="home.php">Home</a></button>
        <button class="nav-btn"><a href="Addactivity.php">Add activity</a></button>
        <button class="nav-btn"><a href="viewactivity.php">View activity</a></button>
        <!-- <button class="nav-btn"><a href="message.php">Message</a></button> -->
        <button class="nav-btn"><a href="setting.php">Setting</a></button>
    </nav>

    <main class="content">
        <h1>Add activity</h1>
        <form action="Addactivity.php" method="POST">
        <label for="class">Select class ID</label>
            <select id="subject" name="classromID">
                <option value="">Select subject</option>
                <option value="math">Math</option>
                <option value="science">Science</option>
                <option value="english">English</option>
            </select>
            <label for="subject">Select subject ID</label>
            <select id="subject" name="subject">

                <option value="">Select subject</option>
                <option value="math">Math</option>
                <option value="science">Science</option>
                <option value="english">English</option>
            </select>
            <textarea placeholder="Enter activity details here"></textarea>
            <button type="submit" class="submit-btn">Submit</button>
        </form>
    </main>

    <footer>
        <p>&copy; 2024. All rights reserved</p>
    </footer>
</body>
</html>