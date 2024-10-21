<?php
    error_reporting(0);
    $dbhost = "localhost";
    $dbuser = "root"; 
    $dbpass = "";
    $db = "bookstore";
    $conn = new mysqli($dbhost, $dbuser, $dbpass, $db) ;
    // $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $db);
    if(mysqli_connect_error())
    {
        die("connection Error".mysqli_connect_errno());
    }
    if($conn)
    {
        // echo "working!";
        $sql = "SELECT * FROM add_book ORDER BY book_title" ;
        $result = $conn->query($sql);        

    
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- <meta http_equiv="X-UA-Compatible" content="IE=edge"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href="display_books.css">

    <title>Books display</title>
</head>
<body>
<div class="fullcontainer banner" id="homesection">
        <header>
            <div class="container">
                
                <nav>
                <ul>
                    <li>
                        <a href="Home_page.php#homesection">Home</a>
                    </li>
                    <li>
                        <a href="#Books">Books</a>
                    </li>
                    <li>
                        <a href="Home_page.php#contact">Contact</a>
                    </li>
                    <li>
                        <a href="log_in.php">Login</a>
                    </li>
                    <li>
                        <a href="form_ordering_book.php">Purchase</a>
                    </li>                     
                </ul>
                </nav>
            </div>

            </header>
 
<main id="#Books">
     
    <?php
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {

    ?>
    <div class="card">
        <div class="image">
            <img src="<?php echo $row["book_image"]; ?>">
        </div>

        <div class="caption">
            <p class="book_title"><?php echo $row["book_title"]; ?></p>
            <p class="prwriterice">Writer: <?php echo $row["book_writer"]; ?></p>
            <p class="price">price: <?php echo $row["book_price"]; ?></p>
            <p class="product_id">book id: <?php echo $row["book_id"]; ?></p>
            <p >(Use book title and ID to order book)</p>
        </div>
    </div>
    <?php
        }
    } else {
        echo "0 results";
    }
    ?>
</main>
    
</body>
</html>