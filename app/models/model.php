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
 //=============================================================================================
// 



     

}


?>