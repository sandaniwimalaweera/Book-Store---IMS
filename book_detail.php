<?php 
require('../connection/connection.php'); 

// Default query to select all books
$query = "SELECT * FROM book";

// Check if the form has been submitted
if (isset($_POST['submit'])) {
    // Retrieve the search term
    $valueToSearch = $_POST['searchTerm'];

    // Modify the query to include the search term
    $query = "SELECT * FROM book WHERE CONCAT(title, author, id, category, languages, isbn, price, quantity) LIKE '%$valueToSearch%'";
}




$sql = mysqli_query($connection, $query);
$totalBooks = mysqli_num_rows($sql); // Calculate total number of books

?>
<!--delete book message-->
<script>
    function delbook(isbn) {
        if (confirm("You want to delete this book?")) {
            window.location.href = 'delete_book.php?isbn=' + isbn;
        }
    }
</script>

<?php include('home.php'); ?>

<!--search form-->
<div class="container">
    <form method="post" action="">
        <div class="input-group mb-3">
            <input type="text" name="searchTerm" class="form-control" placeholder="Enter book details to search" value="<?php echo isset($_POST['searchTerm']) ? $_POST['searchTerm'] : ''; ?>">
            <button class="btn btn-info" type="submit" name="submit">Search</button>
        </div>
    </form>
</div>

<!--search results-->
<div class="container table-responsive">
    <h4>Book Details</h4><hr>
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>No</th>
                <th>Title</th>
                <th>Author</th>
                <th>Id</th>
                <th>Category</th>
                <th>Languages</th>
                <th>ISBN</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Update</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            $i = 1;
            while($res = mysqli_fetch_assoc($sql)) {
                $title = $res['title'];
                $author = $res['author'];
                $id = $res['id'];
                $category = $res['category'];
                $languages = $res['languages'];
                $isbn = $res['isbn'];
                $price = $res['price'];
                $quantity = $res['quantity'];
            ?>
            <tr>
                <td><?php echo $i; $i++; ?></td>
                <td><?php echo $title; ?></td>
                <td><?php echo $author; ?></td>
                <td><?php echo $id; ?></td>
                <td><?php echo $category; ?></td>
                <td><?php echo $languages; ?></td>
                <td><?php echo $isbn; ?></td>
                <td><?php echo $price; ?></td>
                <td><?php echo $quantity; ?></td>
                <td><a href="dashb.php?option=update_book&isbn=<?php echo $isbn; ?>"><button class="btn btn-danger">Edit</button></a></td>
                <td><a href="#" onclick="delbook('<?php echo $isbn; ?>')"><button class="btn btn-danger">Delete</button></a></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
    <h5 class="mt-3" style="font-weight:bold;">Total Books: <?php echo $totalBooks; ?></h5>
</div>
