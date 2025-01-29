<?php
include_once __DIR__.'/../database/Db.php';

class StudentModel Extends Db{

    protected function getStudentInfo($account_id){
        try{
             $con = $this->connect();
            $sql = "SELECT * FROM students
                        JOIN  classroomstudents ON classroomstudents.student_id = students.student_id
                        WHERE students.account_id = ?;
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
    protected function getLearningSubject($grade){
        try{
            $con = $this->connect();
            $sql = "Select * from subject where grade = ?";
            $stmt =  $con->prepare($sql);
            $stmt->bind_param('s',$student_id);
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
    

    protected function getResult($student_id){
        try{
            $con = $this->connect();
            $sql = "Select * from studentmark where student_id = ?";
            $stmt =  $con->prepare($sql);
            $stmt->bind_param('s',$student_id);
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

    protected function getBabysitter($clasRoomID){
        try{
            $con = $this->connect();
            $sql = "SELECT * FROM babysitterclassrom 
                    JOIN employee ON employee.employee_id = babysitterclassrom.employee_id
                    WHERE  babysitterclassrom.classrom_id = ?;";
                     $stmt =  $con->prepare($sql);
            $stmt->bind_param('s',$clasRoomID);
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

    protected function getResource(){
        try{
            $con = $this->connect();
            $sql = "SELECT * FROM resource WHERE role = 'student';";
            $result = $con->query($sql);
            $con->close();
            return $result;
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