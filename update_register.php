<?php 
$email=$_GET['email'];
$sql=mysqli_query($connection,"select * from user where email='$email'");
$res=mysqli_fetch_assoc($sql);

extract($_REQUEST);
if(isset($update))
{
mysqli_query($connection,"update user set name='$name',sex='$sex',email='$email',address='$address',mobile='$mobile',username='$username' where email='$email' ");
header('location:dashb.php?option=user_registration');
}

?>

<form method="post" enctype="multipart/form-data">
<table class="table table-bordered">
	
	<tr>	
		<th>Name</th>
		<td><input type="text"  name="name" value="<?php echo $res['name']; ?>"  class="form-control"/>
		</td>
	</tr>

<tr>	
		<th>Sex</th>
		<td><input type="text" name="sex"  value="<?php echo $res['sex']; ?>" class="form-control"/>
		</td>
	</tr>



<tr>	
		<th>Address</th>
		<td><input type="text" name="address" value="<?php echo $res['address']; ?>"  class="form-control"/>
		</td>
	</tr>


	<tr>	
		<th>Mobile</th>
		<td><input type="text" name="mobile"  value="<?php echo $res['mobile']; ?>" class="form-control"/>
		</td>
	</tr>

	
<tr>	
		<th>Email</th>
		<td><input type="email" name="email"  value="<?php echo $res['email']; ?>" class="form-control"/>
		</td>
	</tr>

<tr>	
		<th>Username</th>
		<td><input type="text" name="username"  value="<?php echo $res['username']; ?>" class="form-control"/>
		</td>
	</tr>


	<tr>
		<td colspan="2">
			<input type="submit" class="btn btn-primary" value="Update Details" name="update"/>
		</td>
	</tr>
</table> 
</form>