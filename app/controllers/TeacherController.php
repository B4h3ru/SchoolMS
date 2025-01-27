<?php
include_once __DIR__.'/../models/TeacherModel.php';

class TeacherContoller extends TeacherModel{

   protected function getTchrInfo($account_id){
      $tInfo = $this->getTeacherInfo($account_id);
      return $tInfo;

   }
   protected function getClassRmStd($classroom_id){
      $getClasStd = $this->getClassroomStudent($classroom_id);
      return $getClasStd;
   }
   protected function addStdMark($std_id,$sub_id,$ass,$midExam,$finalExam,$total){
      $addstdMrk = $this->addStudentMark($std_id,$sub_id,$ass,$midExam,$finalExam,$total);
      return $addstdMrk; 
   }
   protected function getStdMrk($subj_id){
      $getStdMrk = $this->getStudentMark($subj_id);
      return $getStdMrk;
   }
   protected function getR(){
      $getR = $this-> getResource();
      return $getR;
   }

   protected function getAnnounce(){
      $getAnn = $this->getAnnouncement();
      return $getAnn;
   }



}



?>