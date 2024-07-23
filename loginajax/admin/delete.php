<?php
$con= mysqli_connect("localhost","root","","ajaxlogin");

if(isset($_POST['id']))
{
    $id=$_POST['id'];

    $sql="DELETE FROM `employe` WHERE id=$id";
    if(mysqli_query($con,$sql))
    {
        echo"succes";
    }else{
        echo"fail";
    }
}
?>