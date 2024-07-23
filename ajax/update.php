<?php

$con = mysqli_connect("localhost", "root", "", "demo");


if (isset($_POST['id'])) {
    $id = $_POST['id'];

    $sql = "SELECT * FROM ajax WHERE id = $id";
    $result = mysqli_query($con, $sql);
    $record = mysqli_fetch_assoc($result);
    $data = array(
            'name' => $record['name'],
            'email' => $record['email'],
            'password' => $record['password']
        );
    
}


// Send JSON response back to AJAX request
echo json_encode($data);
?>
