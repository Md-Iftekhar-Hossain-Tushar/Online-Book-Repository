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
    <link rel = "stylesheet" href="Home_page.css">

    <title>Home</title>
</head>
<body>
<div class="fullcontainer banner" id="homesection">
        <header>
            <div class="container">
                
                <nav>
                    <ul>
                        <li>
                            <a href="#homesection">Home</a>
                        </li>
                        <li>
                            <a href="#Books">Books</a>
                        </li>
                        <li>
                            <a href="#contact">Contact</a>
                        </li>
                        <li>
                            <a href="log_in.php">Login</a>
                        </li>
                                               
                    </ul>

                </nav>
            </div>

            </header>
            <!--header end here-->
            <div class="container">
                <h1>Online Book Shop</h1>
                <p>
                     This is non-profit Organization of HSTU.It's mainly focus poor and financially uneasy students.A little
                    help of their student.contributions to the HSTU club will provide supplemental income to annual dues to
                    ensure student-athlete services are fully funded for each fiscal year and provide opportunities for new
                    service development.Gift to HSTU Donation club will not receive Harvard College Class Reunion credits as
                    this fund sits outside the University .Donation will still be 100% tax deductible ,however.
                </p>
            </div>
                      
</div>
            <!--home section end here--> 
<main id="Books">
    <?php
    $flag = (int)4;
    if ($result->num_rows > 0) {
        while($flag != 0 && $row = $result->fetch_assoc()) {

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
        $flag--;
        }
    } else {
        echo "0 results";
    }
    ?>
    <div class="seemore"><a href="display_books.php"><button>See More</button></a></div>
    
</main>
   
<footer >
        <div class="container" id="contact">
                    
            <div class="connectcontainer">
                <div class="title">
                <p>Contact with us</p>
                </div>
            <p>
                Hajee Mohammad Danesh Science & Technology University,
                Basherhat, Dinajpur
            </p>
            <p>
                abidamubdi@gmail.com<br>
                sabrinamomotaj@gmail.com
            </p>
            </div>
            <!--connectcontainer-->
        </div>
</footer> 
            
</body>
</html>