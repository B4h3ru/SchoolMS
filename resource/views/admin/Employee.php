<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assests/style/admincss/employee.css">
    <title>Document</title>
</head>
<body>
    <?php include('header.php') ?>
    <div class="employee_page">
      <h1>Add Employee</h1>
        <div>
           <label for="">First Name </label><br>
        <input type="text" name="FirstName<" id="">
        </div>
         <div>
          <label for="">Middle Name</label><br>
        <input type="text" name="MiddleName<" id="">
        </div>
        <div>
           <label for="">Last Name</label><br>
        <input type="text" name="LastName<" id="">
        </div>
        <div>
            <label for="">Gender</label><br>
            <select id="select-role" name="SelectGender">
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select>
        </div>

        <div>
           <label for="">Adress</label><br>
        <input type="text" name="Adress<" id="">
        </div>
        <div>
           <label for="">Phone Number</label><br>
        <input type="text" name="PhoneNumber<" id="">
        </div>
        <div>
           <label for="">Email</label><br>
        <input type="email" name="Email<" id="">
        </div>
        
        <div>
            <label for="">Date of Birth</label><br>
            <input type="date" name="DateOfBirth" >
        </div>
        <div>
            <label for="">Role</label><br>
            <select id="select-role" name="SelectRolw">
                <option value="Teacher">Teacher</option>
                <option value="Babysitter">Babysitter</option>
            </select>
            
        </div>
        <input type="submit" value="Add" name="Add">
   </div>
    <?php include('footer.php') ?>
</body>
</html>