<?php require_once('connection/connection.php'); ?>
   

<?php if(isset($_POST['save'])){
$name=$_POST['name'];
$email=$_POST['email'];
$message=$_POST['message'];

$sql="INSERT INTO message(name, email,message,date ) VALUES ('$name','$email','$message',now())";


if(!mysqli_query($connection, $sql)){
  die('Error inserting');
}
  else{
   echo '<script>alert("Thanks..!! Your message sent successfully")</script>';
  echo "<script type='text/javascript'> document.location = 'index.php'; </script>";
  }

}


 ?>