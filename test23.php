<?php
    $birthdate = "2002-09-21"; // วันเกิดในรูปแบบ Y-m-d
    $timestamp = strtotime($birthdate); // แปลงเป็น timestamp
    $age = date('Y') - date('Y', $timestamp); // คำนวณอายุโดยใช้ปีปัจจุบันลบด้วยปีเกิด
    if (date('md') < date('md', $timestamp)) {
        $age--; // ถ้าวันเดือนปัจจุบันยังไม่ถึงวันเกิดในปีนี้ อายุลดลง 1 ปี
    }
    echo "อายุของคุณคือ " . $age . " ปี"; // แสดงผลลัพธ์
    
?>