<?php 
require('../connection/connection.php'); 

// Default query to select all users
$query = "SELECT * FROM user";

// Check if the form has been submitted
if (isset($_POST['submit'])) {
    // Retrieve the search term
    $valueToSearch = $_POST['searchTerm'];

    // Modify the query to include the search term
    $query = "SELECT * FROM user WHERE CONCAT(name, sex, address, email, mobile, username) LIKE '%$valueToSearch%'";
}

$sql = mysqli_query($connection, $query);
$totalmembers = mysqli_num_rows($sql); // Calculate total number of members

include('home.php'); 
?>

<script>
    function delstudent(email)
    {
        if(confirm("You want to delete this member ?"))
        {
            window.location.href='delete_user.php?email=' + email;	
        }
    }
</script>

<!--search form-->
<div class="container">
    <form method="post" action="">
        <div class="input-group mb-3">
            <input type="text" name="searchTerm" class="form-control" placeholder="Enter member details to search" value="<?php echo isset($_POST['searchTerm']) ? $_POST['searchTerm'] : ''; ?>">
            <button class="btn btn-info" type="submit" name="submit">Search</button>
        </div>
    </form>
</div>

<!--search results-->
<div class="container table-responsive">
    <h4>Member Details</h4><hr>
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Sex</th>
                <th>Address</th>
                <th>Email</th>
                <th>Contact Number</th>
                <th>Username</th>
                <th>Update</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            $i = 1;
            while($res = mysqli_fetch_assoc($sql)) {
                $name = $res['name'];
                $sex = $res['sex'];
                $address = $res['address'];
                $email = $res['email'];
                $mobile = $res['mobile'];
                $username = $res['username'];
            ?>
            <tr>
                <td><?php echo $i; $i++; ?></td>
                <td><?php echo $name; ?></td>
                <td><?php echo $sex; ?></td>
                <td><?php echo $address; ?></td>
                <td><?php echo $email; ?></td>
                <td><?php echo $mobile; ?></td>
                <td><?php echo $username; ?></td>
                <td><a href="dashb.php?option=update_register&email=<?php echo $email; ?>"><button class="btn btn-danger">Edit</button></a></td>
                <td><a href="#" onclick="delstudent('<?php echo $email; ?>')"><button class="btn btn-danger">Delete</button></a></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
    <h5 class="mt-3" style="font-weight:bold;">Total Members: <?php echo $totalmembers; ?></h5>
</div>
