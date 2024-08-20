<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>bookstore.lk</title>
	<link rel="stylesheet" href="b5/css/bootstrap.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
  <link rel="stylesheet" href="style.css">

</head>
    <style>
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
  
  
   

    .carousel-item img {
      width: 100%; /* Ensures images are responsive */
      height: 400px; /* Set your desired height here */
      object-fit: cover; /* Ensures images cover the container without distortion */
    }

    @media (max-width: 768px) {
      .carousel-item img {
        height: 300px; /* Set a smaller height for mobile */
      }
    }

    @media (max-width: 480px) {
      .carousel-item img {
        height: 200px; /* Set an even smaller height for very small screens */
      }
    }
    .custom-card {
    border: none;
    overflow: hidden;
    border-radius: 10px;
}


.custom-image {
    height: 400px;
    object-fit: cover;
    border-bottom-left-radius: 10px;
    border-bottom-right-radius: 10px;
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
 
     <li class="nav-item"><a style="color: white;" class="nav-link" href="#section3"> BOOKS </a></li>
     <li class="nav-item"><a style="color: white;" class="nav-link" href="search.php"> SEARCH BOOKS </a></li>
     <li class="nav-item"><a style="color: white;" class="nav-link" href="#footer"> CONTACT  </a></li>
     <li class="nav-item"><a style="color: white;" class="nav-link" href="#section2"> NEW ARRIVALS </a></li>
     
    
 
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
   <li>
     <i class="fa-solid fa-cart-shopping" style="color: white; font-size: 30px;"></i> 
   </li>
  <br>
 
   </ul>
   </div> 
  </div> 
 </nav>
 
<!--carousal-->
<div id="demo" class="carousel slide" data-bs-ride="carousel" style="margin-top: 50px;">

  <!-- Indicators/dots -->
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
  </div>
  
  <!-- The slideshow/carousel -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/c1.jpg" alt="" class="d-block" style="width:100%">
      <div class="carousel-caption">
        <a href="member/index.php" style="text-decoration: none;"><button type="button" class="btn btn-warning"  style="letter-spacing:2px; text-decoration: none; padding:15px; border-radius: 25px; font-size:18px; color: black; box-shadow: 0 15px 25px rgba(255, 255, 255, 0.8);" href="form.html">BUY NOW</button></a>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/c2.jpg" alt="" class="d-block" style="width:100%">
      <div class="carousel-caption">
      <a href="member/index.php" style="text-decoration: none;"><button type="button" class="btn btn-warning"  style="letter-spacing:2px; text-decoration: none; padding:15px; border-radius: 25px; font-size:18px; color: black; box-shadow: 0 15px 25px rgba(255, 255, 255, 0.8);" href="form.html">BUY NOW</button></a>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/c3.jpg" alt="" class="d-block" style="width:100%">
      <div class="carousel-caption">
      <a href="member/index.php" style="text-decoration: none;"><button type="button" class="btn btn-warning"  style="letter-spacing:2px; text-decoration: none; padding:15px; border-radius: 25px; font-size:18px; color: black; box-shadow: 0 15px 25px rgba(255, 255, 255, 0.8);" href="form.html">BUY NOW</button></a>
      </div>
    </div>
  </div>
  
  <!-- Left and right controls/icons -->
  <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
  </button>
</div>

    </div>
  </div>
</div>


<br>
<br>
<br><!-- Cards -->
<div class="container" id="section2">
  <div class="row">

  <div class="col-md-6 mb-3">
      <div class="card custom-card shadow">
        <div class="card-body">
        <h3 class="card-title" style="color:darkblue; text-align:center;">Sumitha Publications</h3>
          <img src="images/2.jpg" class="img-fluid custom-image" alt="Sarasavi Publications">
        </div>
      </div>
    </div>


    <div class="col-md-6 mb-3">
      <div class="card custom-card shadow">
        <div class="card-body">
        <h3 class="card-title" style="color:darkblue; text-align:center;">Sarasavi Publications</h3>
          <img src="images/3.png" class="img-fluid custom-image" alt="Sarasavi Publications">
        </div>
      </div>
    </div>

  </div>
</div>


<br>
<br>


<!--section2-->
<div class="container-fluid"  id="section2">
  <div class="row">
<br>
<br>
    
          <h4 class="card-title" style="color: darkblue; text-align: center;">NEW ARRIVALS</h4>
          <hr style="color: darkblue;">
          <br>
          <br>
          <div class="col-md-2 " style="width: 250px; height: 300px;">
            <div class="card text-white bg-default shadow">
              <div class="card-body">
                <img src="images/img3.jpg" class="img-fluid" alt="">
              </div>
            </div>
          </div>

          <div class="col-md-2 " style="width: 250px; height: 300px;">
            <div class="card text-white bg-default shadow">
              <div class="card-body">
                <img src="images/img4.jpg" class="img-fluid" alt="">
              </div>
            </div>
          </div>

          <div class="col-md-2 " style="width: 250px; height: 300px;">
            <div class="card text-white bg-default shadow">
              <div class="card-body">
                <img src="images/img8.jpg" class="img-fluid" alt="">
              </div>
            </div>
          </div>

          <div class="col-md-2 " style="width: 250px; height: 300px;">
            <div class="card text-white bg-default shadow">
              <div class="card-body">
                <img src="images/img6.jpg" class="img-fluid" alt="">
              </div>
            </div>
          </div>


          <div class="col-md-2 " style="width: 250px; height: 300px;">
            <div class="card text-white bg-default shadow">
              <div class="card-body">
                <img src="images/img7.jpg" class="img-fluid" alt="">
              </div>
            </div>
          </div>

          <div class="col-md-2 " style="width: 250px; height: 300px;">
            <div class="card text-white bg-default shadow">
              <div class="card-body">
                <img src="images/img8.jpg" class="img-fluid" alt="">
              </div>
            </div>
          </div>
          

        </div>
      </div>
  

<br>
<br>




<!--section3-->
<div class="container-fluid" id="section3" >

<br>
  <div class="row" >
<br>
<br>
    
          <h4 class="card-title" style="color: darkblue; text-align: center ;">BOOK CATEGORIES</h4>
          <hr style="color: darkblue;">
          <br>
          <br>

          <div class="col-md-2 " style="width: 250px; height: 100px;" >
            <div class="card" style="background-color: darkblue; border-radius: 20px; box-shadow: 0 15px 25px rgba(56, 53, 53, 0.8);" ><a href="book.php" style=" text-decoration:none;">
              <div class="card-body">
                <h4 style="color: white; text-align: center;">Fiction</h4>
              </div>
              </a>
            </div>
          </div>

          <div class="col-md-2 " style="width: 250px; height: 100px;" >
            <div class="card" style="background-color: darkblue; border-radius: 20px; box-shadow: 0 15px 25px rgba(56, 53, 53, 0.8);" ><a href="book.php" style=" text-decoration:none;">
              <div class="card-body">
                <h4 style="color: white; text-align: center;">Non Fiction</h4>
              </div>
              </a>
            </div>
          </div>

          <div class="col-md-2 " style="width: 250px; height: 100px;" >
            <div class="card" style="background-color: darkblue; border-radius: 20px; box-shadow: 0 15px 25px rgba(56, 53, 53, 0.8);" ><a href="book.php" style=" text-decoration:none;">
              <div class="card-body">
                <h4 style="color: white; text-align: center;">Fantasy</h4>
              </div>
              </a>
            </div>
          </div>

          <div class="col-md-2 " style="width: 250px; height: 100px;" >
            <div class="card" style="background-color: darkblue; border-radius: 20px; box-shadow: 0 15px 25px rgba(56, 53, 53, 0.8);" ><a href="book.php" style=" text-decoration:none;">
              <div class="card-body">
                <h4 style="color: white; text-align: center;">Novels</h4>
              </div>
              </a>
            </div>
          </div>

          <div class="col-md-2 " style="width: 250px; height: 100px;" >
            <div class="card" style="background-color: darkblue; border-radius: 20px; box-shadow: 0 15px 25px rgba(56, 53, 53, 0.8);" ><a href="book.php" style=" text-decoration:none;">
              <div class="card-body">
                <h4 style="color: white; text-align: center;">Thriller</h4>
              </div>
              </a>
            </div>
          </div>

          <div class="col-md-2 " style="width: 250px; height: 100px;" >
            <div class="card" style="background-color: darkblue; border-radius: 20px; box-shadow: 0 15px 25px rgba(56, 53, 53, 0.8);" ><a href="book.php" style=" text-decoration:none;">
              <div class="card-body">
                <h4 style="color: white; text-align: center;">Mystery</h4>
              </div>
              </a>
            </div>
          </div>

        </div>
      </div>
<br>
<br>

<!-- Footer -->

<div class="footer" id="footer">
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
    Designed and Developed by Group 13</p> 
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
