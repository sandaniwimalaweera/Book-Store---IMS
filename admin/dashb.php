<?php 
session_start();
extract($_REQUEST);
include('../connection/connection.php');
$admin=$_SESSION['admin_logged_in'];  
if($admin=="")
{
  header('location:index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
     <title>Book store</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../b5/css/bootstrap.css">
  
  
  
  
  <style>
  
    body{
      background-color: #ecebeb;
    }

  </style>
  </head>
  <body>

<div class="container-fluid" style="margin-top: 25px;">
  <div class="row">
    <div class="col-md-2">
<div class="list-group">
  <a href="dashb.php?option=home" class="list-group-item list-group-item-action active" aria-current="true">
    Home
  </a>
  <a href="dashb.php?option=addbook" class="list-group-item list-group-item-action">Add Book</a>
  <a href="dashb.php?option=user_registration" class="list-group-item list-group-item-action">Member Details</a>
  <a href="dashb.php?option=book_detail" class="list-group-item list-group-item-action">Book Details</a>
  <a href="dashb.php?option=feedback" class="list-group-item list-group-item-action">Messages</a>
  <a href="dashb.php?option=update_password" class="list-group-item list-group-item-action">Update Password</a>

  





  
</div>



     
    </div>
    <div class="col-md-10">
      <?php 
@$opt=$_GET['option'];
if($opt=="")
{
include('home.php'); 
}
else
{
  if($opt=="feedback")
  {
  include('feedback.php');  
  }
  else if($opt=="update_register")
  {
  include('update_register.php');  
  }
  else if($opt=="addbook")
  {
  include('addbook.php'); 
  }
  else if($opt=="book_detail")
  {
  include('book_detail.php'); 
  }
  else if($opt=="update_book")
  {
  include('update_book.php'); 
  }

 
  else if($opt=="user_registration")
  {
    include('user_registration.php');
 }
 else if($opt=="update_password")
  {
    include('update_password.php');
 }


  else if($opt=="home")
  {
    include('home.php');
  }
}
?>
    </div>
  </div>
</div>


    
          
        </div>
      </div>
    </div>


<br>

    <div class="container-fluid">
      <!-- Footer -->
<div class="footer">
<div class="text-center p-3"  style="background: linear-gradient(#ecebeb, #dbdbdb);">


</div>
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    <p>2024 Bookstore.lk <br>
   Designed and Developed by Group 13</p> 
  </div>

    </div>

   
  </body>
</html>
