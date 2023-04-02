<?php
class StudentCard {
    public $id;
    public $name;
    public $faculty;
    public $major;
    public $year;
    public $birthdate;

    public function __construct($id, $name, $faculty, $major, $year, $birthdate) {
        $this->id = $id;
        $this->name = $name;
        $this->faculty = $faculty;
        $this->major = $major;
        $this->year = $year;
        $this->birthdate = $birthdate;
    }

    public function getID() {
        return $this->id;
    }

    public function getName() {
        return $this->name;
    }

    public function getFaculty() {
        return $this->faculty;
    }

    public function getMajor() {
        return $this->major;
    }

    public function getYear() {
        return $this->year;
    }

    public function calculateAge() {
        $birthdate = "1990-05-20"; // วันเกิดในรูปแบบ Y-m-d
        $timestamp = strtotime($birthdate); // แปลงเป็น timestamp
        $age = date('Y') - date('Y', $timestamp); // คำนวณอายุโดยใช้ปีปัจจุบันลบด้วยปีเกิด
        if (date('md') < date('md', $timestamp)) {
            $age--; // ถ้าวันเดือนปัจจุบันยังไม่ถึงวันเกิดในปีนี้ อายุลดลง 1 ปี
        }
        echo "อายุของคุณคือ " . $age . " ปี"; // แสดงผลลัพธ์
        return $age;
      }

   
}

// ตัวอย่างการใช้งาน
$studentCard = new StudentCard('644259012', 'John Smith', 'คณะวิทยาศาสตร์และเทคโนโลยี', 'วิศวกรรมซอฟต์แวร์', 2019, 1990-05-20);
// $calculator = new StudentCard("1990-01-01");
// echo $studentCard->getCardInfo();

?>