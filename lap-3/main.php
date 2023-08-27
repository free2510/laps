<?php
require 'config.php';
session_start();

if (isset($_POST['add'])) {
    save_data();
}




if (isset($_GET['delete'])) {
    delete_row();
}
if (isset($_GET['search'])) {
    search_row();
}
if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['go_update'])) {
    $id = $_GET['go_update'];
    $_SESSION['id_user'] = $id;
    header("Location:update.php");
}


function table_disable()
{
    global $db;
    $sql = 'SELECT * FROM users';
    $res = $db->query($sql);

    while ($row = $res->fetch(PDO::FETCH_ASSOC)) {
        echo '<tr>';

        foreach ($row as $column => $value) {
            if ($column === 'photo') {
                echo '<td class="text-center"><img width="100px" height="40px" src="' . $value . '" alt="Image"></td>';
            } else {
                echo '<td class="text-center">' . $value . '</td>';
            }
        }

        echo '<td>
                <form action="index.php" method="get">
                <button type="submit" name="delete" value="' . $row['id'] . '" class="btn btn-outline-danger">
                    Delete
                </button>
                <button type="submit" name="go_update" value="' . $row['id'] . '"class="btn btn-outline-primary">
                    Update
                </button>

                </form>
              </td>';
        echo '</tr>';
    }
}

function head_print()
{
    global $db;
    $sql = 'SHOW COLUMNS FROM users';
    $res = $db->query($sql);

    echo '<tr>';
    while ($row = $res->fetch(PDO::FETCH_ASSOC)) {
        echo '<th class="text-center" scope="col">' . $row['Field'] . '</th>';
    }

    echo '<th class="text-center" scope="col">Action</th>';
    echo '</tr>';
}

function save_data()
{
    $data = [
        $_POST['name'],
        $_POST['password'],
        $_POST['repassword'],
        $_POST['email'],
        $_POST['phone']
    ];
    global $db;
    $sql = "INSERT INTO `users`(`name`, `password`, `email`, `phone`) VALUES ('$data[0]', '$data[1]', '$data[3]', '$data[4]')";
    $save = $db->query($sql);


    $_SESSION['old_name'] = $data[0];
    $_SESSION['old_email'] = $data[3];
    $_SESSION['old_password'] = $data[1];
    $_SESSION['old_phone'] = $data[4];
    // حفظ الصورة
    $last_user_query = "SELECT MAX(id) AS last_id FROM `users`";
    $last_user_result = $db->query($last_user_query);
    $last_user_row = $last_user_result->fetch();
    $user_id = $last_user_row['last_id'];


    $file_name = $_FILES['photo']['name'];
    $file_temp = $_FILES['photo']['tmp_name'];
    $upload_path = 'img/' . $file_name;

    move_uploaded_file($file_temp, $upload_path);


    $sql = "UPDATE `users` SET `photo`='$upload_path' WHERE `id`='$user_id'";
    $db->query($sql);

}

// function save_img(){
//     // حفظ الصورة
//     global $db;
//     $last_user_query = "SELECT MAX(id) AS last_id FROM `users`";
//     $last_user_result = $db->query($last_user_query);
//     $last_user_row = $last_user_result->fetch();
//     $user_id = $last_user_row['last_id'];


//     $file_name = $_FILES['photo']['name'];
//     $file_temp = $_FILES['photo']['tmp_name'];
//     $upload_path = 'img/' . $file_name;

//     move_uploaded_file($file_temp, $upload_path);


//     $sql = "UPDATE `users` SET `photo_path`='$upload_path' WHERE `id`='$user_id'";
//     $db->query($sql);
// }

function delete_row()
{
    global $db;
    $id = $_GET['delete'];
    $sql = "DELETE FROM `users` WHERE id = '$id'";
    $deleted = $db->query($sql);
}


function update_data()
{
    global $db;
    $id = $_SESSION['id_user'];
    $name = $_GET['name'];
    $password = $_GET['password'];
    $email = $_GET['email'];
    $phone = $_GET['phone'];
    $img = $_GET['photo'];

    $sql = "UPDATE `users` SET `name`='$name',`password`='$password',`email`='$email',`phone`='$phone',`photo`='$img' WHERE id = '$id'";
    $data = $db->query($sql);
    $data = $data->fetchAll(PDO::FETCH_ASSOC);
}


function search_row()
{
    global $db;
    $search_value = $_GET['search'];
    $sql = "SELECT * FROM `users` WHERE `id` like '%$search_value%' OR `name` like '%$search_value%' OR `password` like '%$search_value%' OR `email` like '%$search_value%' OR `phone` like '%$search_value%'";
    $search = $db->query($sql);
    $search = $search->fetchAll(PDO::FETCH_ASSOC);

    echo "<table class='table table-bordered'>";
    head_print();

    foreach ($search as $row) {
        $id = $row['id'];
        $password = $row['password'];
        $email = $row['email'];
        $phone = $row['phone'];
        $name = $row['name'];
        $add_time = $row['add_time'];
        $img = $row['photo'];

        if (
            strpos($id, $search_value) !== false || strpos($password, $password) !== false || strpos($email, $email) !== false || strpos($phone, $phone) !== false
        ) {
            echo "<tr class='table-warning'>
            <td>$id</td><td>$name</td><td>$password</td><td>$email</td><td>$phone</td>
            <td class='text-center'><img width='100px' height='40px' src='img/" . $img . "' alt='Image'></td>
            <td>$add_time</td>
            ";


            echo '<td>
                <form action="index.php" method="get">
                <button type="submit" name="delete" value="' . $row['id'] . '" class="btn btn-outline-danger">
                    Delete
                </button>
                <button type="submit" name="go_update" value="' . $row['id'] . '"class="btn btn-outline-primary">
                    Update
                </button>

                </form>
              </td>';


            echo '</tr>';
        } else {
            echo "<tr>
            <td>$id</td><td>$name</td><td>$password</td><td>$email</td><td>$phone</td><td>$add_time</td>
            
            </tr>";
        }
    }
    echo "</table>";
}


function show_img()
{
    global $db;
    $id = $_SESSION['id_user'];
    $stm = "SELECT `photo` FROM `users` WHERE id = $id";
    $stm = $db->query($stm);
    while ($row = $stm->fetch(PDO::FETCH_ASSOC)) {

        $imagePath = $row['photo'];
        echo "<img src='/img/$imagePath' alt='User Image'>";
    }
}
