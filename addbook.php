<?php require_once('connection/connection.php')

?>


<?php
if(isset($_POST['submit']))
{
$title=$_POST['title'];
$author=$_POST['author'];
$id=$_POST['id'];
$category=$_POST['category'];
$languages=$_POST['languages'];
$isbn=$_POST['isbn'];
$price=$_POST['price'];
$quantity=$_POST['quantity'];



$result="INSERT INTO book(title,author,id,category,languages,isbn,price,quantity) VALUES('$title','$author','$id','$category','$languages', '$isbn','$price','$quantity')";

if(!mysqli_query($connection,$result))
  {
    die('errors in sending data');
  }
  else
  {
    echo '<script> alert("The book entered to database successfully!!!")</script>';
    echo "<script>document.location:dashb.php?option=book_detail';</script>";
  }


 }
?>




<!--web design-->
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>bookstore.lk</title>
	<link rel="stylesheet" href="../b5/css/bootstrap.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
  <link rel="stylesheet" href="../style.css">

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

    .select-container {
    position: relative;
    width: 200px;
}

select {
    width: 100%;
    padding: 10px;
    font-size: 16px;
    border: 2px solid #ffffff;
    border-radius: 8px;
    background-color: #ffffff;
    color: #333;
    appearance: none;
    -webkit-appearance: none;
    -moz-appearance: none;
    cursor: pointer;
    outline: none;
    transition: border-color 0.3s ease;
}

select:focus {
    border-color: #5c5cf6;
}

.select-container::after {

    position: absolute;
    top: 50%;
    right: 10px;
    transform: translateY(-50%);
    pointer-events: none;
    font-size: 12px;
    color: #007bff;
}

option {
    font-size: 16px;
    padding: 10px;
}


.quantity-counter {
    display: flex;
    align-items: center;
}

input[type="number"] {
    width: 60px;
    text-align: center;
    font-size: 18px;
    border: 1px solid #ccc;
    border-radius: 4px;
    margin: 0 10px;
}

.counter-btn {
    font-size: 18px;
    width: 30px;
    height: 30px;
    border: none;
    border-radius: 4px;
    background-color: #000000;
    color: white;
    cursor: pointer;
    outline: none;
}

.counter-btn:disabled {
    background-color: #ccc;
    cursor: not-allowed;
}

.counter-btn:active {
    background-color: #0056b3;
}
    </style>
</head>
<body>

<?php include('home.php') ?>
<br>
<br>

<!--Login form-->
<div style="display: flex; justify-content: center; align-items: center; height: 90vh;">
    <form style="margin: 10px; padding: 20px; width: 700px; box-shadow: 0 15px 25px rgba(79, 77, 77, 0.8); background-color:white;" method = "POST">
      <legend style="font-family: Arial, sans-serif; color: darkblue; text-align: center; letter-spacing: 2px;">
        <b>BOOK REGISTRATION</b>
      </legend>
      <br>
      <label style="font-family: Arial, sans-serif; color: black;">Book Title:</label>
      <br>
      <input type="text" class="form-control" name="title" style="width: 100%; box-sizing: border-box;" required>
      <br>
      <label style="font-family: Arial, sans-serif; color: black;">Author's Name:</label>
      <br>
      <input type="text" class="form-control" name="author" style="width: 100%; box-sizing: border-box;"  required>
      <br>
      <label style="font-family: Arial, sans-serif; color: black;" for="">Book ID:</label>
      <br>
      <input type="text" class="form-control" name="id" style="width: 100%; box-sizing: border-box;"  required>
      <br>
      
      <div class="select-container">
        <label style="font-family: Arial, sans-serif; color: black;" for="">Book Category:</label>
        <select class="form-select" name="category" id="book-genre"  required>
            <option value="fiction">Fiction</option>
            <option value="non-fiction">Non-Fiction</option>
            <option value="fantasy">Fantasy</option>
            <option value="mystery">Mystery</option>
            <option value="romance">Romance</option>
            <option value="thriller">Thriller</option>
            <option value="other">Other</option>
        </select>
    </div>
    <br>
    <div class="select-container">
        <label style="font-family: Arial, sans-serif; color: black;" for="">Language:</label>
        <select class="form-select" name="languages" id="book-genre"  required>
            <option value="Sinhala">Sinhala</option>
            <option value="English">English</option>
            <option value="Tamil">Tamil</option></option>
        </select>
    </div>
      <br>
      <label style="font-family: Arial, sans-serif; color: black;" for="">ISBN:</label>
      <br>
      <input type="text" class="form-control" name="isbn" style="width: 100%; box-sizing: border-box;"  required>
      <br>
      <label style="font-family: Arial, sans-serif; color: black;" for="">Price:</label>
      <br>
      <input type="text" class="form-control" name="price" style="width: 100%; box-sizing: border-box;"  required>
      <br>
      <div class="quantity-counter">
        <label style="font-family: Arial, sans-serif; color: black;" for="">Quantity:</label>
        <input type="number" id="quantity" name="quantity" value="0" min="0"  required>
        
    </div>


      <br><br>
      <center><button name="submit" class="btn btn-warning" style="letter-spacing:2px; text-decoration: none; color: white;" href="">SUBMIT</button></center>
    </form>
  </div>


<br>
<br>
<br>
<br>







<script src="b5/js/bootstrap.bundle.min.js"></script>
</body>
</html>