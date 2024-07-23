<?php
$con=new mysqli("localhost","root","","ajaxlogin");
$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];
$contact=$_POST['contact'];



$errors =array();

if(empty($_POST['name'])){
    $errors['name']='required name';
}else
{
   $_name=$_POST['name'];
}
if(empty($_POST['email'])) {
    $errors['email'] = 'Email is required';
} elseif (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    $errors['email'] = 'Invalid email format';
}
if (empty($_POST['password'])) {
    $errors['password'] = 'Password is required';
} 

if(empty($_POST['contact']))
{
    $errors['contact']='contact is require';
} elseif (strlen($_POST['contact'])<10)
{
    $errors['contact']='contact must be 10 digit';
}

if (empty($errors)) {
    $sql= "INSERT INTO `admin`(`name`,`email`,`password`,`contact`)VALUES('$name','$email','$password','$contact')";
    $res =mysqli_query($con,$sql);
    echo json_encode("success");
} else {
    // Return errors in JSON format
    echo json_encode($errors);
}

?>