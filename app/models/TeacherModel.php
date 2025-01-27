<?php 
include_once __DIR__.'/../database/Db.php';

class TeacherModel extends Db {
    protected function getTeacherInfo($account_id){
       try{
            $con = $this->connect();
            $sqlQ ="SELECT * FROM employee 
                        JOIN teachingclassroom ON teachingclassroom.empolyee_id = employee.employee_id 
                        where employee.account_id = ?;
                        ";
            $stmt = $con->prepare($sqlQ);
            $stmt->bind_param('s',$account_id);
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

  protected function addStudentMark($std_id,$sub_id,$ass,$midExam,$finalExam,$total){
    try{
        $con = $this->connect();
        $sqlQuery = "INSERT INTO studentmark(student_id,subject_id,assessement,mid_exam,final_exam,total)
                    VALUES(?,?,?,?,?,?)";
        $stmnt =$con->prepare($sqlQuery);
        $stmnt->bind_param('sidddd',$std_id,$sub_id,$ass,$midExam,$finalExam,$total);
        $sqlCheck = "SELECT * studentmark WHERE student_id = ? AND subject_id = ?;";
        $CHeckstmt = $con->prepare($sqlCheck);
        $CHeckstmt->bind_param('si',$std_id,$sub_id);
        $CHeckstmt->execute();
        $res = $CHeckstmt->get_result();
        $CHeckstmt->close();
        if($res != null){
          $sqlUpdate = "UPDATE studentmark 
                         SET assessement = ? , mid_exam = ?, final_exam = ?,total = ?
                         WHERE student_id = ? and subject_id = ? ;";
          $updateStmt = $con->prepare($sqlUpdate);
          $updateStmt->bind_param('ddddsi',$ass,$midExam,$finalExam,$total,$std_id,$sub_id);
          $updateStmt->execute();
          $updateStmt->close();
          $con->close();
        }else {
          $stmnt->execute();
          $stmnt->close();
          $con->close();
          return true;
        }
   }catch(Exception $e){
        $con->close();
        return false;
   }
}

protected function getStudentMark($subj_id){
    try{
        $con = $this->connect();
        $sql = "SELECT * FROM studentmark WHERE subject_id = ? ;";
        $stmt = $con->prepare($sql);
        $stmt->bind_param('i',$subj_id);
        $stmt->execute();
        $result = $stmt->get_result();
        $con->close();
        return $result;
   }catch(Exception $e){
        $con->close();
        return null;
   }

}

protected function getResource(){
    try{
        $con = $this->connect();
        $sql = "SELECT * FROM resource WHERE role = 'teacher';";
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



}


?>