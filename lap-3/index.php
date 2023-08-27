<?php
require 'main.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
    <form action="index.php" method="get">
        <div class="input-group mt-5 mb-3 mx-auto " style="width: 40em;">
            <div class="input-group-prepend">
                <a href="form_save.php"><button type="button" class="btn btn-outline-success">Add New</button></a>
                <button class="btn btn-outline-info " type="submit">Search</button>
            </div>
            <input type="text" class="form-control" name="search" placeholder="" aria-label="" aria-describedby="basic-addon1">
        </div>
    </form>
    <table class="table table-bordered table-centered">
        <thead class="thead-dark">
            <?php head_print() ?>
        </thead>
        <tbody>

            <?php echo table_disable(); ?>

        </tbody>
    </table>

    <script type="text/javascript" src="js/bootstrap.js"></script>
</body>

</html>