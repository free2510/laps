echo '
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>form save data</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="css/style.css" />
</head>

<body>
    <div class="card bg-light">
        <article class="card-body mx-auto">
            <p>
                <a href="form_save.php" class="btn btn-block btn-twitter">
                    <i class="fab fa-twitter"></i> Add New Student</a>
                <a href="index.php" class="btn btn-block btn-facebook">
                    <i class="fab fa-facebook-f"></i> Show Data</a>
            </p>
            <p class="divider-text">
                <span class="bg-light">OR</span>
            </p>
            <form method="get" action="form_save.php">
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                    </div>
                    <input name="name" class="form-control" value="';
echo isset($_SESSION['old_name']) ? $_SESSION['old_name'] : '';
echo '" placeholder="Full name" type="text" />
                </div>
                <!-- form-group// -->
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                            <i class="fa fa-envelope"></i>
                        </span>
                    </div>
                    <input name="email" class="form-control" placeholder="Email address" value="';
echo isset($_SESSION['old_email']) ? $_SESSION['old_email'] : '';
echo '" type="email" />
                </div>
                <!-- form-group// -->
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                            <i class="fa fa-phone"></i>
                        </span>
                    </div>
                    <input name="phone" class="form-control" placeholder="Phone number" value="';
echo isset($_SESSION['old_phone']) ? $_SESSION['old_phone'] : '';
echo '" type="text" />
                </div>
                <!-- form-group// -->

                <!-- form-group end.// -->
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                    </div>
                    <input name="password" class="form-control" value="';
echo isset($_SESSION['old_password']) ? $_SESSION['old_password'] : '';
echo '" placeholder="Create password" type="password" />
                </div>
                <!-- form-group// -->
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                    </div>
                    <input name="repassword" class="form-control" placeholder="Repeat password" value="';
echo isset($_SESSION['old_password']) ? $_SESSION['old_password'] : '';
echo '" type="password" />
                </div>
                <!-- form-group// -->
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                    </div>
                    <input name="photo" class="form-control" placeholder="photo" type="file" />
                </div>
                <!-- form-group// -->
                <div class="form-group">
                    <button type="submit" name="add" class="btn btn-primary btn-block">
                        Add
                    </button>
                </div>
            </form>
        </article>
    </div>
    <script type="text/javascript" src="js/bootstrap.js"></script>
</body>

</html>
';