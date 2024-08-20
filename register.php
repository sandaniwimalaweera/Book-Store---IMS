<?php 
include("connection/connection.php");
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $sex = $_POST['sex'];
    $address = $_POST['address'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Verifying the unique email
    $verify_query = mysqli_query($connection, "SELECT email FROM user WHERE email='$email'");

    if(mysqli_num_rows($verify_query) != 0) {
        echo '<br><br><br><br>';
        echo "<div class='container'>";
        echo "<div class='message'>
                <h5>This email is used, Try another One Please!</h5>
              </div> <br>";
        echo "<a href='javascript:self.history.back()'><button class='btn btn-warning'>Go Back</button>";
        echo "</div>";
    } else {
        // Encrypt the password before storing it
        $hashed_password = sha1($password);

        mysqli_query($connection, "INSERT INTO user(name,sex,address,mobile,email,username,password,date) VALUES('$name','$sex','$address','$mobile','$email','$username','$hashed_password',now())");

        echo '<br><br><br><br>';
        echo "<div class='container'>";
        echo "<div class='message'>
                <h5>Registration successfully!</h5>
              </div> <br>";
        echo "<a href='member/index.php'><button class='btn btn-warning'>Login Now</button>";
        echo "</div>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bookstore.lk | Member Registration</title>
	<link rel="stylesheet" href="b5/css/bootstrap.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
  <link rel="stylesheet" href="style.css">

    <style>

.error {
            color: darkblue;
        }

.card {            
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            transition: box-shadow 0.3s ease-in-out; /* Smooth transition for shadow */
}
  .card:hover {
    transform: scale(1.05); /* Optional hover effect */

}
  

    </style>
    
  
</head>
<body>



<!--navbar-->
<nav id="navbar_top" class="navbar fixed-top navbar-expand-lg navbar-dark ">
  <div class="container-fluid">
 
 <a class="navbar-brand" href="#" style="color: white;" >bookstore.lk </a>
 
 <button  class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main_nav">
       <span   class="navbar-toggler-icon"></span>
 </button>
 <div class="collapse navbar-collapse" id="main_nav" >
     <ul class="navbar-nav ms-auto" >
     <li class="nav-item"><a style="color: white;" class="nav-link" href="index.php"> HOME </a></li>
 
     <li class="nav-item"><a style="color: white;" class="nav-link" href="book.php"> BOOKS </a></li>
     <li class="nav-item"><a style="color: white;" class="nav-link" href="search.php"> SEARCH BOOKS </a></li>
     <li class="nav-item"><a style="color: white;" class="nav-link" href="#footer"> CONTACT  </a></li>
     
     
    
 
 <li class="nav-item dropdown">
        <a style="color: white;" class="nav-link  dropdown-toggle" href="#" data-bs-toggle="dropdown"> LOGIN  </a>
         <ul class="dropdown-menu">
         <li><a class="dropdown-item" href="member/index.php"> MEMBER LOGIN</a></li>
         <li><a class="dropdown-item" href="admin/index.php"> ADMIN LOGIN</a></li>
        </ul>
 </li>
 <br>
 <li class="nav-item">
   <a href="member/index.php" style="text-decoration: none;"><button type="button" class="btn btn-primary" style="letter-spacing:2px; text-decoration: none; color: white;" href="member.php">BUY NOW</button></a>
 </li>
 <br>
     <li class="nav-item">
       <a href="register.php" style="text-decoration: none;"><button type="button" class="btn btn-light" style="letter-spacing:2px; text-decoration: none; color: black;" href="register.php">BE A MEMBER</button></a>
   </li>
   
  <br>
 
   </ul>
   </div> 
  </div> 
 </nav>


<br>
<br>
<br>
<br>
<br>
<br>





<!--registration form-->
<div style="display: flex; justify-content: center; align-items: center; height: 90vh;">
<form style=" background-color:white; margin: 10px; padding: 20px; width: 700px; box-shadow: 0 15px 25px rgba(79, 77, 77, 0.8);" method="POST">
<legend style="font-family: Arial, sans-serif; color: darkblue; text-align: center; letter-spacing: 2px;">
            <b>MEMBER REGISTRATION</b>
        </legend>
        <br>
        <label style="font-family: Arial, sans-serif; color: black;">Name:</label>
        <br>
        <input type="text" class="form-control" name="name" style="width: 100%; box-sizing: border-box;" required>
        <br>
        <label style="font-family: Arial, sans-serif; color: black;">Sex:</label>
        <br>
        <select class="form-select"  name="sex"  required>
             <option value="Select">Select Gender</option>
               <option value="Male">Male</option>
              <option value="Female">Female</option>
                </select>
        <br>
        <label style="font-family: Arial, sans-serif; color: black;" for="">Home Address:</label>
        <br>
        <input type="text" class="form-control" name="address" style="width: 100%; box-sizing: border-box;" required>
        <br>
        <label style="font-family: Arial, sans-serif; color: black;" for="">Contact Number:</label>
        <br>
        <input type="text" class="form-control" name="mobile" style="width: 100%; box-sizing: border-box;" required>
        <br>
        <label style="font-family: Arial, sans-serif; color: black;">Email:</label>
        <br>
        <input type="email" class="form-control" name="email" style="width: 100%; box-sizing: border-box;" required>
        <br>
        <label style="font-family: Arial, sans-serif; color: black;" for="">Username:</label>
        <br>
        <input type="text" class="form-control" name="username" style="width: 100%; box-sizing: border-box;" required>
        <br>
        <label style="font-family: Arial, sans-serif; color: black;" for="">Password:</label>
        <br>
        <input type="password" class="form-control" name="password" style="width: 100%; box-sizing: border-box;" required>
        <br>
        <center>
            <button name="submit" class="btn btn-warning" style="letter-spacing:2px; text-decoration: none; color: white;">SUBMIT</button>
        </center>


</form>
  </div>



<br>
<br>







<!--footer-->
<footer class="footer text-center text-lg-start text-dark" style="background-color: lightgray; text-align: center;" id="footer">
<div class="text-center p-3"  style="background: linear-gradient(#ecebeb, #dbdbdb);">


</div>
<br>
<p style=" letter-spacing:2px;  text-align: center;">CONTACT US</p>
<center><button   class="btn btn-light"  data-bs-toggle="modal" data-bs-target="#message" style="color: darkblue;" >Your Message</button></center>
      <p style="text-align: center;">bookstore.lk <br>
          Kelaniya <br>
          Contact No:+9471234550 <br>
          Email:bookstore.lk@gmail.com</p>
      


<ul class="socialIcons">
              <p style=" text-align: center; margin-top:3px;">Follow us</p>
              <li class="facebook"><a href=""><i class="fa-brands fa-facebook" style="font-size:20px;"></i>bookstorelk</a></li>
              <li class="instagram"><a href=""><i class="fa-brands fa-square-instagram" style="font-size:20px;"></i>  bookstoregram</a></li>
              <li class="twitter"><a href=""><i class="fa-brands fa-square-twitter" style="font-size:20px;"></i>  bookstorelk</a></li>
              </ul>
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    <p>© 2023 Bookstore.lk <br>
    Designed and Developed by Group 13</p> 
  </div>
</footer>






      

     
<script src="b5/js/bootstrap.bundle.min.js"></script>
</body>






<!--message-->
<div class="modal fade" id="message" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
       
      
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        

         <form action="sendmessage.php"  method="POST">
      </div>
      <div class="modal-body">
 <h5 style="letter-spacing: 5px;text-align: center"> Bookstore.lk</h5> 
      
<br>
         <div class="form-group ">
            <label style="color: black;">Name :</label>
            <input type="text" name="name"  class="form-control" required="" placeholder="Name">
         </div>

 <br>       
         <div class="form-group">
            <label style="color: black;">Email :</label>
            <input type="text"  name="email"   class="form-control" required="" placeholder="E-Mail">
         </div>

<br>
         <div class="form-group">
            <label style="color: black;">Message :</label>
            <textarea name="message" class="form-control" rows="3" required=""placeholder="Your Message"></textarea>
         </div>
      </div>

      <div class="modal-footer">
        
        <button  name="save" class="btn btn-warning">SEND</button>

         </form> 
      </div>
    </div>
  </div>
  </div>
