<?php

$con = new mysqli("localhost", "root", "", "demo");

$sql = "SELECT * FROM ajax";
$res = mysqli_query($con, $sql);



while ($data = mysqli_fetch_assoc($res)) {
    echo '<tr>';
    echo '<td>' . $data['id'] . '</td>';
    echo '<td>' . $data['name'] . '</td>';
    echo '<td>' . $data['email'] . '</td>';
    echo '<td>' . $data['password'] . '</td>';
    echo '<td><button class="delt" data-id="' . $data['id'] . '">Delete</button></td>';
    echo '<td><a href="updateform.php?id='.$data['id'].'">update</a></td>';

}




?>
