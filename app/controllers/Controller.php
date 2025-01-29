<?php
include_once __DIR__.'/../models/model.php';

  //this Controller is created to immplement commen logic for actors
 // it used to reduce redundency of code 

class Controller extends Model{
    // ----------------------------------------------------------------------------------------------------------------------------------------

    protected function LogedIn($username,$password){
      $loginData = $this->Login($username,$password);
      return $loginData;
  }

  protected function changePass($username,$oldPassword,$newPassword){
    $isChanged = $this->changePassword($username,$oldPassword,$newPassword);
    return $isChanged;
  }

  //----------------------------------------------------------------------------------


  
     

}


?>