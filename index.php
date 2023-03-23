<!DOCTYPE html>
<html>
<head>
	<title>Student Card</title>
	<style>
		body {
			background-color: #E6E6FA;
		}
		.card {
			width: 400px;
			height: 250px;
			background-color: #F5DEB3;
			border-radius: 10px;
			box-shadow: 5px 5px 5px #888888;
			margin: 50px auto;
			padding: 20px;
			text-align: center;
			font-family: Arial, sans-serif;
		}
		.card img {
			width: 100px;
			height: 100px;
			border-radius: 50%;
			margin-top: 20px;
			margin-bottom: 10px;
		}
		.card h1 {
			font-size: 24px;
			margin-bottom: 10px;
		}
		.card p {
			font-size: 18px;
			margin-bottom: 10px;
		}
		.card span {
			font-weight: bold;
		}
	</style>
</head>
<body>
	<?php
		// กำหนดค่าตัวแปรสำหรับข้อมูลนักศึกษา
        include "./interface.php";
	?>
	<div class="card">
		<img src="avatar.jpg">
		<h1><?php echo $studentCard->name ?></h1>
		<p>รหัสนักศึกษา: <span><?php echo $studentCard->id ?></span></p>
		<p>คณะ: <span><?php echo $studentCard->faculty ?></span></p>
		<p>สาขา: <span><?php echo $studentCard->major ?></span></p>
		<p>ปีที่เข้าศึกษา: <span><?php echo $studentCard->year ?></span></p>
	</div>
</body>
</html>
