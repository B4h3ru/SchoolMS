<?php
include_once __DIR__.'/../database/Db.php';

class AdminModel extends Db {
   // private $id;
   // private $acccountId;
   // private $firstName;
   // private $midleName;
   // private $lastName;
   // private $adress;
   // private $gender;
   // private $phoneNumber;
   // private $Email;
   // private $dob;
   // private $doj;

   public function checkConnection(){
        $con = $this->connect();
        if($con){
         echo "connection is successfuly connected ";
        } 
        else {
         echo "connaction failed"; 
        } 
    }

    
    public function addAdmin($acccountId,$firstName,$midleName,$lastName,$adress,$gender,$phoneNumber,$Email,$dob,$doj){
      try{
         // $acccountId="";
         $connection = $this->connect(); //creating connection 
         $dob = (string)$dob; //cast to date to string
         $doj =(string)$doj; //ast to date to string
         $addQuery= "insert into admin(account_id,first_name,midle_name,last_name,address,gender,phone_number,Email,date_of_birth,date_of_join)
                     VALUES(?,?,?,?,?,?,?,?,?,?)";
         $stmnt = $connection->prepare($addQuery);
         $stmnt->bind_param("isssssisss",$acccountId,$firstName,$midleName,$lastName,$adress,$gender,$phoneNumber,$Email,$dob,$doj);
         $stmnt->execute();
         $connection->close();
         return true;
      }catch(Exception $e){
         $connection->close();
         echo $e;
         return false;
      }

    }
   
    public function registerTeacher($acccountId,$firstName,$midleName,$lastName,$adress,$gender,$phoneNumber,$Email,$dob,$doj)
    {
      try{
         $connection = $this->connect(); //creating connection 
         $dob = (string)$dob; //cast to date to string
         $doj =(string)$doj; //ast to date to string
         $addQuery= "insert into teachers(account_id,first_name,midle_name,last_name,address,gender,phone_number,email,date_of_birth,date_of_join)
                     VALUES(?,?,?,?,?,?,?,?,?,?)";
         $stmnt = $connection->prepare($addQuery);
         $stmnt->bind_param("isssssisss",$acccountId, $firstName,$midleName,$lastName,$adress,$gender,$phoneNumber,$Email,$dob,$doj);
         $stmnt->execute();
         $connection->close();
         return true;
      }catch(Exception $e){
         $connection->close();
         return false;
      }

    }

    public function registerStudent($acccountId,$parentId,$firstName,$midleName,$lastName,$adress,$gender,$phoneNumber,$dob,$doj){
      try{
         $connection = $this->connect(); //creating connection 
         $dob = (string)$dob; //cast to date to string
         $doj =(string)$doj; //ast to date to string
         $addQuery= "insert into students(account_id,parent_id,first_name,midle_name,last_name,gender,address,phone_number,date_of_birth,date_of_join)
                     VALUES(?,?,?,?,?,?,?,?,?,?)";
         $stmnt = $connection->prepare($addQuery);
         $stmnt->bind_param("iisssssiss",$acccountId,$parentId,$firstName,$midleName,$lastName,$gender,$adress,$phoneNumber,$dob,$doj);
         $stmnt->execute();
         $connection->close();
         return true;
      }catch(Exception $e){
         $connection->close();
         return false;
      }
    }

    public function addStudentParent($fname,$lName,$address,$phoneNumber,$email,){
      try{
         $connection = $this->connect(); //creating connection 
         $addQuery= "insert into studentparent(FirstName,LastName,Address,PhoneNumber,Email)
                     VALUES(?,?,?,?,?)";
         $stmnt = $connection->prepare($addQuery);
         $stmnt->bind_param("sssis",$fname,$lName,$address,$phoneNumber,$email);
         $stmnt->execute();
         $connection->close();
         return true;
      }catch(Exception $e){
         $connection->close();
         return false;
      }
    }

    public function registerBabysitter($acccountId,$firstName,$midleName,$lastName,$gender,$Email,$address,$phoneNumber,$dob,$doj){
      try{
         $connection = $this->connect(); //creating connection 
         $dob = (string)$dob; //casting date to string
         $doj = (string)$doj; //casting date to string
         $addQuery= "insert into teachers(account_id,first_name,midle_name,last_name,gender,email,address,phone_number,date_of_birth,date_of_join)
                     VALUES(?,?,?,?,?,?,?,?,?,?)";
         $stmnt = $connection->prepare($addQuery);
         $stmnt->bind_param("issssssiss",$acccountId,$firstName,$midleName,$lastName,$gender,$Email,$address,$phoneNumber,$dob,$doj);
         $stmnt->execute();
         $connection->close();
         return true;
      }catch(Exception $e){
         $connection->close();
         return false;
      }
    }

    public function createAccount($acountID,$username,$password,$role){
      try{
         $hashed_password = password_hash($password, PASSWORD_BCRYPT);
         $connection = $this->connect();
         $addQuery ="insert into account(account_id,username,password,role)
                     VALUES(?,?,?,?)";
         $stmnt = $connection->prepare($addQuery);
         $stmnt->bind_param('isss',$acountID,$username,$hashed_password,$role);
         $stmnt->execute();
         $connection->close();
         return true;
      }catch(Exception $e){
         $connection->close();
         return false;
      }
      
    }

    public function addClassroom($classromID,$section,$grade){
      try{
         $connection = $this->connect();
         $sqlQuery = "insert int classroom(classroom_id,section,grade) 
                     VALUES(?,?,?)";
         $stmt = $connection->prepare($sqlQuery);
         $stmt->bind_param("sss",$classromID,$section,$grade);
         $stmt->execute();
         $connection->close();
         return true;
      }catch(Exception $e){
         $connection->close();
         return false;
      }
    }


    public function addSubject($subject_name,$grade,$decription){  //subject is is autoincurment so we don't need to insert
      try{
         $con = $this->connect();
         $sqlQuery =" insert into subject(subject_name,grade,decription)
                     VALUES(?,?,?)";
         $stmt = $con->prepare($sqlQuery);
         $stmt->bind_param('sis',$subject_name,$grade,$decription);
         $stmt->execute();
         $con->close();
         return true;
      }catch(Exception $e){
         $con->close();
         return false;
      }

    }

    public function postAnnouncment($post_content){
      try{
         $con = $this->connect();
         $sqlQuery =" insert into announcment(post_content)
                     VALUES(?)";
         $stmt = $con->prepare($sqlQuery);
         $stmt->bind_param('s',$post_content);
         $stmt->execute();
         $con->close();
         return true;
      }catch(Exception $e){
         $con->close();
         return false;
      }

    }










}

?>