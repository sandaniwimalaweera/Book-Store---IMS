<?php require('../connection/connection.php'); ?>

<script>
	function delFeedback(id)
	{
		if(confirm("You want to delete this Feedback ?"))
		{
		window.location.href='delete_feedback.php?id='+id;	
		}
	}
</script>
<?php include('home.php')	 ?>
<table class="table table-striped table-hover">
	<h4>Messages</h4><hr>
	<tr>
		<th>No</th>
		<th>Name</th>
		<th>Email</th>
		<th>Message</th>
		<th>Date</th>
		<th>Delete</th>
	</tr>
<?php 
$i=1;
$sql=mysqli_query($connection,"select * from message");
while($res=mysqli_fetch_assoc($sql))
{
$id=$res['id'];	
$name=$res['name'];
$email=$res['email'];
$message=$res['message'];
$date=$res['date'];

?>
<tr>
		<td><?php echo $i;$i++; ?></td>
		<td><?php echo $res['name']; ?></td>
		<td><?php echo $res['email']; ?></td>
		<td><?php echo $res['message']; ?></td>
		<td><?php echo $res['date']; ?></td>
		<td><a href="#"onclick="delFeedback('<?php echo $id; ?>')"><button class="btn btn-danger">Delete</button></a></td>
	</tr>	
<?php 	
}
?>	
	
</table>