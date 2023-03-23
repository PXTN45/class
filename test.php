<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/test.css">
</head>
<body>
  <?php
   include "./interface.php";
  ?>
    <div class="card">
        <div class="card-header">
          <img src="https://via.placeholder.com/150" alt="Student Photo">
          <h2><?php echo $studentCard->name ?></h2>
        </div>
        <div class="card-body">
          <p><strong>ID:</strong><?php echo $studentCard->id ?> </p>
          <p><strong>คณะ:</strong><?php echo $studentCard->faculty ?></p>
          <p><strong>Major:</strong><?php echo $studentCard->major ?></p>
          <p><strong>Year:</strong><?php echo $studentCard->year ?></p>
          <p><strong>Age:</strong><?php echo $age ?></p>
        </div>
      </div>
      
</body>
</html>