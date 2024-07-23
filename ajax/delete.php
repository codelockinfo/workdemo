<?php
$con= mysqli_connect("localhost","root","","demo");
if(isset($_POST['id']))
{
    $id=$_POST['id'];
    $sql="delete from ajax where id=$id";
    if (mysqli_query($con, $sql)) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . mysqli_error($con);
    }
}

?>






