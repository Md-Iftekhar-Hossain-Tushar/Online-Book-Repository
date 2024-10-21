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
        // echo "Connected: ";
        $name  = $_POST['name'];
        $contact = $_POST['contact'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        $book_id = $_POST['book_id'];
        $book_title = $_POST['book_title'];
        $q_books = $_POST['q_books'];
        $t_amount = $_POST['t_amount'];
        $account_type = $_POST['account_type'];
        $a_number = $_POST['a_number'];
        $t_id =$_POST['t_id'];
        // $transac = int($t_id);
        echo "working";
        echo gettype($t_id);

        
        $find_copy = "SELECT email FROM purchase  where t_id= ?";
        $pre_statemnt = $conn->prepare($find_copy);
        $pre_statemnt->bind_param("s",$t_id);
        $pre_statemnt->execute();
        $pre_statemnt->bind_result($email);
        $pre_statemnt->store_result();
        $num_of_result = $pre_statemnt->num_rows();
        echo $num_of_result;
        
        if($num_of_result == 0 ){
        $pre_statemnt->close();
        $insert = "INSERT INTO purchase (name, contact, email, address, book_id, book_title, q_books, t_amount,
            account_type, a_number, t_id) 
            VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $pre_statemnt = $conn->prepare($insert);
        // echo "working";
        $pre_statemnt->bind_param("sissisiisis", $name, $contact, $email, $address, $book_id, $book_title, $q_books, $t_amount,
            $account_type, $a_number, $t_id);
        $pre_statemnt->execute();
        header('Location: display_books.php');
        }
        else{
            echo "ERROR!! Your information has been stored...";
            // echo "working";
        }
    }
    
?>