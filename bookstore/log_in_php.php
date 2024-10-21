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
        $user_mail = $_POST['user_mail'];
        $user_password = $_POST['user_password'];
        // echo "working";
        $find_copy = "SELECT u_email FROM sign_up WHERE u_email = ? and u_password = ? LIMIT 1";
        $pre_statemnt = $conn->prepare($find_copy);
        // echo "working";
        $pre_statemnt->bind_param("ss", $user_mail, $user_password);
        // echo "working";
        $pre_statemnt->execute();
        
        $pre_statemnt->bind_result($user_mail);
        $pre_statemnt->store_result();
        $num_of_result = $pre_statemnt->num_rows();
        // echo "working";
        if($num_of_result != 0 ){
            
            header('Location: authority.php');
        }
        else{
            echo "Invalid user name or password";
            // echo "working";
        }

    }
    
?>