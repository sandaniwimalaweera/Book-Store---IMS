<?php require_once('connection/connection.php'); ?>
<?php 
$username='admin';
$password='itdlh1234';
$hashed_password=sha1($password);
 
//$query="INSERT INTO login(username,password,date)VALUES('{$user}','{$hashed_password}')";

$query="INSERT INTO admin (username,password) VALUES('$username','$hashed_password') ";


$result=mysqli_query($connection,$query);
?>
</body>
</html>
