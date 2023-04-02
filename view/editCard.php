<?php
session_start();
require_once "../model/ConDB.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edit Course</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
     <!-- Favicon-->
     <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="../css/styles.css" rel="stylesheet" />
        <link href="../css/css.css" rel="stylesheet" />
        <script src="https://kit.fontawesome.com/c150442d6f.js" crossorigin="anonymous"></script>
</head>
<body>
            <!-- Navigation-->
            <nav class="navbar navbar-expand-lg navbar-light bg-warning">
            <div class="container-fluid px-4 px-lg-5">
                <a class="navbar-brand" href="http://sc.npru.ac.th/"><i class="fas fa-atom"></i> SC Short Courses</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0 me-lg-4">
                        <li class="nav-item"><a class="nav-link" aria-current="page" href="http://sc.npru.ac.th/">คณะวิทยาศาสตร์และเทคโนโลยี</a></li>
                        <li class="nav-item"><a class="nav-link" href="https://forms.gle/Gd6Yzdffsb83qpZw7" target="_blank">ยืนยันการชำระเงิน</a></li>
                        <li class="nav-item"><a class="nav-link" href="./course/addcourse.php" target="_blank">เพิ่มคอร์ส</a></li>
                    </ul>
                </div>
            </div>
        </nav>
                <!-- Header-->
                <header class="bg-or-5 py-1 bg-header-img">
            <div class="container-fluid px-4 px-lg-5 my-5">
                <div class="text-center orange-theme-4">
                    <h1 class="display-4 fw-bolder">หลักสูตรระยะสั้น</h1>
                    <p class="lead fw-normal text-50 mb-0">คณะวิทยาศาสตร์และเทคโนโลยี มหาวิทยาลัยราชภัฏนครปฐม</p>
                </div>
            </div>
        </header>
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
<form method="POST" action="../controller/editSaveDB.php">
    <div class="container-md mt-4">
        <center>
            <h1>แก้ไขคอร์ส</h1>
            <div  class="col-4"></div>
            <div class="col-4">
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="studentID" name = "studentID" value="<?=$row['studentID'];?>" >
                <label for="floatingInput">studentID</label>
            </div>

            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="name" name = "name" value="<?=$row['name'];?>" >
                <label for="floatingPassword">name</label>
            </div>

            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="major" name = "major"  value="<?=$row['major'];?>" >
                <label for="floatingInput">major</label>
            </div>

            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="Faculty" name = "Faculty"  value="<?=$row['Faculty'];?>" >
                <label for="floatingPassword">Faculty</label>
            </div>

            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="birthDay" name = "birthDay"  value="<?=$row['birthDay'];?>" >
                <label for="floatingInput">birthDay</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="imageURL" name = "imageURL"  value="<?=$row['imageURL'];?>" >
                <label for="floatingInput">imageURL</label>
            </div>
            </div>
            <div class="col-4"></div>

            <button type="submite" name = "update_sci_cs" class="btn btn-success">แก้ไขข้อมูล</button>
        </center>
    </div>

     <!-- Footer-->
     <footer class="py-5 bg-green mt-4">
            <div class="container-fluid">
              <p class="m-0 text-center text-dark">
                Copyright &copy; Faculty of Faculty of Science and Technology Nakhon Pathom Rajabhat University 2021 <br>
                <!-- <a href="#">web'dev by Kingzlab | Illustration by SaNeKi | credit </a> -->
              </p>

            </div>
        </footer>
        <script src="https://unpkg.com/@popperjs/core@2"></script>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
</form>
</body>
</html>
