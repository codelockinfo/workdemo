<?php
$con= mysqli_connect("localhost","root","","ajaxlogin");

if(isset($_POST['id']))
{
    $id=$_POST['id'];
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $contact=$_POST['contact'];
    $address=$_POST['address'];

     $sql="update employe set name='$name', email='$email', password='$password', contact='$contact',address='$address' where  id=$id";
   
    $qry= mysqli_query($con,$sql);

}


?>