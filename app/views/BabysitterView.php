<?php
include_once __DIR__.'/../controllers/BabysitterController.php';

class BabysitterView extends BabaysitterController{

    protected function getBabystrInfo($act_id){
        $getInfo = $this->getBabySitterInformation($act_id);

        return $getInfo;






    }
    protected function getClassRoomStd($class_id){
        $getclassStd = $this->getClassRmStd($class_id);

        return $getclassStd;






    }
    protected function AddClassActivity($classrmID,$subID,$activity){
        $isAdd = $this->AddActivity($classrmID,$subID,$activity);

        return $isAdd;




    }
    protected function WtitMsgForStdP($senderID,$receiverID,$msgText,$role){
          $writemsg = $this->WriteMsg($senderID,$receiverID,$msgText,$role);

          return $writemsg;








    }
    protected function getMsgFromStdP($senderID,$receiverID){
        $getM = $this->getMsg($senderID,$receiverID);

        return $getM;




    }
    protected function IsSeenMsg($senderID,$receiverID){
        $seen = $this->seenMsg($senderID,$receiverID);
        return $seen;


    }
    protected function getActivity($classroomID){
        $getActvty = $this->getDailyClassActivity($classroomID);

        return $getActvty;


    }
   
    protected function getAnn(){
        $getAnnounce =$this->getAnnounce();

        return $getAnnounce;







    }
}





?>