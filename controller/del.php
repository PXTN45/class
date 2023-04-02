<?php
echo $studentID = $_GET["studentID"];
include_once "../model/ConDB.php";
include_once "../model/card.php";
$obj_name = new Card();
echo $rs2 = $obj_name->delCard($studentID);
header("location: ../index.php");
exit(0);
?>