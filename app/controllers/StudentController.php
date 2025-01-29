<?php
include_once __DIR__.'/../models/StudentModel.php';

class StudentController extends StudentModel{

    protected function getStdInfo($account_id){
        $getStdInfo = $this->getStudentInfo($account_id);
        return $getStdInfo;
    }
    protected function getSubjectList($grade){
        $getSubject = $this->getLearningSubject($grade);
        return $getSubject;

    }

    protected function getRsut($student_id){
        $getResult = $this->getResult($student_id);
        return $getResult;
    }
    protected function getBabysitterInfo($clasRoomID){
        $getBabysiterinfo = $this->getBabysitter($clasRoomID);
        return $getBabysiterinfo;
    }

    protected function WriteMsg($senderID,$receiverID,$msgText,$role){
        $isSend = $this->WriteMessage($senderID,$receiverID,$msgText,$role);
        return $isSend;
    }
    protected function getMsg($senderID,$receiverID){
        $getMsg = $this->getMessage($senderID,$receiverID);
        return $getMsg;
    }
    protected function seenMsg($senderID,$receiverID){
        $isSeen = $this->seenMessage($senderID,$receiverID);
        return $isSeen;
    }
    protected function getActivity($classroomID){
        $getActivity = $this->getDailyClassActivity($classroomID);
        return $getActivity;
    }
    protected function getStdResource(){
        $getR = $this->getResource();
        return $getR;
    }

    protected function getAnnounce(){
        $getAnn = $this->getAnnouncement();
        return $getAnn;
    }



}


?>