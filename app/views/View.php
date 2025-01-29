<?php
include_once __DIR__.'/../controllers/Controller.php';

    //this view is created to immplement commen logic for all actors
    // it used to reduce redundency of code 
     

class View extends Controller{

    // ----------------------------------------------------------------------------------------------------------------------

    public function Validate($username,$password){
        $Data = $this->LogedIn($username,$password);
        return $Data;  

        
    }

    public function changeP($username,$oldPassword,$newPassword){
        $isChanged = $this->changePass($username,$oldPassword,$newPassword);
        return$isChanged;


      }
    // -----------------------------------------------------------------------------------------------------------------------


     

}


?>