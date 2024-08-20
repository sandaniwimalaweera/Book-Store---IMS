<?php 
include('../connection/connection.php');

$id=$_GET['id'];


$res=mysqli_fetch_assoc($sql);
if(mysqli_query($connection,"delete from message where id='$id'"))
{
header('location:dashb.php?option=feedback');	
}

?>