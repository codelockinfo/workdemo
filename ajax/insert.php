<?php
$con=new mysqli("localhost","root","","demo");
$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];

$sql= "INSERT INTO `ajax`(`name`,`email`,`password`)VALUES('$name','$email','$password')";


if($con->query($sql)=== TRUE)
{
    echo "insert data ";

}else
{
    echo"faild";
}
?>