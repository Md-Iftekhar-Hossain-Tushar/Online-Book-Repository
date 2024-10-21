<?php 
    error_reporting(0);
    $dbhost = "localhost";
    $dbuser = "root"; 
    $dbpass = "";
    $db = "bookstore";
    $conn = new mysqli($dbhost, $dbuser, $dbpass, $db) ;
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }
    else if($conn)
    {
        echo "Connected: ";
        $book_title  = $_POST['book_title'];
        $book_writer = $_POST['book_writer'];
        $book_price = $_POST['book_price'];
        $book_quantity = $_POST['book_quantity'];
        $book_description = $_POST['book_description'];
        $book_image = $_FILES['book_image']['name'];
        // echo "working";

        $find_copy = "SELECT book_title FROM add_book WHERE book_title = ?";
        $pre_statemnt = $conn->prepare($find_copy);
        // echo "working";
        $pre_statemnt->bind_param("s", $book_title);
        $pre_statemnt->execute();
        $pre_statemnt->bind_result($book_title);
        $pre_statemnt->store_result();
        $num_of_result = $pre_statemnt->num_rows();
        // echo "working";
        if($num_of_result == 0 ){
            $pre_statemnt->close();
            // move inserted file in a folder
            $directory = "books_image/";
            $image = $directory.$_FILES["book_image"]["name"];
            $directory.($_FILES["book_image"]["name"]);
            $directoryN = $directory.basename($_FILES["book_image"]["name"]);
            move_uploaded_file($_FILES['book_image']['tmp_name'], "$directoryN");

            $insert = "INSERT INTO add_book (book_title, book_writer, book_price, book_quantity, book_description, book_image) 
             VALUES(?, ?, ?, ?, ?, ?)";
            $pre_statemnt = $conn->prepare($insert);
            // echo "working";
            $pre_statemnt->bind_param("ssiiss", $book_title, $book_writer, $book_price, $book_quantity, $book_description, $image);
           $pre_statemnt->execute();

            
           header('Location: authority.php');
        }
        else{

            $pre_statemnt->close();
            $sql = "SELECT book_quantity FROM add_book where book_title ='$book_title'";
            $result = $conn->query($sql);
            $row = $result->fetch_assoc();
            $value = $row["book_quantity"];
        
            // echo "working";
            $value1= (int)$book_quantity + $value;
            echo gettype($value1);

            // echo "working";

            $update = "UPDATE add_book SET book_quantity = '$value1'  where book_title ='$book_title'";
            // echo "working";
            $pre_statemnt = $conn->prepare($update);
           $pre_statemnt->execute();
           header('Location: authority.php');
        }
    

    }
    
?>

