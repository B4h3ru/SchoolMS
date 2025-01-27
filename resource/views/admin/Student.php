<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assests/style/admincss/student.css">
    <title>ADD Student</title>
</head>
<body>
    <?php include('header.php') ?>
    <h1>Add Student</h1>
    <div class="student_page">
     <div>
      
      
        <h3>Student Information<h3>
           <label for="">First Name </label><br>
        <input type="text" name="FirstName<" id=""><br>
    

          <label for="">Middle Name</label><br>
        <input type="text" name="MiddleName<" id=""><br>
           <label for="">Last Name</label><br>
        <input type="text" name="LastName<" id=""><br>
        
            <label for="">Gender</label><br>
            <select id="select-role" name="SelectGender">
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select><br>
        
            <label for="">Date of Birth</label><br>
            <input type="date" name="DateOfBirth" ><br>
       
           <label for="">Adress</label><br>
        <input type="text" name="Adress<" id=""><br>
        
           <label for="">Phone Number</label><br>
        <input type="text" name="PhoneNumber<" id=""><br>
       
            <label for="">Assign Class</label><br>
            <select id="select-role" name="AssignClass">
                <option value="1">1</option>
                <option value="2">2</option>
                 <option value="3">3</option>
                <option value="4">4</option>
                 <option value="5">5</option>
                <option value="6">6</option>
                 <option value="7">7</option>
                <option value="8">8</option>
            </select><br>
        
            <label for="">Role</label><br>
            <select id="select-role" name="SelectRolw">
                <option value="Teacher">Teacher</option>
                <option value="Babysitter">Babysitter</option>
            </select><br>
            
      </div>
      <div class="parent">
            <h3>Parent Information</h3>
           <label for="">First Name </label><br>
        <input type="text" name="FirstName<" id=""><br>
           <label for="">Last Name</label><br>
        <input type="text" name="LastName<" id=""><br>
        <label for="">Adress</label><br>
        <input type="text" name="Adress<" id=""><br>
            <label for="">Gender</label><br>
            <select  name="SelectGender">
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select><br>
        
            <label for="">Date of Birth</label><br>
            <input type="date" name="DateOfBirth" ><br>
       
           
           <label for="">Phone Number</label><br>
        <input type="text" name="PhoneNumber<" id=""><br>
           <label for="">Email</label><br>
        <input type="email" name="Email<" id=""><br>

        <input type="submit" value="Add" name="Add">
        </div>
    

        
   </div>
    <?php include('footer.php') ?>
</body>
</html>