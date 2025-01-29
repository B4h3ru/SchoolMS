<?php 
include_once __DIR__.'/../models/AdminModel.php';
class AdminController extends AdminModel {

    protected function addEmp($acccountId,$firstName,$midleName,$lastName,$gender,$adress,$phoneNumber,$Email,$role,$dob){
        $addEp = $this->addEmployee($acccountId,$firstName,$midleName,$lastName,$gender,$adress,$phoneNumber,$Email,$role,$dob);
        return $addEp;
    }
    protected function regStd($std_id,$acccountId,$parentId,$firstName,$midleName,$lastName,$adress,$gender,$phoneNumber,$dob){
        $addst = $this->registerStudent($std_id,$acccountId,$parentId,$firstName,$midleName,$lastName,$adress,$gender,$phoneNumber,$dob);
        return $addst;
    }
    protected function addStdP($pID,$fname,$lName,$address,$gender,$phoneNumber,$email,$dob){
        $addstp = $this->addStudentParent($pID,$fname,$lName,$address,$gender,$phoneNumber,$email,$dob);
        return $addstp;
    }
    protected function createAct($acountID,$username,$password,$role){
        $crtAct = $this->createAccount($acountID,$username,$password,$role);
        return $crtAct;
    }
    protected function addClassr($section,$grade){
        $addClass = $this->addClassroom($section,$grade);
        return $addClass;
    }
    protected function addSubj($subject_name,$grade,$decription){
        $addSub = $this->addSubject($subject_name,$grade,$decription);
        return $addSub;
    }
    protected function postAnnounce($title,$post_content){
        $post =  $this->postAnnouncment($title,$post_content);
        return $post;
    }

    protected function assignStdClass($stdId,$classroomID){
        $assignStd = $this->assignStudentClass($stdId,$classroomID);
        return $assignStd;
    }

    protected function assignTchClass($classroomID,$teacherID,$subjectID){
        $assignTch = $this->assignTeachingClass($classroomID,$teacherID,$subjectID);
        return $assignTch;
    }

    protected function assignBabystrClass($babsiiterID,$classroomID){
        $asssignBaby = $this->assignBabysitterClass($babsiiterID,$classroomID);
        return $asssignBaby;
    }

    protected function addRsrce($subjID,$path,$role){
        $addResce = $this->addResource($subjID,$path,$role);
        return $addResce;
    }

    // ----------------------------------------------------------------------------------------------------------------------------------------


    protected function getAllAdminList(){
        $adminlist = $this->getAllAdmin();
        return $adminlist;
    }
    protected function getAllTeacherList(){
        $teacherlist = $this->getAllTeacher();
        return $teacherlist;
    }
    protected function getAllBabysitterList(){
        $babysitterlist = $this->getAllBabysitter();
        return $babysitterlist;
    }
    protected function getAllStudentList(){
        $studentList = $this->getAllStudent();
        return $studentList;
    }
    protected function getAllClassRm(){
        $classroom = $this->getAllClassroom();
        return $classroom;
    }

    protected function getAllSub(){
        $subject = $this->getAllSubject();
        return $subject;
    }



}
?>