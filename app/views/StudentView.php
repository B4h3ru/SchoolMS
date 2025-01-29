<?php
include_once __DIR__.'/../controllers/StudentController.php';

class StudentView extends StudentController{

    protected function getStdInformation($account_id){
        $getStdInfo = $this->getStdInfo($account_id);
        return $getStdInfo;

        //something there 

    }
    protected function getLearningSubjectList($grade){
        $getSubject = $this->getSubjectList($grade);
        return $getSubject;

         //something there 

    }
    protected function getMarkResult($student_id){
        $getResult = $this->getRsut($student_id);
        return $getResult;

         //something there 


    }
    protected function getBabysitterInformation($clasRoomID){
        $getBabysiterinfo = $this->getBabysitterInfo($clasRoomID);
        return $getBabysiterinfo;

         //something there 

    }

    protected function WriteMsgForBabysitter($senderID,$receiverID,$msgText,$role){
        $isSend = $this->WriteMsg($senderID,$receiverID,$msgText,$role);
        return $isSend;

         //something there 


    }
    protected function getMsgFromBabysitter($senderID,$receiverID){
        $getMsg = $this->getMsg($senderID,$receiverID);
        return $getMsg;

         //something there 


    }
    protected function isReadMsg($senderID,$receiverID){
        $isRead = $this->seenMsg($senderID,$receiverID);
        return $isRead;

         //something there 


    }
    protected function getDailyActivity($classroomID){
        $getActivity = $this->getActivity($classroomID);
        return $getActivity;

         //something there 

    }
    protected function getStudentdResource(){
        $getR = $this->getStdResource();
        return $getR;

         //something there 
    }
    
    protected function getSchoolAnnouncement(){
        $getAnn = $this->getAnnounce();
        return $getAnn;

         //something there 


    }



}


?>