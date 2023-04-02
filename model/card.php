<?php
class card{
    private $ConDB;
    public function __construct(){
        $con = new ConDB();
        $con->connect();
        $this->ConDB = $con->conn;
    }

    public function getCard()
    {
        $sql = "SELECT * FROM datacard";
        $query = $this->ConDB->prepare($sql);
        if( $query->execute()){
            $result = $query->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        }else {
            return false;
        }
    }

    public function getCradDetail($studentID)
    {
        $sql = "SELECT * FROM datacard WHERE studentID = ".$studentID ;
        $query = $this->ConDB->prepare($sql);
        if( $query->execute()){
            $result = $query->fetch(PDO::FETCH_ASSOC);
            // echo ($result);
            return $result;
        }else {
            return false;
        }
    }
    
    // public function getCoursePro($pro_id)
    // {
    //     $sql = "SELECT * FROM agency WHERE `agency_pro_id` = '". $pro_id ."'";
    //     $query = $this->ConDB->prepare($sql);
    //     if( $query->execute()){
    //         $result = $query->fetchAll(PDO::FETCH_ASSOC);
    //         return $result;
    //     }else {
    //         return false;
    //     }
    // }

    // public function getAgencyID($a_id)
    // {
    //     $sql = "SELECT * FROM agency where agency_id=".$a_id;
    //     $query = $this->ConDB->prepare($sql);
    //     if( $query->execute()){
    //         $result = $query->fetch(PDO::FETCH_ASSOC);
    //         return $result;
    //     }else {
    //         return false;
    //     }
    // }

    public function addCard($studentID, $name, $major, $Faculty, $birthDay, $age, $YearsClass, $imageURL)
    {
        //$sql = "INSERT INTO `agency` (`agency_id`, `agency_name`, `agency_context`, `agency_pic`, `agency_location`, `agency_pro_id`) VALUES (NULL, '$a_name', '$a_context', '$a_pic', '$a_location', '$a_pro');";
        $sql = "INSERT INTO `datacard` (`studentID`, `name`, `major`, `Faculty`, `birthDay`, `age`, `YearsClass`, `imageURL`) VALUES ('$studentID', '$name', '$major',' $Faculty','$birthDay','$age','$YearsClass','$imageURL');";
        $query = $this->ConDB->prepare($sql);
        if( $query->execute()){
            return true;
        }else {
            return false;
        }
    }

    public function delCard($studentID)
    {
        $sql = "DELETE FROM `datacard` WHERE `studentID`='".$studentID."'";
        $query = $this->ConDB->prepare($sql);
        if( $query->execute()){
            return true;
        }else {
            return false;
        }
    }

    public function editCard($studentID, $name, $major, $Faculty, $birthDay, $age,$YearsClass, $imageURL)
    {
        //$sql = "UPDATE `datacard` SET `cs_id` = '". $id ."', `cs_name` = '". $name ."', `cs_img` = '". $img ."', `cs_date` = '". $date ."', `cs_wallet` = '". $wallet ."', `cs_time` = '". $time ."' WHERE `cs_id` = '". $id ."'";
        $sql = "UPDATE `datacard` SET `studentID` = '". $studentID ."', `name` = '". $name ."', `major` = '". $major ."', `Faculty` = '". $Faculty ."', `birthDay` = '". $birthDay ."', `age` = '". $age ."', `YearsClass` = '". $YearsClass ."', `imageURL` = '". $imageURL ."' WHERE `studentID` = '". $studentID ."'";
        $query = $this->ConDB->prepare($sql);
        if( $query->execute()){
            return true;
        }else {

            return false;
        }
    }
	
}
?>