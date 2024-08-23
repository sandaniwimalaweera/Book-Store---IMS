<?php 
include('../connection/connection.php');

if (isset($update)) {
    // Hash the passwords
    $hashed_password1 = sha1($op);
    $hashed_password2 = sha1($np);
    $hashed_password3 = sha1($cp);

    // Prepare the SQL statement for selecting the user
    $sql = mysqli_prepare($connection, "SELECT * FROM mylogin WHERE name = ? AND password = ?");
    mysqli_stmt_bind_param($sql, 'ss', $admin, $hashed_password1);
    mysqli_stmt_execute($sql);
    mysqli_stmt_store_result($sql);

    if (mysqli_stmt_num_rows($sql)) {
        if ($hashed_password2 == $hashed_password3) {
            // Prepare the SQL statement for updating the password
            $update_stmt = mysqli_prepare($connection, "UPDATE mylogin SET password = ? WHERE name = ?");
            mysqli_stmt_bind_param($update_stmt, 'ss', $hashed_password2, $admin);
            mysqli_stmt_execute($update_stmt);

            echo "<h3 style='color:blue'>Password updated successfully</h3>";
            
            // Close the update statement
            mysqli_stmt_close($update_stmt);
        } else {
            echo "<h3 style='color:red'>New and confirm password doesn't match</h3>";
        }
    } else {
        echo "<h3 style='color:red'>Old Password doesn't match</h3>";
    }

    // Close the select statement
    mysqli_stmt_close($sql);
}
?>

<?php include('home.php'); ?>
<form method="post" enctype="multipart/form-data">
    <table class="table table-bordered table-striped table-hover">
        <h4>Update Password</h4><hr>
        <tr style="height:40">
            <th>Enter Your Old Password</th>
            <td><input type="password" name="op" class="form-control" required/></td>
        </tr>
        
        <tr>    
            <th>Enter Your New Password</th>
            <td><input type="password" name="np" class="form-control" required/></td>
        </tr>
        
        <tr>    
            <th>Enter Your Confirm Password</th>
            <td><input type="password" name="cp" class="form-control" required/></td>
        </tr>
        
        <tr>
            <td colspan="2" align="center">
                <input type="submit" class="btn btn-primary" value="Update Password" name="update" required/>
            </td>
        </tr>
    </table> 
</form>
