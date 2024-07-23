<?php

$con = mysqli_connect("localhost", "root", "", "ajaxlogin");


if (isset($_POST['id'])) {
    $id = $_POST['id'];

    $sql = "SELECT * FROM employe WHERE id = $id";
    $result = mysqli_query($con, $sql);
    $record = mysqli_fetch_assoc($result);
    $data = array(
            'name' => $record['name'],
            'email' => $record['email'],
            'password' => $record['password'],
            'contact' => $record['contact'],
            'address' => $record['address']

        );
    
}


// Send JSON response back to AJAX request
echo json_encode($data);
?>
