<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assests/style/admincss/assgignclass.css">
    <title>Document</title>
    <style>
        
    </style>
</head>
<body>
    <?php include('header.php') ?>
      
    <?php include('llinks.php')?>

    <div class="container">
        <button onclick="show1();">Assign Teacher</button>
        <button onclick="show2();">Assign Babysister</button>
    </div>
    <h1>Assign</h1>
    <div class="assign" id="assign_teacher">
        <label for="">Teacher ID</label><br>
        <select id="select-TeacherId" name="SelectTeacherId">
                <option value="tch435">tch435</option>
                <option value="rchi8590">rchi8590</option>
            </select><br>
        <label for="">Subject ID</label><br>
        <select id="select-SubjectId" name="SelectSubject">
                <option value="sub435">sub435</option>
                <option value="subi8590">subi8590</option>
            </select><br> 
            <label for="">Class Room ID</label><br>
            <select id="select-classId" name="SelectclassId">
                <option value="cl435">cl435</option>
                <option value="cli8590">cli8590</option>
            </select><br>
            <input type="submit" value="Assign" name="Assign">
       
    </div>
    <div class="assign" id="assign_babysitter">
        <label for="">Babysitter ID</label><br>
        <select id="select-BabysitterId" name="SelectBabysitterId">
                <option value="bbs435">bbs435</option>
                <option value="bbsi8590">bbs8590</option>
            </select><br>
            <label for="">Class Room ID</label><br>
            <select id="select-classId" name="SelectclassId">
                <option value="cl435">cl435</option>
                <option value="cli8590">cli8590</option>
            </select><br>
            <input type="submit" value="Assign" name="Assign">
       
    </div>
    <?php include('footer.php') ?>
    <script>
const teacherDiv = document.getElementById('assign_teacher');
      const babysitterDiv = document.getElementById('assign_babysitter');
function show1() {
      
      teacherDiv.style.display = 'block';
      babysitterDiv.style.display='none';
}
function show2(){
    babysitterDiv.style.display = 'block';
    teacherDiv.style.display='none';
}
      
     
        // const teacher=document.getElementById('assign_teacher');
        // const babysister=document.getElementById('assign_babysitter');

        // function hide(){
        //     babysister.style.display='none';
        //     teacher.style.display='none';
        // }
        // hide();
        // function show(assign){
        //     if(assign == 'teacher'){
        //         teacher.style.display='none';
        //     // }else if(assign == 'babysitter'){
        //     //     babysister.style.display='block';

        //     // }
        // }
    </script>
</body>
</html>