<?php  require_once('connection/connection.php');?>

<?php
$user='palitha';
$password='123456';
$hashed_password=sha1($password);


$query="INSERT INTO mylogin(name,password) VALUES ('{$user}','{$hashed_password}')";


$result=mysqli_query($connection,$query);


?>
