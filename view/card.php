<?php
include_once "./model/conDB.php";
include_once "./model/card.php";
$obj_name = new card();
$rs2 = $obj_name->getCard();
?>
<!DOCTYPE html>
<html>
<head>
  <title>Student ID Card</title>
  <link rel="stylesheet" type="text/css" href="/view/card.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
</head>
<body>
<?php
foreach ($rs2 as $result2) {
    ?>
<a href="/view/showData.php?studentID=<?=$result2['studentID']?>" class="btn">
<div class="container">
        <div class="card">
            <div id="1" class="row">
                <div class="col-3">
                  <img id="npru" src="/img/npru2.png" alt="Student Photo"><br>
                  <img id="ship" src="/img//asd-removebg-preview.png" alt="">
                </div>
                <div class="col-6">
                  <p> <b> มหาวิทยาลัยราชภัฏนครปฐม </b><br>NAKORN PATHOM RAJABHAT UNIVERSITY
                      <br><br> <strong>ชื่อ-สกุล:</strong> <?=$result2['name']?>
                      <br> <strong>รหัสนักศึกษา:</strong> <?=$result2['studentID']?>
                      <br> <strong>สาขา:</strong> <?=$result2['major']?>
                      <br> <strong>คณะ:</strong> <?=$result2['Faculty']?>
                      <br> <strong>อายุ:</strong> <?=$result2['age']?> ปี
                      <br> <strong>ชั้นปี:</strong> <?=$result2['YearsClass']?>
                      </p>
                </div>
                <div class="col-3">
                  <img id="profile" src="<?=$result2['imageURL']?>" alt="">
                </div>
            </div>
              <div id="2" class="row">
                  <div class="col">
                      <p id="IDcard">9 9 9 9&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                          9 9 9 9&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                          9 9 9 9&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                          9 9 9 9
                      </p>
                  </div>
              </div>
                <div class="row">
                  <div id="classVisa" class="col">
                    <img id="visa" src="/img/visa.jpg" alt="">
                  </div>
                </div>
      </div>
</div>
</a>
<?php
}
?>
</body>
</html>