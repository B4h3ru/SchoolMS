<?php
include_once __DIR__.'/../controllers/StudentController.php';

class StudentView extends StudentController{

    public function getStdInformation($account_id){
        $getStdInfo = $this->getStdInfo($account_id);
        return $getStdInfo;

        //something there 

    }
    public function getLearningSubjectList($grade){
        $getSubject = $this->getSubjectList($grade);
        return $getSubject;

         //something there 

    }
    public function getMarkResult($student_id){
        $getResult = $this->getRsut($student_id);
        return $getResult;

         //something there 


    }
    public function getBabysitterInformation($clasRoomID){
        $getBabysiterinfo = $this->getBabysitterInfo($clasRoomID);
        return $getBabysiterinfo;

         //something there 

    }

    public function WriteMsgForBabysitter($senderID,$receiverID,$msgText,$role){
        $isSend = $this->WriteMsg($senderID,$receiverID,$msgText,$role);
        return $isSend;

         //something there 


    }
    public function getMsgFromBabysitter($senderID,$receiverID){
        $getMsg = $this->getMsg($senderID,$receiverID);
        return $getMsg;

         //something there 


    }
    public function isReadMsg($senderID,$receiverID){
        $isRead = $this->seenMsg($senderID,$receiverID);
        return $isRead;

         //something there 


    }
    public function getDailyActivity($classroomID){
        $getActivity = $this->getActivity($classroomID);
        return $getActivity;

         //something there 

    }
    public function getStudentdResource(){
        $getR = $this->getStdResource();
        return $getR;

         //something there 
    }
    
    public function getSchoolAnnouncement(){
        $getAnn = $this->getAnnounce();
        return $getAnn;

         //something there 


    }



}


?>