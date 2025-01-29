<?php
include_once __DIR__.'/../models/babysitterModel.php';

class BabaysitterController extends BabysitterModel{

    protected function getBabySitterInformation($act_id){
        $getInfo = $this->getBabysitterInfo($act_id);
        return $getInfo;
    }
    protected function getClassRmStd($class_id){
        $getclassStd = $this->getClassroomStudent($class_id);
        return $getclassStd;
    }
    protected function AddActivity($classrmID,$subID,$activity){
        $isAdd = $this->AddDailyClassActivity($classrmID,$subID,$activity);
        return $isAdd;
    }
    protected function WriteMsg($senderID,$receiverID,$msgText,$role){
          $writemsg = $this->WriteMessage($senderID,$receiverID,$msgText,$role);
          return $writemsg;
    }
    protected function getMsg($senderID,$receiverID){
        $getM = $this->getMessage($senderID,$receiverID);
        return $getM;

    }
    protected function seenMsg($senderID,$receiverID){
        $seen = $this->seenMessage($senderID,$receiverID);
        return $seen;
    }
    protected function getActivity($classroomID){
        $getActvty = $this->getDailyClassActivity($classroomID);
        return $getActvty;

    }
    
    protected function getAnnounce(){
        $getAnnounce =$this->getAnnouncement();
        return $getAnnounce;

    }




}



?>