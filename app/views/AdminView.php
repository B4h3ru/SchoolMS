<?php
include_once __DIR__.'/../controllers/AdminController.php';

class AdminView extends AdminController {
   
    public function registerEmployee($acccountId,$firstName,$midleName,$lastName,$gender,$adress,$phoneNumber,$Email,$role,$dob){
        $addEp = $this->addEmp($acccountId,$firstName,$midleName,$lastName,$gender,$adress,$phoneNumber,$Email,$role,$dob);
        return $addEp;
    }
    public function registerStd($std_id,$acccountId,$parentId,$firstName,$midleName,$lastName,$adress,$gender,$phoneNumber,$dob){
        $addst = $this->regStd($std_id,$acccountId,$parentId,$firstName,$midleName,$lastName,$adress,$gender,$phoneNumber,$dob);
        return $addst;
    }
    public function addStdParent($pID,$fname,$lName,$address,$gender,$phoneNumber,$email,$dob){
        $addstp = $this->addStdP($pID,$fname,$lName,$address,$gender,$phoneNumber,$email,$dob);
        return $addstp;
        
    }
    public function createA($acountID,$username,$password,$role){
        $crtAct = $this->createAct($acountID,$username,$password,$role);
        return $crtAct;
    }
    public function addC($section,$grade){
        $addClass = $this->addClassr($section,$grade);
        return $addClass;
    }
    public function addS($subject_name,$grade,$decription){
        $addSub = $this->addSubj($subject_name,$grade,$decription);
        return $addSub;
    }
    public function postAnn($title,$post_content){
        $post =  $this->postAnnounce($title,$post_content);
        return $post;
    }

    public function assignStdC($stdId,$classroomID){
        $assignStd = $this->assignStdClass($stdId,$classroomID);
        return $assignStd;
    }

    public function assignTchC($classroomID,$teacherID,$subjectID){
        $assignTch = $this->assignTchClass($classroomID,$teacherID,$subjectID);
        return $assignTch;
    }

    public function assignBabystrC($babsiiterID,$classroomID){
        $asssignBaby = $this->assignBabystrClass($babsiiterID,$classroomID);
        return $asssignBaby;
    }

    public function addR($subjID,$path,$role){
        $addResce = $this->addRsrce($subjID,$path,$role);
        return $addResce;
    }
// ----------------------------------------------------------------------------------------------------------------------

    public function getAdmin(){
        $adminList = $this->getAllAdminList();
        return $adminList;
    }
    public function getTeacher(){
        $teacherList = $this->getAllTeacherList();
        return $teacherList;
    }
    public function getBabysitter(){
        $babysitterList = $this->getAllBabysitterList();
        return $babysitterList;
    }
    public function getStudent(){
        $studentList = $this->getAllStudentList();
        return $studentList;
    }
    public function getClassroom(){
        $classroom = $this->getAllClassRm();
        return $classroom;
    }

    public function getSubject(){
        $subject = $this->getAllSub();
        return $subject;
    }


}



?>