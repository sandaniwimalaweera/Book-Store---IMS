<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>bookstore.lk</title>
	<link rel="stylesheet" href="b5/css/bootstrap.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
  <link rel="stylesheet" href="style.css">


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
   
    
   

<li class="nav-item dropdown">
       <a style="color: white;" class="nav-link  dropdown-toggle" href="#" data-bs-toggle="dropdown"> LOGIN  </a>
        <ul class="dropdown-menu">
        <li><a class="dropdown-item" href="member/index.php"> MEMBER LOGIN</a></li>
        <li><a class="dropdown-item" href="admin/index.php"> ADMIN LOGIN</a></li>
       </ul>
</li>
<br>
<li class="nav-item">
  <a href="member/index.php" style="text-decoration: none;"><button type="button" class="btn btn-primary" style="letter-spacing:2px; text-decoration: none; color: white;" href="form.html">BUY NOW</button></a>
</li>
<br>
    <li class="nav-item">
      <a href="register.php" style="text-decoration: none;"><button type="button" class="btn btn-light" style="letter-spacing:2px; text-decoration: none; color: black;" href="form.html">BE A MEMBER</button></a>
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


           

<!--section3-->
<div class="container-fluid" id="section3" >
    <br>
<br>
<br>
<br>
<br>
  <div class="row" >
<br>
<br>
    
          <h4 class="card-title" style="color: darkblue; text-align: center ;">BOOK CATEGORIES</h4>
          <hr style="color: darkblue;">
          <br>
          <br>

          <div class="col-md-2 " style="width: 250px; height: 100px;" >
            <div class="card" style="background-color: darkblue; border-radius: 20px; box-shadow: 0 15px 25px rgba(56, 53, 53, 0.8);" ><a href="#section1" style=" text-decoration:none;">
              <div class="card-body">
                <h4 style="color: white; text-align: center;">Fiction</h4>
              </div>
              </a>
            </div>
          </div>

          <div class="col-md-2 " style="width: 250px; height: 100px;" >
            <div class="card" style="background-color: darkblue; border-radius: 20px; box-shadow: 0 15px 25px rgba(56, 53, 53, 0.8);" ><a href="#section2" style=" text-decoration:none;">
              <div class="card-body">
                <h4 style="color: white; text-align: center;">Non Fiction</h4>
              </div>
              </a>
            </div>
          </div>

          <div class="col-md-2 " style="width: 250px; height: 100px;" >
            <div class="card" style="background-color: darkblue; border-radius: 20px; box-shadow: 0 15px 25px rgba(56, 53, 53, 0.8);" ><a href="#section3" style=" text-decoration:none;">
              <div class="card-body">
                <h4 style="color: white; text-align: center;">Fantasy</h4>
              </div>
              </a>
            </div>
          </div>

          <div class="col-md-2 " style="width: 250px; height: 100px;" >
            <div class="card" style="background-color: darkblue; border-radius: 20px; box-shadow: 0 15px 25px rgba(56, 53, 53, 0.8);" ><a href="#section6" style=" text-decoration:none;">
              <div class="card-body">
                <h4 style="color: white; text-align: center;">Novels</h4>
              </div>
              </a>
            </div>
          </div>

          <div class="col-md-2 " style="width: 250px; height: 100px;" >
            <div class="card" style="background-color: darkblue; border-radius: 20px; box-shadow: 0 15px 25px rgba(56, 53, 53, 0.8);" ><a href="#section6" style=" text-decoration:none;">
              <div class="card-body">
                <h4 style="color: white; text-align: center;">Thriller</h4>
              </div>
              </a>
            </div>
          </div>

          <div class="col-md-2 " style="width: 250px; height: 100px;" >
            <div class="card" style="background-color: darkblue; border-radius: 20px; box-shadow: 0 15px 25px rgba(56, 53, 53, 0.8);" ><a href="#section6" style=" text-decoration:none;">
              <div class="card-body">
                <h4 style="color: white; text-align: center;">Mystery</h4>
              </div>
              </a>
            </div>
          </div>

        </div>
      </div>
<br>

<!--fiction-->
<div class="container"  id="section1">
    <div class="row">
        <hr style="color: darkblue;">
        <h4 style="color: darkblue; text-align: center;">FICTION</h4>
        <hr style="color: darkblue;">

        <!--card1-->
        <div class="col-md-6 mb-3">
            <div class="card" style="box-shadow: 0 15px 25px rgba(109, 108, 108, 0.8); padding:5px; ">
              <div class="card-body">
               <h4 style="text-align: right; font-weight: bold;">වණ්ණ දාසි</h4> 
               <h5 style="text-align: right;">Rs. 1000.00</h5> 
               <br>
               <table>
                <tr>
                    <td>
                     <img src="images/img9.jpg" style="width: 150px; height: 175px;" alt="">
                    </td>
                    <td>
                        <p style="text-align: justify; padding: 2px; font-size:15px;">ඒ ඉතා කටුක ජීවිතයක් ගෙවා යන්තම් ඔළුව ඔසවා 
                        ගැනීමට හැකිවූ මට මගේ අතීතය ගැන සැගවීමට හෝ ඒ ගැන 
                        ලජ්ජා වීමට වුවමනා නැති බවය එහෙත් තුවාලයේ වේදනාව දන්නේ එය 
                        තිබෙන පුද්ගලයා ය. යන ප්‍රකට කියමන මෙහිදී සිහිපත් කිරීමට කැමැත්තෙමි.
                         ඇඟ විකුණු ගැහැනියකගේ දියණියක ව්‍යාපාරීක ලෝකයේ ඉහළට ම නැගීම ඔබට රස මවන පුවතක් වුවාට මට එය එසේ නොවේ. 
                        මේ තුවාලය මගේ ය. එය ඔබේ නොවේ. එහෙයින් එහි වේදනාව ගැන ඔබට විස්තර කිරීමේ පලක් ඇතැයි නොසිතමි.</p>
                    </td>
                </tr>
               </table>
               <br>
               <table>
                <tr>
                    <td>
                        
                    </td>
                    <td>
                             <center><button type="button" class="btn btn-primary" style="letter-spacing:2px; border-radius: 0px; text-decoration: none; color: white;" href="form.html"> <i class="fa-solid fa-cart-shopping"></i>   ADD TO CART</button></center>
                    </td>
                    <td>
                        <center><button type="button" class="btn btn-warning" style="letter-spacing:2px; border-radius: 0px; text-decoration: none; color: white;" href="form.html">BUY NOW</button></center>
                        
                    </td>
                </tr>
               </table>
               

              </div>
            </div>
          </div>

          <!--card2-->
          <div class="col-md-6 mb-3">
            <div class="card" style="box-shadow: 0 15px 25px rgba(109, 108, 108, 0.8); padding:5px; ">
              <div class="card-body">
               <h4 style="text-align: right; font-weight: bold;">The Rip</h4> 
               <h5 style="text-align: right;">Rs. 1450.00</h5> 
               <br>
               <table>
                <tr>
                    <td>
                     <img src="images/img10.jpg" style="width: 175px; height: 200px;" alt="">
                    </td>
                    <td>
                        <p style="text-align: justify; padding: 2px; font-size:15px;">A young woman living on the street has to keep her wits about her. Or her friends. But when the drugs kick in that can be hard. Anton has been looking out for her. She was safe with him. But then steve came along. He had something over anton. Must have. But he had a flat they could crash in. And gear in his pocket. And she can’t stop thinking about it. A good hit makes everything all right.

                            Notify me when item is back in stock.</p>
                    </td>
                </tr>
               </table>
          <br>
        </table>
        <br>
        <table>
         <tr>
             <td>
                
             </td>
             <td>
                <center><button type="button" class="btn btn-primary" style="letter-spacing:2px; border-radius: 0px; text-decoration: none; color: white;" href="form.html"> <i class="fa-solid fa-cart-shopping"></i>   ADD TO CART</button></center>
             </td>
             <td>
                 <center><button type="button" class="btn btn-warning" style="letter-spacing:2px; border-radius: 0px; text-decoration: none; color: white;" href="form.html">BUY NOW</button></center>
                 
             </td>
         </tr>
        </table>

              </div>
            </div>
          </div>


    </div>
</div>
<br>
<br>

<!-- non fiction-->
<div class="container"  id="section2">
    <div class="row">
        <hr style="color: darkblue;">
        <h4 style="color: darkblue; text-align: center;">Non Fiction</h4>
        <hr style="color: darkblue;">

        <!--card1-->
        <div class="col-md-6 mb-3">
            <div class="card" style="box-shadow: 0 15px 25px rgba(109, 108, 108, 0.8); padding:5px; ">
              <div class="card-body">
               <h4 style="text-align: right; font-weight: bold;">වණ්ණ දාසි</h4> 
               <h5 style="text-align: right;">Rs. 1000.00</h5> 
               <br>
               <table>
                <tr>
                    <td>
                     <img src="images/img9.jpg" style="width: 150px; height: 175px;" alt="">
                    </td>
                    <td>
                        <p style="text-align: justify; padding: 2px; font-size:15px;">ඒ ඉතා කටුක ජීවිතයක් ගෙවා යන්තම් ඔළුව ඔසවා 
                        ගැනීමට හැකිවූ මට මගේ අතීතය ගැන සැගවීමට හෝ ඒ ගැන 
                        ලජ්ජා වීමට වුවමනා නැති බවය එහෙත් තුවාලයේ වේදනාව දන්නේ එය 
                        තිබෙන පුද්ගලයා ය. යන ප්‍රකට කියමන මෙහිදී සිහිපත් කිරීමට කැමැත්තෙමි.
                         ඇඟ විකුණු ගැහැනියකගේ දියණියක ව්‍යාපාරීක ලෝකයේ ඉහළට ම නැගීම ඔබට රස මවන පුවතක් වුවාට මට එය එසේ නොවේ. 
                        මේ තුවාලය මගේ ය. එය ඔබේ නොවේ. එහෙයින් එහි වේදනාව ගැන ඔබට විස්තර කිරීමේ පලක් ඇතැයි නොසිතමි.</p>
                    </td>
                </tr>
               </table>
               <br>
               <table>
                <tr>
                    <td>
                       
                    </td>
                    <td>
                        <center><button type="button" class="btn btn-primary" style="letter-spacing:2px; border-radius: 0px; text-decoration: none; color: white;" href="form.html"> <i class="fa-solid fa-cart-shopping"></i>   ADD TO CART</button></center>
                    </td>
                    <td>
                        <center><button type="button" class="btn btn-warning" style="letter-spacing:2px; border-radius: 0px; text-decoration: none; color: white;" href="form.html">BUY NOW</button></center>
                        
                    </td>
                </tr>
               </table>
               

              </div>
            </div>
          </div>

          <!--card2-->
          <div class="col-md-6 mb-3">
            <div class="card" style="box-shadow: 0 15px 25px rgba(109, 108, 108, 0.8); padding:5px;">
              <div class="card-body">
               <h4 style="text-align: right; font-weight: bold;">The Rip</h4> 
               <h5 style="text-align: right;">Rs. 1450.00</h5> 
               <br>
               <table>
                <tr>
                    <td>
                     <img src="images/img10.jpg" style="width: 175px; height: 200px;" alt="">
                    </td>
                    <td>
                        <p style="text-align: justify; padding: 2px; font-size:15px;">A young woman living on the street has to keep her wits about her. Or her friends. But when the drugs kick in that can be hard. Anton has been looking out for her. She was safe with him. But then steve came along. He had something over anton. Must have. But he had a flat they could crash in. And gear in his pocket. And she can’t stop thinking about it. A good hit makes everything all right.

                            Notify me when item is back in stock.</p>
                    </td>
                </tr>
               </table>
          <br>
        </table>
        <br>
        <table>
         <tr>
             <td>
                
             </td>
             <td>
                <center><button type="button" class="btn btn-primary" style="letter-spacing:2px; border-radius: 0px; text-decoration: none; color: white;" href="form.html"> <i class="fa-solid fa-cart-shopping"></i>   ADD TO CART</button></center>
             </td>
             <td>
                 <center><button type="button" class="btn btn-warning" style="letter-spacing:2px; border-radius: 0px; text-decoration: none; color: white;" href="form.html">BUY NOW</button></center>
                 
             </td>
         </tr>
        </table>

              </div>
            </div>
          </div>


    </div>
</div>

<br>
<br>


<!-- non fiction-->
<div class="container"  id="section3">
    <div class="row">
        <hr style="color: darkblue;">
        <h4 style="color: darkblue; text-align: center;">Fantasy</h4>
        <hr style="color: darkblue;">

        <!--card1-->
        <div class="col-md-6 mb-3">
            <div class="card" style="box-shadow: 0 15px 25px rgba(109, 108, 108, 0.8); padding:5px;">
              <div class="card-body">
               <h4 style="text-align: right; font-weight: bold;">වණ්ණ දාසි</h4> 
               <h5 style="text-align: right;">Rs. 1000.00</h5> 
               <br>
               <table>
                <tr>
                    <td>
                     <img src="images/img9.jpg" style="width: 150px; height: 175px;" alt="">
                    </td>
                    <td>
                        <p style="text-align: justify; padding: 2px; font-size:15px;">ඒ ඉතා කටුක ජීවිතයක් ගෙවා යන්තම් ඔළුව ඔසවා 
                        ගැනීමට හැකිවූ මට මගේ අතීතය ගැන සැගවීමට හෝ ඒ ගැන 
                        ලජ්ජා වීමට වුවමනා නැති බවය එහෙත් තුවාලයේ වේදනාව දන්නේ එය 
                        තිබෙන පුද්ගලයා ය. යන ප්‍රකට කියමන මෙහිදී සිහිපත් කිරීමට කැමැත්තෙමි.
                         ඇඟ විකුණු ගැහැනියකගේ දියණියක ව්‍යාපාරීක ලෝකයේ ඉහළට ම නැගීම ඔබට රස මවන පුවතක් වුවාට මට එය එසේ නොවේ. 
                        මේ තුවාලය මගේ ය. එය ඔබේ නොවේ. එහෙයින් එහි වේදනාව ගැන ඔබට විස්තර කිරීමේ පලක් ඇතැයි නොසිතමි.</p>
                    </td>
                </tr>
               </table>
               <br>
               <table>
                <tr>
                    <td>
                        
                    </td>
                    <td>
                        <center><button type="button" class="btn btn-primary" style="letter-spacing:2px; border-radius: 0px; text-decoration: none; color: white;" href="form.html"> <i class="fa-solid fa-cart-shopping"></i>   ADD TO CART</button></center>
                    </td>
                    <td>
                        <center><button type="button" class="btn btn-warning" style="letter-spacing:2px; border-radius: 0px; text-decoration: none; color: white;" href="form.html">BUY NOW</button></center>
                        
                    </td>
                </tr>
               </table>
               

              </div>
            </div>
          </div>

          <!--card2-->
          <div class="col-md-6 mb-3">
            <div class="card" style="box-shadow: 0 15px 25px rgba(109, 108, 108, 0.8); padding:5px;">
              <div class="card-body">
               <h4 style="text-align: right; font-weight: bold;">The Rip</h4> 
               <h5 style="text-align: right;">Rs. 1450.00</h5> 
               <br>
               <table>
                <tr>
                    <td>
                     <img src="images/img10.jpg" style="width: 175px; height: 200px;" alt="">
                    </td>
                    <td>
                        <p style="text-align: justify; padding: 2px; font-size:15px;">A young woman living on the street has to keep her wits about her. Or her friends. But when the drugs kick in that can be hard. Anton has been looking out for her. She was safe with him. But then steve came along. He had something over anton. Must have. But he had a flat they could crash in. And gear in his pocket. And she can’t stop thinking about it. A good hit makes everything all right.

                            Notify me when item is back in stock.</p>
                    </td>
                </tr>
               </table>
          <br>
        </table>
        <br>
        <table>
         <tr>
             <td>
                
             </td>
             <td>
                <center><button type="button" class="btn btn-primary" style="letter-spacing:2px; border-radius: 0px; text-decoration: none; color: white;" href="form.html"> <i class="fa-solid fa-cart-shopping"></i>   ADD TO CART</button></center>
             </td>
             <td>
                 <center><button type="button" class="btn btn-warning" style="letter-spacing:2px; border-radius: 0px; text-decoration: none; color: white;" href="form.html">BUY NOW</button></center>
                 
             </td>
         </tr>
        </table>

              </div>
            </div>
          </div>


    </div>
</div>



<br>





<!-- Footer -->
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
    <p>2024 Bookstore.lk <br>
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
