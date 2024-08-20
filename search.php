<?php require_once('connection/connection.php'); ?>
<?php






if(isset($_POST['submit']))
{
    $valueToSearch = $_POST['no'];
    // search in all table columns
    // using concat mysql function
    $query = "SELECT * FROM book WHERE CONCAT(id,title,author,category,languages) LIKE '%".$valueToSearch."%'";
    $search_result = filterTable($query); 
    
}
 else {
    $query = "SELECT * FROM book";
    $search_result = filterTable($query);
}


// function to connect and execute the query
function filterTable($query)
{
   
    
$host='localhost';
$user='root';
$password='';
$db='bookstore';

$conn=mysqli_connect($host,$user,$password,$db);
    
    $filter_Result = mysqli_query($conn, $query);
    return $filter_Result;
}

?>



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

<br>
<br>






  <!--book search-->
  <div class="container-fluid" style="margin-top: 100px;">
      <div class="row">
        
          <div class="card">
            <div class="card-body">
              <form method="post"  action="search.php">
   
    <?php echo mysqli_num_rows($search_result)." books searched." ; ?>
    

    
    <input type="text" name="no"  placeholder="Enter book name, author, category or language to search "  class="form-control" >
  </p>
  

  <p>
  
    <button style="width:100px; letter-spacing:2px;"  type="submit" name="submit" class="btn btn-info">Search</button>
    
  </p></form>
  
            </div>
          </div>
        </div>
    

<div class="row">
  <div class="col-12">
   
        <div class="table-responsive">
         <table class="table table-bordered" >
                <tr>
                    
                    <th> id</th>
                    <th> Title</th>
                    <th>Author</th>
                    <th> Category</th>
                    <th>Language</th>
                    

                </tr>

      <!-- populate table from mysql database -->
                <?php while($row = mysqli_fetch_array($search_result)):?>
                <tr>
                     
                    <td><?php echo $row['id'];?></td> 
                    <td><?php echo $row['title'];?></td>
                    <td><?php echo $row['author'];?></td>
                     <td><?php echo $row['category'];?></td>
                     <td><?php echo $row['languages'];?></td>
                    
 
                </tr>
                <?php endwhile;?>
            </table>

            </div>
     
  </div>
</div>

<br><br><br>
    </div>

















     



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

</html>