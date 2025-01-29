<?php
include_once __DIR__.'/../controllers/BabysitterController.php';

class BabysitterView extends BabaysitterController{

    public function getBabystrInfo($act_id){
        $getInfo = $this->getBabySitterInformation($act_id);

        return $getInfo;






    }
    public function getClassRoomStd($class_id){
        $getclassStd = $this->getClassRmStd($class_id);

        return $getclassStd;






    }
    public function AddClassActivity($classrmID,$subID,$activity){
        $isAdd = $this->AddActivity($classrmID,$subID,$activity);

        return $isAdd;




    }
    public function WtitMsgForStdP($senderID,$receiverID,$msgText,$role){
          $writemsg = $this->WriteMsg($senderID,$receiverID,$msgText,$role);

          return $writemsg;








    }
    public function getMsgFromStdP($senderID,$receiverID){
        $getM = $this->getMsg($senderID,$receiverID);

        return $getM;




    }
    public function IsSeenMsg($senderID,$receiverID){
        $seen = $this->seenMsg($senderID,$receiverID);
        return $seen;


    }
    public function getActivity($classroomID){
        $getActvty = $this->getDailyClassActivity($classroomID);

        return $getActvty;


    }
   
    public function getAnn(){
        $getAnnounce =$this->getAnnounce();

        return $getAnnounce;







    }
}





?>