<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <link rel="stylesheet" href="Addactivity.css">

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #E0F7FA;
            margin: 0;
            padding: 20px;
        }
        .container {
            max-width: 400px;
            margin: 0 auto;
            background-color: #FFFFFF;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            text-align: center;
        }
        h1 {
            color: #00796B;
        }
        .profile-icon {
            font-size: 50px;
            color: #00796B;
            margin: 20px 0;
        }
        .info {
            margin: 15px 0;
            color: #616161;
        }
        .button {
            display: inline-block;
            margin: 10px;
            padding: 10px 15px;
            background-color: #00796B;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }
        .footer {
            text-align: center;
            margin-top: 20px;
            font-size: 12px;
            color: #616161;
        }
    </style>
</head>
<body>
<nav class="navbar">
        <button class="nav-btn"><a href="home.php">Home</a></button>
        <button class="nav-btn"><a href="Addactivity.php">Add activity</a></button>
        <button class="nav-btn"><a href="viewactivity.php">View activity</a></button>
        <!-- <button class="nav-btn"><a href="message.php">Message</a></button> -->
        <button class="nav-btn"><a href="setting.php">Setting</a></button>
    </nav>

    <div class="container">
        <h1>Profiles</h1>
        <div class="profile-icon">👤</div>
        <div class="info">Username: <strong>@kalkidan</strong></div>
        <div class="info">ID: <strong>Ba83495783t856748837</strong></div>
        
        <a href="#" class="button">Change Password</a>
        <a href="#" class="button">LOGOUT</a>
    </div>

    <!-- <div class="footer">
        @2024. All rights reserved.
    </div> -->

</body>
</html>