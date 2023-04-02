<?php
include_once "../model/ConDB.php";
include_once "../model/card.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $studentID = $_POST['studentID'];
    $name = $_POST['name'];
    $major = $_POST['major'];
    $Faculty = $_POST['Faculty'];
    $birthDay = $_POST['birthDay'];
    if ($_POST['birthDay']) {
        $timestamp = strtotime($_POST['birthDay']); // แปลงเป็น timestamp
        $age = date('Y') - date('Y', $timestamp); // คำนวณอายุโดยใช้ปีปัจจุบันลบด้วยปีเกิด
        if (date('md') < date('md', $timestamp)) {
            $age--; // ถ้าวันเดือนปัจจุบันยังไม่ถึงวันเกิดในปีนี้ อายุลดลง 1 ปี
        }
    }
    if ($age == 19) {
        $YearsClass = 1;
    }else if ($age == 20) {
        $YearsClass = 2;
    }else if ($age == 21) {
        $YearsClass = 3;
    }else if ($age == 22) {
        $YearsClass = 4;
    }else{
        $YearsClass = 5;
    }
    $imageURL = $_POST['imageURL'];
    if (empty($name)) {
        echo "Name is empty";
    } else {
        echo $studentID;
    }
    $obj_name = new Card();
    $rs2 = $obj_name->editCard($studentID, $name, $major, $Faculty, $birthDay, $age,$YearsClass, $imageURL);
    header("location: ../index.php");
    exit(0);
}

?>