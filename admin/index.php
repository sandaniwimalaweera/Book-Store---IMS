<?php 
session_start();

require('../connection/connection.php');

 
if(isset($_POST['submit'])){
$errors = array();

    // check if the username and password has been entered
    if (!isset($_POST['name']) || strlen(trim($_POST['name'])) < 1 ) {
      $errors[] = 'Name  is Missing / Invalid';
    }

    if (!isset($_POST['password']) || strlen(trim($_POST['password'])) < 1 ) {
      $errors[] = 'Password is Missing / Invalid';
    }

    // check if there are any errors in the form
    if (empty($errors)) {
      // save username and password into variables
      $name = mysqli_real_escape_string($connection, $_POST['name']);
      $password = mysqli_real_escape_string($connection, $_POST['password']);
      $hashed_password = sha1($password);
      
  $query = "SELECT * FROM mylogin
            WHERE name = '{$name}' 
            AND password = '{$hashed_password}' 
            LIMIT 1";

      $result_set = mysqli_query($connection, $query);
  
  
  
  if(mysqli_num_rows($result_set)==1){
    $_SESSION['admin_logged_in']=$name;  
    header('Location:dashb.php');
  //echo "<script type='text/javascript'> document.location = 'adminpanel.php'; </script>";

  }
  else {
        // user name and password invalid
        $errors[] = '<span class="error">Invalid Username / Password</span>';
      }
  
}
}
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>bookstore.lk | Admin Login</title>
	<link rel="stylesheet" href="../b5/css/bootstrap.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
  <link rel="stylesheet" href="../style.css">

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
 
        .input-group {
    position: relative;
    margin-bottom: 20px;
   
}



.input-group .input-icon {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    right: 20px;
    color:darkblue;
}



    </style>
</head>
<body>


<!--navbar-->
<nav id="navbar_top" class="navbar fixed-top navbar-expand-lg navbar-dark">
  <div class="container-fluid">
 
 <a class="navbar-brand" href="#" style="color: white;" >bookstore.lk </a>
 
 <button  class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main_nav">
       <span   class="navbar-toggler-icon"></span>
 </button>
 <div class="collapse navbar-collapse" id="main_nav" >
     <ul class="navbar-nav ms-auto" >
     <li class="nav-item"><a style="color: white;" class="nav-link" href="../index.php"> HOME </a></li>
     <li class="nav-item"><a style="color: white;" class="nav-link" href="../book.php"> BOOKS </a></li>
     <li class="nav-item"><a style="color: white;" class="nav-link" href="../search.php">SEARCH BOOKS</a></li>
     <li class="nav-item"><a style="color: white;" class="nav-link" href="#footer"> CONTACT  </a></li>
         
 
 <li class="nav-item dropdown">
        <a style="color: white;" class="nav-link  dropdown-toggle" href="#" data-bs-toggle="dropdown"> LOGIN  </a>
         <ul class="dropdown-menu">
         <li><a class="dropdown-item" href="../member/index.php"> MEMBER LOGIN</a></li>
         <li><a class="dropdown-item" href="admin/index.php"> ADMIN LOGIN</a></li>
        </ul>
 </li>
 <br>
 <li class="nav-item">
   <a href="../member/index.php" style="text-decoration: none;"><button type="button" class="btn btn-primary" style="letter-spacing:2px; text-decoration: none; color: white;" href="member.php">BUY NOW</button></a>
 </li>
 <br>
     <li class="nav-item">
       <a href="../register.php" style="text-decoration: none;"><button type="button" class="btn btn-light" style="letter-spacing:2px; text-decoration: none; color: black;" href="register.php">BE A MEMBER</button></a>
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



<!--login form-->
<div class="container">

<section class=" flex-column align-items-center justify-content-center py-4">
<div class="container">
  <div class="row justify-content-center">
    <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

      

      <div class="card mb-3" style="background-color:white;  color: white;  box-shadow: 0 15px 25px rgba(79, 77, 77, 0.8);">

        <div class="card-body">

          <div class="pt-4 pb-2">
         <br>
<center><img src="../images/admin.png" style="width: 85px;height: 75px;"></center>
            <h6 class="card-title text-center pb-0 fs-4" style="color:darkblue;">Admin Login</h6>
           <hr>
          </div>

          <form   action="" method="POST"   class="row g-3 needs-validation" novalidate >

            <div class="col-12">

               <?php 
  if (isset($errors) && !empty($errors)) {
    echo '<p class="error">Invalid Username / Password</p>';
  }
?>

              <label for="yourUsername" class="form-label" style="color:darkblue;">Username:</label>
              <div class="input-group has-validation">
                <input type="text" class="form-control" id="" name="name" >
                <span class="input-icon"><i class="fas fa-user"></i></span>
                <div class="invalid-feedback">Please enter your username.</div>
              </div>
            </div>

            <div class="col-12">
              <label for="yourPassword" class="form-label" style="color:darkblue;">Password:</label>
              
            <div class="input-group has-validation">
              <input type="password" name="password" class="form-control"  required>
              <span class="input-icon"><i class="fas fa-lock"></i></span>
              <div class="invalid-feedback">Please enter your password!</div>
              </div>
            </div>

            
            <div class="col-12">

                    <br>
              <center><button class="btn btn-info " type="submit" name="submit" onmouseover="this.style.backgroundColor='#1a237e'; this.style.color='#ffffff';" onmouseout="this.style.backgroundColor='#2f78d6'; this.style.color='white';" style="display: inline-block;padding:10px 30px;  border-radius: 25px; border: none; outline: none; background: #2f78d6; color: #1a237e; font-weight: 600; cursor: pointer; transition: background-color 0.3s ease-in-out, color 0.3s ease-in-out;">
              Login</button></center>
            </div>
            <div class="col-12">
             
            </div>
            <br>
            <br>

          </form>

        </div>
      </div>

     
    </div>
  </div>
</div>

</section>

</div>

<br>
<br>
<!-- Footer -->
<div class="footer">
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
    <p> 2024 Bookstore.lk <br>
   Designed and Developed by Team 1</p> 
  </div>

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
