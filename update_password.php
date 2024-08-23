<?php 
include('../connection/connection.php');
		
if(isset($update))
{
		$hashed_password1=sha1($op);
		$hashed_password2=sha1($np);
		$hashed_password3=sha1($cp);
$sql=mysqli_query($connection,"select * from user where username='$admin' and password='$hashed_password1' ");
	if(mysqli_num_rows($sql))
	{

		if($hashed_password2==$hashed_password3)
		{

		mysqli_query($connection,"update user set password='$hashed_password2' where username='$admin' ");	
		echo "<h3 style='color:blue'>Password updated successfully</h3>";
		}
		else
		{
			echo "<h3 style='color:red'>New and confirm doesn't match</h3>";
		}
	}
	else
	{
	echo "<h3 style='color:red'>Old Password doesn't match</h3>";	
	}
	
}
?>
<?php include('home.php')	 ?>
<form method="post" enctype="multipart/form-data">
<table class="table table-bordered table-striped table-hover">
	<h4>Update Password</h4><hr>
	<tr style="height:40">
		<th>Enter Your old Password</th>
		<td><input type="password" name="op" class="form-control"required/></td>
	</tr>
	
	<tr>	
		<th>Enter Your New Password</th>
		<td><input type="password" name="np" class="form-control"required/>
		</td>
	</tr>
	
	<tr>	
		<th>Enter Your Confirm Password</th>
		<td><input type="password" name="cp" class="form-control"required/>
		</td>
	</tr>
	
	<tr>
		<td colspan="2" align="center">
			<input type="submit" class="btn btn-primary" value="Update Password" name="update"required/>
		</td>
	</tr>
</table> 
</form>