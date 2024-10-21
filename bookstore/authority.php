<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="authority.css" >
    <title>Authority controls</title>
</head>


<body>
            <section class="fullcontainer" id="aboutsection" >
            <header>
            <div class="container">
                
                <nav>
                <ul>
                    <li>
                        <a href="Home_page.php#homesection">Home</a>
                    </li>
                    <li>
                        <a href="display_books.php#Books">Books</a>
                    </li>
                    <li>
                        <a href="Home_page.php#contact">Contact</a>
                    </li>
                    <li>
                        <a href="log_in.php">Login</a>
                    </li> 
                    <li>
                        <a href="add_book.php">Add Book</a>
                    </li>                    
                </ul>
                </nav>
            </div>

            </header>
                 
        <table class="content-table">
                    <caption>Books: </caption>
                        <thead>
                            <tr>
                                <th>book_id </th>
                                <th>book_title</th>
                                <th>book_writer</th>
                                <th>book_price</th>
                                <th>book_quantity</th>
                                <th>book_description</th>
                                <th>book_image</th>
                                </tr>
                        </thead>
                        <tbody>
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
                                if ($result->num_rows > 0) {
                                    while($row = $result->fetch_assoc()) {
                                        // echo "working!";
                                        echo "<tr>
                                        <td>" .$row["book_id"]. "</td>
                                        <td>" .$row["book_title"]. "</td>
                                        <td>" .$row["book_writer"]. "</td>
                                        <td>" .$row["book_price"]. "</td>
                                        <td>" .$row["book_quantity"]. "</td>
                                        <td>" .$row["book_description"]. "</td>
                                        <td>" .$row["book_image"]. "</td>
                                        </tr>";
                                    }
                                } else {
                                    echo "0 results";
                                }
                               

                            }

                             ?>
                        </tbody>
                    </table>

                    <table class="content-table">
                    <caption>Purchase: </caption>    
                    <thead>
                            <tr>
                                <th>book_id</th>
                                <th>q_books</th>
                                <th>name</th>
                                <th>contact</th>
                                <th>email</th>
                                <th>address</th>
                                <th>t_amount</th>
                                <th>account_type</th>
                                <th>a_number</th>
                                <th>t_id</th>
                                <th>delivery</th>
                                </tr>

                        </thead>
                        <tbody>
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
                                $sql = "SELECT * FROM purchase ORDER BY book_id" ;
                                $result = $conn->query($sql);
                                if ($result->num_rows > 0) {
                                    while($row = $result->fetch_assoc()) {
                                        // echo "working!";
                                        echo "<tr>
                                        <td>" .$row["book_id"]. "</td>
                                        <td>" .$row["q_books"]. "</td>
                                        <td>" .$row["name"]. "</td>
                                        <td>" .$row["contact"]. "</td>
                                        <td>" .$row["email"]. "</td>
                                        <td>" .$row["address"]. "</td>
                                        <td>" .$row["t_amount"]. "</td>
                                        <td>" .$row["account_type"]. "</td>
                                        <td>" .$row["a_number"]. "</td>
                                        <td>" .$row["t_id"]. "</td>
                                        <td>" .$row["delivery"]. "</td>
                                        </tr>";
                                    }
                                } else {
                                    echo "0 results";
                                }
                               

                            }

                             ?>
                        </tbody>
                    </table>
                </div>
                </div>
            </section> 
</body>
</html>