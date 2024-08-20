<?php 
$email=$_GET['isbn'];
$sql=mysqli_query($connection,"select * from book where isbn='$isbn'");
$res=mysqli_fetch_assoc($sql);

extract($_REQUEST);
if(isset($update))
{
mysqli_query($connection,"update book set title='$title',author='$author',category='$category',languages='$languages',isbn='$isbn', price='$price', quantity='$quantity' where isbn='$isbn' ");
header('location:dashb.php?option=book_detail');
}

?>

<form method="post" enctype="multipart/form-data">
<table class="table table-bordered">
	
	<tr>	
		<th>Title</th>
		<td><input type="text"  name="title" value="<?php echo $res['title']; ?>"  class="form-control"/>
		</td>
	</tr>

<tr>	
		<th>Author</th>
		<td><input type="text" name="author"  value="<?php echo $res['author']; ?>" class="form-control"/>
		</td>
	</tr>



	<tr>	
		<th>Category</th>
		<td><input type="text" name="category"  value="<?php echo $res['category']; ?>" class="form-control"/>
		</td>
	</tr>

	
<tr>	
		<th>Language</th>
		<td><input type="text" name="languages"  value="<?php echo $res['languages']; ?>" class="form-control"/>
		</td>
	</tr>

<tr>	
		<th>ISBN</th>
		<td><input type="text" name="isbn"  value="<?php echo $res['isbn']; ?>" class="form-control"/>
		</td>
	</tr>

	<tr>	
		<th>Price</th>
		<td><input type="text" name="price"  value="<?php echo $res['price']; ?>" class="form-control"/>
		</td>
	</tr>

	<tr>	
		<th>Quantity</th>
		<td><input type="text" name="quantity"  value="<?php echo $res['quantity']; ?>" class="form-control"/>
		</td>
	</tr>


	<tr>
		<td colspan="2">
			<input type="submit" class="btn btn-primary" value="Update Details" name="update"/>
		</td>
	</tr>
</table> 
</form>