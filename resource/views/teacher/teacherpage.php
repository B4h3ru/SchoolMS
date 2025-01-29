<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teacher Profile</title>
    <link rel="stylesheet" href="teacherpage.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer">
</head>
<body>
    <header>
        <h1 id="head">Teacher Profile</h1>
    </header>

    <div class="profile-container">
        <!-- Left-side buttons -->
        <div class="left-side">
            <h2>Beletu Kebede<br>TCD-1234</h2>
            <div class="buttons">
                <button onclick="showSection('subject', 'Subject')">Subject</button>
                <button onclick="showSection('announcment', 'Announcement')">Announcement</button>
                <button onclick="showSection('resource', 'Teacher Resources')">Teacher Resources</button>
                <button onclick="showSection('setting', 'Settings')">Settings</button>
                <button onclick="showSection('logout', 'Logout')">Logout</button>
            </div>
        </div>

        <!-- Right-side content -->
        <div class="right-side">
            <div id="profile" class="content-section">
                <img src="download.jfif" alt="Profile Picture">
                <h1>Beletu Kebede<br>TCD-1234</h1>
            </div>

            <div id="subject" class="content-section">
                <a class="arrow" href="teacherpage.php"><i class="fa-solid fa-arrow-left"></i></a>
                <h3>Subjects</h3>
                <div class="subject-buttons">
                    <button onclick="showSection('amharic', 'Amharic')">Amharic<br>GRADE-3</button>
                    <button onclick="showSection('english', 'English')">English<br>GRADE-6</button>
                    <button onclick="showSection('physics', 'Physics')">Physics<br>GRADE-8</button>
                    <button onclick="showSection('amharic', 'Amharic')">Amharic<br>GRADE-3</button>
                    <button onclick="showSection('english', 'English')">English<br>GRADE-6</button>
                    <button onclick="showSection('physics', 'Physics')">Physics<br>GRADE-8</button>
                </div>
            </div>

            <div id="announcment" class="content-section">
                <a class="arrow" href="teacherpage.php"><i class="fa-solid fa-arrow-left"></i></a>
                <h3>Announcements</h3>
                <p>Welcome to the teacher's portal. Stay tuned for more updates.</p>
            </div>

            <div id="resource" class="content-section">
                <a class="arrow" href="teacherpage.php"><i class="fa-solid fa-arrow-left"></i></a>
                <h3>Teacher Resources</h3>
                <p>Access materials, lesson plans, and other resources here.</p>
            </div>

            <div id="setting" class="content-section setting_button">
                <a class="arrow" href="teacherpage.php"><i class="fa-solid fa-arrow-left"></i></a>
                <h3>Settings</h3>
                <div class="setting_button">
                 <h3>Change Password</h3>
                <form action="" method="">
                    <label for="current password*">current password*</label><br>
                    <input type="password" name="CurrentPassword" id="" placeholder="Enter Current Password"><br><br>
                    <label for="Password">Password*</label><br>
                    <input type="password" name="NewPassword" id="" placeholder="Enter New Password"><br>
                    <label for="Password">Confirm New Password*</label><br>
                    <input type="password" name="ConfirmNewPassword" id="" placeholder="Confirm New Password"><br>
                    <input type="submit" name="Change" value="Change" >
                </form>
            </div>
            </div>

            <div id="amharic" class="content-section subject-buttons">
                <a class="arrow" href="teacherpage.php"><i class="fa-solid fa-arrow-left"></i></a>
                <h3>Amharic Classes</h3>
                <p>The Listed Classes are Amharic Classes:</p>
                <button>SECTION-E</button>
                <button>SECTION-B</button>
                <button>SECTION-A</button>
            </div>

            <div id="english" class="content-section subject-buttons">
                <a class="arrow" href="teacherpage.php"><i class="fa-solid fa-arrow-left"></i></a>
                <h3>English Classes</h3>
                <p>The Listed Classes are English Classes:</p>
                <button>SECTION-C</button>
                <button>SECTION-D</button>
                <button>SECTION-E</button>
            </div>

            <div id="physics" class="content-section subject-buttons">
                <a class="arrow" href="teacherpage.php"><i class="fa-solid fa-arrow-left"></i></a>
                <h3>Physics Classes</h3>
                <p>The Listed Classes are Physics Classes:</p>
                <button>SECTION-F</button>
                <button>SECTION-G</button>
                <button>SECTION-H</button>
            </div>
        </div>
    </div>

    <script src="teacherpage.js">
        
    </script>
</body>
</html>

