<?php
$con=mysqli_connect("localhost","root","","demo");


if(isset($_POST['id']))
{
    $id=$_POST['id'];
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];

     
    $sql= "update ajax set name='$name',email='$email',password='$password' where id=$id";


   
   mysqli_query($con,$sql);
   
   
   
   
   
    }



?>