<?php
include_once __DIR__.'/../database/Db.php';

    //this model is created to immplement commen logic for all actor 
    // it used to reduce redundency of code 

class Model extends Db{

    //=============================================================================================
    // ----------  Common for all actor ------------------
   protected function Login($username,$password){  
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

   protected function changePassword($username,$oldPassword,$newPassword){
      try{ 
         $con = $this->connect();
         $sql1 = "update account set password=?  where username=? and password=?";
         $sql = "select * from account where username=? and password=?";
         $stmt = $con->prepare($sql);
         $stmt->bind_param('ss',$username,$oldPassword);
         $stmt->execute();
         $result = $stmt->get_result();
         $stmt->close();
         if($result != null){
            $stmt2 = $con->prepare($sql1);
            $stmt2->bind_param('sss',$newPassword,$username,$oldPassword);
            $stmt2->execute();
            $stmt2->close();
            $con->close();
            return true;
           }
      }
      catch(Exception $e){
         $con->close();
         return false;
      }
   }

 }
 //=============================================================================================
// 



?>