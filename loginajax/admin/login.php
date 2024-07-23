<?php

session_start();
$con = new mysqli("localhost", "root", "", "ajaxlogin");

$errors = array();

if (empty($_POST['email'])) {
    $errors['email'] = 'Email is required';
}else
if (empty($_POST['password'])) {
    $errors['password'] = 'Password is required';
}

if (empty($errors)) {
    $email =$_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM `admin` WHERE `email`='$email' AND `password`='$password'";
    $res = mysqli_query($con, $sql);
    $cnt = mysqli_num_rows($res);

    if ($cnt == 1) {
        $data = mysqli_fetch_assoc($res);
        $_SESSION['userid'] = $data['id'];
        echo json_encode("success"); // Echoing JSON-encoded success message
    } else {
        echo json_encode("Invalid email or password"); // Echoing JSON-encoded error message
    }
} else {
    echo json_encode($errors); // Echoing JSON-encoded array of errors
}




?>
