<?php
include_once __DIR__.'/../controllers/TeacherController.php';

class TeacherView extends TeacherContoller{

    public function getTeacherInformation($account_id){
        $tInfo = $this->getTchrInfo($account_id);


    }
    public function getClassRoomStudentInformation($classroom_id){
        $getClasStd = $this->getClassRmStd($classroom_id);

    }

    public function addStudentMarkList($std_id,$sub_id,$ass,$midExam,$finalExam,$total){
        $addstdMrk = $this->addStdMark($std_id,$sub_id,$ass,$midExam,$finalExam,$total);
        
    }

    public function getStudentMarkList($subj_id){
        $getStdMrk = $this->getStdMrk($subj_id);
    }

    public function getTeachingResource(){
        $getR = $this-> getR();

    }
    public function getSchoolAnnouncement(){
        $getAnn = $this->getAnnounce();

    }





}


?>


