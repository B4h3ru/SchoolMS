<?php
require_once __DIR__.'/../../../includes/include.inc.php';

$manage = new TeacherView();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teacher Profile</title>
    <link rel="stylesheet" href="../../assats/style/tpro.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer">
     <title>Teacher Profile</title>
</head>
<body>
    <header>
        <h1 id="head">Teacher Profile</h1>
    </header>

    <div class="profile-container">
        <div class="left-side">
            <h2>Beletu kebede<br>TCD-1234</h2>
            
            <div class="buttons">
                <button onclick="showContent('subject')">Subject</button>
                <button onclick="showContent('announcement')">Announcement</button>
                <button onclick="showContent('teacherResource')">Teacher Resources</button>
                <button onclick="showContent('settings')">Settings</button>
                <button onclick="showContent('logout')">Logout</button>
            </div>
        </div>

        <div class="right-side">
            <div id="dynamic-content">
                <div class="profile">
                    <img src="../../assats/images/download.jfif" alt="">
                   <h1>Beletu kebede<br>TCD-1234</h1>
                </div>
                
                <!-- Dynamic content will be displayed here based on button clicks -->
            </div>
        </div>
    </div>

    <script src="../../assats/js/tpro.js">
    
    </script>
</body>
</html>
