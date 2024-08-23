<?php 
include('../connection/connection.php');

$email=$_GET['email'];


$res=mysqli_fetch_assoc($sql);
if(mysqli_query($connection,"delete from user where email='$email'"))
{
header('location:dashb.php?option=user_registration');	
}

?>