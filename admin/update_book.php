<?php 
require('../connection/connection.php');

// Retrieve the ISBN from the GET request and sanitize it
$isbn = $_GET['isbn'];

// Prepare a statement to select the book details based on the ISBN
$query = "SELECT * FROM book WHERE isbn = ?";
$stmt = mysqli_prepare($connection, $query);

// Bind the ISBN to the statement
mysqli_stmt_bind_param($stmt, 's', $isbn);

// Execute the statement
mysqli_stmt_execute($stmt);

// Get the result set from the executed statement
$result = mysqli_stmt_get_result($stmt);

// Fetch the associative array
$res = mysqli_fetch_assoc($result);

// Check if the form has been submitted
if (isset($_POST['update'])) {
    // Extract and sanitize user inputs
    $title = $_POST['title'];
    $author = $_POST['author'];
    $category = $_POST['category'];
    $languages = $_POST['languages'];
    $isbn = $_POST['isbn'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];

    // Prepare an update statement
    $update_query = "UPDATE book SET title = ?, author = ?, category = ?, languages = ?, isbn = ?, price = ?, quantity = ? WHERE isbn = ?";
    $update_stmt = mysqli_prepare($connection, $update_query);

    // Bind the parameters to the statement
    mysqli_stmt_bind_param($update_stmt, 'ssssssds', $title, $author, $category, $languages, $isbn, $price, $quantity, $isbn);

    // Execute the update statement
    mysqli_stmt_execute($update_stmt);

    // Redirect to the book details page
    header('location:dashb.php?option=book_detail');
}
?>

<form method="post" enctype="multipart/form-data">
    <table class="table table-bordered">
        <tr>    
            <th>Title</th>
            <td><input type="text" name="title" value="<?php echo htmlspecialchars($res['title']); ?>" class="form-control"/></td>
        </tr>

        <tr>    
            <th>Author</th>
            <td><input type="text" name="author" value="<?php echo htmlspecialchars($res['author']); ?>" class="form-control"/></td>
        </tr>

        <tr>    
            <th>Category</th>
            <td><input type="text" name="category" value="<?php echo htmlspecialchars($res['category']); ?>" class="form-control"/></td>
        </tr>

        <tr>    
            <th>Language</th>
            <td><input type="text" name="languages" value="<?php echo htmlspecialchars($res['languages']); ?>" class="form-control"/></td>
        </tr>

        <tr>    
            <th>ISBN</th>
            <td><input type="text" name="isbn" value="<?php echo htmlspecialchars($res['isbn']); ?>" class="form-control"/></td>
        </tr>

        <tr>    
            <th>Price</th>
            <td><input type="text" name="price" value="<?php echo htmlspecialchars($res['price']); ?>" class="form-control"/></td>
        </tr>

        <tr>    
            <th>Quantity</th>
            <td><input type="text" name="quantity" value="<?php echo htmlspecialchars($res['quantity']); ?>" class="form-control"/></td>
        </tr>

        <tr>
            <td colspan="2">
                <input type="submit" class="btn btn-primary" value="Update Details" name="update"/>
            </td>
        </tr>
    </table> 
</form>
