<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>showData</title>
    <link rel="stylesheet" type="text/css" href="/view/showCard.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
</head>
<body>

        <?php
        if (isset($_GET['studentID'])) {
          require_once '../model/ConDB.php';
          require_once '../model/card.php';
          $stmt = $conn->prepare("SELECT * FROM datacard WHERE studentID=?");
          $stmt->execute([$_GET['studentID']]);
          $row = $stmt->fetch(PDO::FETCH_ASSOC);
          //ถ้าคิวรี่ผิดพลาดให้กลับไปหน้า index
          if($stmt->rowCount() < 1){
              header('Location: ../index.php');
              exit();
          } 
          } //isset
      ?>
      <div class="container">
          <div class="card">
            <div id="1" class="row">
                <div class="col-3">
                  <img id="npru" src="/img/npru2.png" alt="Student Photo"><br>
                  <img id="ship" src="/img//asd-removebg-preview.png" alt="">
                </div>
                <div class="col-6">
                  <p> <b> มหาวิทยาลัยราชภัฏนครปฐม </b><br>NAKORN PATHOM RAJABHAT UNIVERSITY
                      <br><br> <strong>ชื่อ-สกุล:</strong> <?=$row['name'];?>
                      <br> <strong>รหัสนักศึกษา:</strong> <?=$row['studentID']?>
                      <br> <strong>สาขา:</strong> <?=$row['major']?>
                      <br> <strong>คณะ:</strong> <?=$row['Faculty']?>
                      <br> <strong>อายุ:</strong> <?=$row['age']?> ปี
                      <br> <strong>ชั้นปี</strong> <?=$row['YearsClass']?>
                      </p>
                </div>
                <div class="col-3">
                  <img id="profile" src="<?=$row['imageURL']?>" alt="">
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
      </div>
      </div>
      <br>
      <br>
      <center>
      <a href="/view/editCard.php?studentID=<?=$row['studentID']?>"><button type="submite" name = "update_card" class="btn btn-success">edit</button></a>
      <a href="/controller/del.php?studentID=<?=$row['studentID']?>"><button type="submite" name = "del_card" class="btn btn-danger">del</button></a>
    </center>
</body>
</html>