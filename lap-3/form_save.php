<?php
require "main.php";

// Initialize session variables
$oldName = isset($_SESSION['old_name']) ? $_SESSION['old_name'] : '';
$oldEmail = isset($_SESSION['old_email']) ? $_SESSION['old_email'] : '';
$oldPhone = isset($_SESSION['old_phone']) ? $_SESSION['old_phone'] : '';
$oldPassword = isset($_SESSION['old_password']) ? $_SESSION['old_password'] : '';

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Save Data</title>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
  <div class="card bg-light">
    <article class="card-body mx-auto">
      <p>
        <a href="form_save.php" class="btn btn-block btn-twitter">
          <i class="fab fa-twitter"></i> Add New Student
        </a>
        <a href="index.php" class="btn btn-block btn-facebook">
          <i class="fab fa-facebook-f"></i> Show Data
        </a>
      </p>
      <p class="divider-text">
        <span class="bg-light">OR</span>
      </p>
      <form method="post" action="form_save.php" enctype="multipart/form-data">
        <div class="form-group input-group">
          <div class="input-group-prepend">
            <span class="input-group-text"> <i class="fa fa-user"></i> </span>
          </div>
          <input name="name" class="form-control" value="<?= $oldName ?>" placeholder="Full name" type="text">
        </div>
        <!-- form-group// -->
        <div class="form-group input-group">
          <div class="input-group-prepend">
            <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
          </div>
          <input name="email" class="form-control" value="<?= $oldEmail ?>" placeholder="Email address" type="email">
        </div>
        <!-- form-group// -->
        <div class="form-group input-group">
          <div class="input-group-prepend">
            <span class="input-group-text"> <i class="fa fa-phone"></i> </span>
          </div>
          <input name="phone" class="form-control" value="<?= $oldPhone ?>" placeholder="Phone number" type="text">
        </div>
        <!-- form-group// -->
        <div class="form-group input-group">
          <div class="input-group-prepend">
            <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
          </div>
          <input name="password" class="form-control" value="<?= $oldPassword ?>" placeholder="Create password" type="password">
        </div>
        <!-- form-group// -->
        <div class="form-group input-group">
          <div class="input-group-prepend">
            <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
          </div>
          <input name="repassword" class="form-control" value="<?= $oldPassword ?>" placeholder="Repeat password" type="password">
        </div>
        <!-- form-group// -->
        <div class="form-group input-group">
          <div class="input-group-prepend">
            <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
          </div>
          <input name="photo" class="form-control" placeholder="photo" type="file">
        </div>
        <!-- form-group// -->
        <div class="form-group">
          <button type="submit" name="add" class="btn btn-primary btn-block">Add</button>
        </div>
      </form>
    </article>
  </div>
  <script type="text/javascript" src="js/bootstrap.js"></script>
</body>

</html>