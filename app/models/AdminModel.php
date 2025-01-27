<?php
include_once __DIR__.'/../database/Db.php';
// include_once '../../includes/include.inc.php';

class AdminModel extends Db {


   // public function checkConnection(){
   //      $con = $this->connect();
   //      if($con){
   //       echo "connection is successfuly connected ";
   //      } 
   //      else {
   //       echo "connaction failed"; 
   //      } 
   //  }
    // ========================================================================================================================================================
   
    protected function addEmployee($acccountId,$firstName,$midleName,$lastName,$gender,$adress,$phoneNumber,$Email,$role,$dob)
    {
      try{
         $connection = $this->connect(); //creating connection 
         $dob = (string)$dob; //cast to date to string
         $addQuery= "insert into employee(employee_id,account_id,first_name,midle_name,last_name,gender,address,phone_number,email,role,date_of_birth)
                     VALUES(?,?,?,?,?,?,?,?,?,?,?)";
         $stmnt = $connection->prepare($addQuery);

         $id = floor(microtime(true) * 100); // using microseconds to genrate unique id
         if($role=='admin'){
            $emp_id = 'Ad'.(string)$id.rand(100,1000).$id;
         }
         else if($role=='teacher'){
            $emp_id = 'Tch'.(string)$id.rand(100,1000).$id;

         }else if($role == 'babysitter'){
            $emp_id = 'Ba'.(string)$id.rand(100,1000).$id;
         }
         $stmnt->bind_param("sssssssisss",$emp_id,$acccountId, $firstName,$midleName,$lastName,$gender,$adress,$phoneNumber,$Email,$role,$dob);
         $stmnt->execute();
         $stmnt->close();
         $connection->close();
         return true;
      }catch(Exception $e){
         echo $e; 
         $connection->close();
         return false;
      }

    }

    protected function registerStudent($acccountId,$parentId,$firstName,$midleName,$lastName,$adress,$gender,$phoneNumber,$dob){
      try{
         $connection = $this->connect(); //creating connection 
         $dob = (string)$dob; //cast to date to string
         $addQuery= "insert into students(student_id,account_id,parent_id,first_name,midle_name,last_name,gender,address,phone_number,date_of_birth)
                     VALUES(?,?,?,?,?,?,?,?,?,?)";
         $std_id ='std'. (string)floor(microtime(true) * 10000).rand(10,10000); //
         $stmnt = $connection->prepare($addQuery);
         $stmnt->bind_param("ssssssssis",$std_id,$acccountId,$parentId,$firstName,$midleName,$lastName,$gender,$adress,$phoneNumber,$dob);
         $stmnt->execute();
         $stmnt->close();
         $connection->close();
         return true;
      }catch(Exception $e){
         $connection->close();
         return false;
      }
    }

    protected function addStudentParent($pID,$fname,$lName,$address,$gender,$phoneNumber,$email,$dob){
      try{
         $connection = $this->connect(); //creating connection 
         $dob = (string)$dob; 
         $addQuery= "insert into studentparent(Parent_id,FirstName,LastName,Address,gender,PhoneNumber,Email,date_of_birth)
                     VALUES(?,?,?,?,?,?,?,?)";
         $stmnt = $connection->prepare($addQuery);
         $stmnt->bind_param("sssssiss",$pID,$fname,$lName,$address,$gender,$phoneNumber,$email,$dob);
         $stmnt->execute();
         $stmnt->close();
         $connection->close();
         return true;
      }catch(Exception $e){
         $connection->close();
         return false;
      }
    }

    protected function createAccount($acountID,$username,$password,$role){
      try{
         // $hashed_password = password_hash($password, PASSWORD_BCRYPT);
         $connection = $this->connect();
         $addQuery ="insert into account(account_id,username,password,role)
                     VALUES(?,?,?,?)";
         $stmnt = $connection->prepare($addQuery);
         $stmnt->bind_param('ssss',$acountID,$username,$password,$role);
         $stmnt->execute();
         $stmnt->close();
         $connection->close();
         return true;
      }catch(Exception $e){
         // echo $e;
         $connection->close();
         return false;
      }
      
    }

    protected function addClassroom($section,$grade){
      try{
         $connection = $this->connect();
         $classromID= $grade.$section;
         $sqlQuery = "insert int classroom(classroom_id,section,grade) 
                     VALUES(?,?,?)";
         $stmt = $connection->prepare($sqlQuery);
         $stmt->bind_param("ssi",$classromID,$section,$grade);
         $stmt->execute();
         $stmt->close();
         $connection->close();
         return true;
      }catch(Exception $e){
         $connection->close();
         return false;
      }
    }


    protected function addSubject($subject_name,$grade,$decription){  //subject is is autoincurment so we don't need to insert
      try{
         $con = $this->connect();
         $sqlQuery =" insert into subject(subject_name,grade,description)
                     VALUES(?,?,?)";
         $stmt = $con->prepare($sqlQuery);
         $stmt->bind_param('sis',$subject_name,$grade,$decription);
         $stmt->execute();
         $stmt->close();
         $con->close();
         return true;
      }catch(Exception $e){
         $con->close();
         return false;
      }

    }

    protected function postAnnouncment($title,$post_content){
      try{
         $con = $this->connect();
         $sqlQuery =" insert into announcment(title,post_content)
                     VALUES(?,?)";
         $stmt = $con->prepare($sqlQuery);
         $stmt->bind_param('ss',$title,$post_content);
         $stmt->execute();
         $stmt->close();
         $con->close();
         return true;
      }catch(Exception $e){
         $con->close();
         return false;
      }

    }

    protected function assignStudentClass($stdId,$classroomID){
      try{
          $con = $this->connect();
         $sqlQ = "insert into classroomstudents(student_id,classroom_id)
                  VALUES(?,?)";
         $stmnt = $con->prepare($sqlQ);
         $stmnt->bind_param("ss",$stdId,$classroomID);
         $stmnt->execute();
         $stmnt->close();
         $con->close();
         return true;
      }catch(Exception $e){
         $con->close();
         return false;
      }
    }

    protected function assignTeachingClass($teacherID,$subjectID,$classroomID){
      try{
         $con = $this->connect();
        $sqlQ = "insert into teachingclassroom(classroom_id ,empolyee_id,subject_id )
                 VALUES(?,?,?)";
        $stmnt = $con->prepare($sqlQ);
        $stmnt->bind_param("ssi",$classroomID,$teacherID,$subjectID);
        $stmnt->execute();
        $stmnt->close();
        $con->close();
        return true;
     }catch(Exception $e){
        $con->close();
        return false;
     }
   }

   protected function assignBabysitterClass($babsiiterID,$classroomID){
      try{
         $con = $this->connect();
        $sqlQ = "insert into babysitterclassrom(empolyee_id,classroom_id)
                 VALUES(?,?)";
        $stmnt = $con->prepare($sqlQ);
        $stmnt->bind_param("ss",$babsiiterID,$classroomID);
        $stmnt->execute();
        $stmnt->close();
        $con->close();
        return true;
     }catch(Exception $e){
        $con->close();
        return false;
     }
   }

   protected function addResource($subjID,$path,$role){
      try{
         $con = $this->connect();
        $sqlQ = "insert into resource(subject_id ,resouce_file_path,role)
                 VALUES(?,?,?)";
        $stmnt = $con->prepare($sqlQ);
        $stmnt->bind_param("iss",$subjID,$path,$role);
        $stmnt->execute();
        $stmnt->close();
        $con->close();
        return true;
     }catch(Exception $e){
        $con->close();
        echo "<script>alert(".$e.");</script>";
        return false;
     }
   }

   //=============================================================================================

   protected function adminLogin($username,$password){
      try{ 
         $con = $this->connect();
         $sql = "select * from account where username=? and password=?";
         $stmt = $con->prepare($sql);
         $stmt->bind_param('ss',$username,$password);
         $stmt->execute();
         $result = $stmt->get_result();
         if($result != null){
            $stmt->close();
            $con->close();
            return $result;
         }
      }
      catch(Exception $e){
         $con->close();
         return null;
      }

   }

   //=============================================================================================
   
   protected function getAllAdmin(){
      try{
         $con = $this->connect();
         $sql = "SELECT * FROM employee 
                     JOIN account ON account.account_id = employee.account_id
                     WHERE employee.role='admin'; ";
         $result = $con->query($sql);
         $con->close();
         return $result;
      }catch(Exception $e){
         $con->close();
         return null;
      }
   }
   
   protected function getAllTeacher(){
      try{
         $con = $this->connect();
         $sql = "SELECT * FROM employee 
                     JOIN account ON account.account_id = employee.account_id
                     WHERE employee.role='teacher';";
         $result = $con->query($sql);
         $con->close();
         return $result;
      }catch(Exception $e){
         $con->close();
         return null;
      }
   }

   protected function getAllBabysitter(){
      try{
         $con = $this->connect();
         $sql = "SELECT * FROM employee 
                     JOIN account ON account.account_id = employee.account_id
                     WHERE employee.role='babysitter';";
         $result = $con->query($sql);
         $con->close();
         return $result;
      }catch(Exception $e){
         $con->close();
         return null;
      }
   }
   protected function getAllStudent(){
      try{
         $con = $this->connect();
         $sql = "SELECT * FROM students 
                  JOIN account ON account.account_id = students.account_id; ";
         $result = $con->query($sql);
         $con->close();
         return $result;
      }catch(Exception $e){
         $con->close();
         return null;
      }
   }

   protected function getAllClassroom(){
      try{
         $con = $this->connect();
         $sql = "select * from classroom";
         $result = $con->query($sql);
         $con->close();
         return $result;
      }catch(Exception $e){
         $con->close();
         return null;
      }
   }

   protected function getAllSubject(){
      try{
         $con = $this->connect();
         $sql = "select * from subject";
         $result = $con->query($sql);
         $con->close();
         return $result;
      }catch(Exception $e){
         $con->close();
         return null;
      }
   }


}

?>