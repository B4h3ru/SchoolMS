<?php
include_once __DIR__.'/../database/Db.php';

class BabysitterModel extends Db {


    protected function getBabysitterInfo($account_id){
        try{
             $con = $this->connect();
            $sql = "SELECT * FROM employee
                        JOIN  babysitterclassrom ON babysitterclassrom.employee_id = employee.employee_id
                        WHERE employee.account_id = ?;
            ";
            $stmt =  $con->prepare($sql);
            $stmt->bind_param('s',$account_id);
            $stmt->execute();
            $res = $stmt->get_result();
            $stmt->close();
            $con->close();
            return $res;
        }catch(Exception $e){
            $con->close();
            return null;
        }
    }

    protected function getClassroomStudent($classroom_id){
        try{
            $con = $this->connect();
            $sqlQ = "SELECT * FROM classroomstudents 
                            JOIN students ON students.student_id = classroomstudents.student_id 
                            WHERE classroomstudents.classroom_id = ?;
            ";
            $stmt = $con->prepare($sqlQ);
            $stmt->bind_param('s',$classroom_id);
            $stmt->execute();
            $result = $stmt->get_result();
            $stmt->close();
            $con->close();
            return $result;
       }catch(Exception $e){
            $con->close();
            return null;
       }
    }

    protected function AddDailyClassActivity($classrmID,$subID,$activity){
        try{
            $con = $this->connect();
            $sql = " INSERT INTO studentdailyactivity(classroom_id,subject_id,activity)
                    VALUES(?,?,?); ";
            $stmt = $con->prepare($sql);
            $stmt->bind_param('sis',$classrmID,$subID,$activity);
            $stmt->execute();
            $stmt->close();
            $con->close();
            return true;
        }catch(Exception $e){
            $con->close();
            return false;
       }
    }
    protected function WriteMessage($senderID,$receiverID,$msgText,$role){
        try{
            $con = $this->connect();
            $sql = "INSERT INTO massege(sender_id,receiver_id,message_text,role); ";
            $stmt = $con->prepare($sql);
            $stmt->bind_param('ssss',$senderID,$receiverID,$msgText,$role);
            $stmt->execute();
            $stmt->close();
            $con->close();
            return true;
        }catch(Exception $e){
            $con->close();
            return false;
         }
    }
    protected function getMessage($senderID,$receiverID){
        try{
            $con = $this->connect();
            $sql = "SELECT * FROM massege WHERE sender_id = ? AND receiver_id = ?;";
            $stmt = $con->prepare($sql);
            $stmt->bind_param('ss',$senderID,$receiverID);
            $stmt->execute();
            $res = $stmt->get_result();
            $stmt->close();
            $con->close();
            return $res;
        }catch(Exception $e){
            $con->close();
            return null;
       }
    }
    protected function seenMessage($senderID,$receiverID){
        try{
            $con = $this->connect();
            $SqlUpdate = "UPDATE massege SET read_status = 0 WHERE sender_id = ? AND receiver_id = ?; ";
            $stmt = $con->prepare($SqlUpdate);
            $stmt->bind_param('ss',$senderID,$receiverID);
            $stmt->execute();
            $stmt->close();
            $con->close();
            return true;
        }catch(Exception $e){
            $con->close();
            return false;
        }

    }
    protected function getDailyClassActivity($classroomID){
        try{
            $con = $this->connect();
            $sql = "SELECT * FROM studentdailyactivity WHERE classroom_id = ?;";
            $stmt = $con->prepare($sql);
            $stmt->bind_param('s',$classroomID);
            $stmt->execute();
            $res = $stmt->get_result();
            $stmt->close();
            $con->close();
            return $res;
        }catch(Exception $e){
            $con->close();
            return null;
       }
    }
   
    protected function getAnnouncement(){
        try{
            $con = $this->connect();
            $sql = "SELECT * FROM announcment;";
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