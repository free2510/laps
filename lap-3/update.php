<?php
require "config.php";
require "main.php";


if (isset($_GET['update'])) {
  update_data();
}


echo '
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>form save updated</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="css/style.css" />
  </head>
  <body>
    <div class="card bg-light">
      <article class="card-body mx-auto">
      <h4 class="card-title mt-3 text-center">updated data</h4>
        <p>
          <a href="form_save.php" class="btn btn-block btn-twitter">
            <i class="fab fa-twitter"></i>   Add New Student</a
          >
          <a href="index.php" class="btn btn-block btn-facebook">
            <i class="fab fa-facebook-f"></i>   Show Data</a
          >
        </p>
        <p class="divider-text">
          <span class="bg-light">OR</span>
        </p>
        <form method="get" action="update.php">
          <div class="form-group input-group">
            <div class="input-group-prepend">
              <span class="input-group-text"> <i class="fa fa-user"></i> </span>
            </div>
            <input
              name="name"
              class="form-control"
              placeholder="new name"
              type="text"
            />
          </div>
          <!-- form-group// -->
          <div class="form-group input-group">
            <div class="input-group-prepend">
              <span class="input-group-text">
                <i class="fa fa-envelope"></i>
              </span>
            </div>
            <input
              name="email"
              class="form-control"
              placeholder="New Email address"
              type="email"
            />
          </div>
          <!-- form-group// -->
          <div class="form-group input-group">
            <div class="input-group-prepend">
              <span class="input-group-text">
                <i class="fa fa-phone"></i>
              </span>
            </div>
            <input
              name="phone"
              class="form-control"
              placeholder="New Phone number"
              type="text"
            />
          </div>
          <!-- form-group// -->

          <!-- form-group end.// -->
          <div class="form-group input-group">
            <div class="input-group-prepend">
              <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
            </div>
            <input
              name="password"
              class="form-control"
              placeholder="New password"
              type="password"
            />
          </div>
          <!-- form-group// -->
          <div class="form-group input-group">
            <div class="input-group-prepend">
              <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
            </div>
            <input
              name="repassword"
              class="form-control"
              placeholder="Repeat password"
              type="password"
            />
          </div>
          <!-- form-group// -->
          <div class="form-group input-group">
            <div class="input-group-prepend">
              <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
            </div>
            <input
              name="photo"
              class="form-control"
              placeholder="photo"
              type="file"
            />
          </div>
          <!-- form-group// -->
          <div class="form-group">
            <button type="submit" name="update" class="btn btn-primary btn-block">
              update
            </button>
          </div>
        </form>
      </article>
    </div>
    <script type="text/javascript" src="js/bootstrap.js"></script>
  </body>
</html>
';
