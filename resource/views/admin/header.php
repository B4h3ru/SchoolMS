<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
    margin: 0;
    padding: 0;
}

body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #54a5bb;
    color: white;
}
button{
    cursor: pointer;

}
label{
    font-size: large;
}
.navbar {
    display: flex;
    background-color: #d1c9c9;
}
.navbar a
 {
    width: 20%;
    text-decoration: none;
    color: #000;
    font-size: 20px;
    font-weight: bold;
    border: 1px black solid;
    padding: 10px;
    margin: 10px;
    background: transparent;
    
}
.navbar a{
    background-color:transparent ;
    text-decoration: none;
    color: #000;
}
    </style>
</head>
<body>
<div class="navbar">
        <a href="/SchoolMs/admin/dashboard" class="dashboard_anchor">Dashboard</a>
        <a href="/schoolMs/admin/addresource">Add Resources</a>
        <a href="/schoolMs/admin/addannounce">Add Announce</a>
        <a href="/schoolMs/admin/addemployee">Add Employee</a>
        <a href="/schoolMs/admin/addstudent">Add Student</a>
        <a href="/schoolMs/admin/assignClass">Assign Class</a>
    </div>
</body>
</html>