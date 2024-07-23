<?php
$con= mysqli_connect("localhost","root","","ajaxlogin");

$sql="select * from employe";
$res= mysqli_query($con,$sql);


while($data=mysqli_fetch_assoc($res))
{
    echo '<tr>';
    echo '<td>' .$data['id']. '</td>';
    echo  '<td>'.$data['name'].'</td>';
    echo  '<td>'.$data['email'].'</td>';
    echo  '<td>'.$data['password'].'</td>';
    echo  '<td>'.$data['contact'].'</td>';
    echo '<td>'. $data['address'].'</td>';
    echo '<td><button class="delt" data-id="'.$data['id'].'">delete</button></td>';
    echo '<td><a href="updateform.php?id='.$data['id'].'">update</a></td>';



}

?>