<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assests/style/admincss/resource.css">
    <title>Document</title>
</head>
<body>
    <?php include('header.php') ?>
<div class="resource_page">
           <h1> Add Resource</h1>
         
    <form action="" method="post">
        <div>
        <label for="student-id">Student ID:</label>
                <input type="text" id="student-id" name="StudentId">
        </div>
        <div >
            <label for="student-resource">Student Resource:</label>
            <input type="file" id="student-resource" name="StudentResource">
        </div>
        <div >
            <label for="select-role">Select Role:</label>
            <select id="select-role" name="SelectRole">
                <option value="Student">Student Text Book</option>
                <option value="Teacher">Teacher Text Book</option>
            </select>
        </div>

         <input type="submit" name="Add" value="ADD">
    </form>
</div>
<?php include('footer.php') ?>
</body>
</html>