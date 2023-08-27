<?php
// if (isset($_POST['submit'])) {
//     $errors = [];

//     $first_name = $_POST["first_name"];
//     $last_name = $_POST["last_name"];
//     $password = $_POST["password"];
//     $username = $_POST["username"];
//     $email = $_POST["email"];
//     $department = $_POST["department"];
//     $address = $_POST["address"];
//     $country = $_POST["country"];

//     $first_name = htmlspecialchars($first_name);
//     $last_name = htmlspecialchars($last_name);
//     $password = htmlspecialchars($password);
//     $username = htmlspecialchars($username);
//     $email = htmlspecialchars($email);
//     $department = htmlspecialchars($department);
//     $address = htmlspecialchars($address);
//     $country = htmlspecialchars($country);

//     if (empty($first_name)) {
//         $errors[] = "First name is required";
//     }

//     if (empty($last_name)) {
//         $errors[] = "Last name is required";
//     }

//     if (empty($password)) {
//         $errors[] = "Password is required";
//     }

//     if (empty($username)) {
//         $errors[] = "Username is required";
//     }

//     if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
//         $errors[] = "Invalid email format";
//     }

//     if (empty($department)) {
//         $errors[] = "Department is required";
//     }

//     if (empty($address)) {
//         $errors[] = "Address is required";
//     }

//     if (empty($country)) {
//         $errors[] = "Country is required";
//     }

//     if (!empty($errors)) {
//         foreach ($errors as $error) {
//             echo "<p>Error: $error</p>";
//         }
//     } else {
//         echo "Form data is valid and can be processed.";
//     }
// }



if (isset($_POST['submit'])) {
    $errors = [];

    $first_name = sanitizeInput($_POST["first_name"]);
    $last_name = sanitizeInput($_POST["last_name"]);
    $password = sanitizeInput($_POST["password"]);
    $username = sanitizeInput($_POST["username"]);
    $email = sanitizeInput($_POST["email"]);
    $department = sanitizeInput($_POST["department"]);
    $address = sanitizeInput($_POST["address"]);
    $country = sanitizeInput($_POST["country"]);

    if (empty($first_name) || empty($last_name) || empty($password) || empty($username) || empty($email) || empty($department) || empty($address) || empty($country)) {
        $errors[] = "All fields are required";
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email format";
    }

    if (!empty($errors)) {
        foreach ($errors as $error) {
            echo "<p>Error: $error</p>";
        }
    } else {
        echo "Form data is valid and can be processed.";
    }
}

// تنظيف وتصفية البيانات
function sanitizeInput($input) {
    $input = trim($input);
    $input = stripslashes($input);
    $input = htmlspecialchars($input);
    return $input;
}
?>

