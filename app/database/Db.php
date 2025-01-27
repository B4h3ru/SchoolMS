<?php

class Db{
    private $host ="Localhost";
    private $username = "root";
    private $password ="";
    private $dbName = "school";

    protected function connect(){
        $con = new mysqli($this->host,$this->username,$this->password,$this->dbName);
        if($con){
            return $con;
        }
        else 
        {
            return null;
        }
        
    }

}















?>