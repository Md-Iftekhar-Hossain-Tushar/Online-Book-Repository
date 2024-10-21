<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="form_ordering_book.css">
    <title>Document</title>
</head>
<body>
    <div class="center">
        <div class="header_class">
            <h1>Fill up the book purchasing form :</h1>
        </div>

        <div class="form_class">
            <form class="form_contents" action="form_ordering_book_php.php" method="post" enctype="multipart/form-data">
                <div>
                    <label for="name">Full Name: </label>
                    <br>
                    <input type="text" name="name" id="name" placeholder="Enter your name" required >
                </div>
                <br>
                <br>
                <div>
                    <label for="contact">Contact Number: </label>
                    <br>
                    <input type="text" name="contact" id="contact" placeholder="Enter your contact number" required>
                 </div>
                 <br>   
                 <div>
                    <label for="email">Email: </label>
                    <br>
                    <input type="text" name="email" id="email" placeholder="Enter your email address" required>
                 </div>
                 <br>
                 <div>
                    <label for="add">Delivery Address: </label>
                    <br>
                    <textarea rows="5" name="address" id="add" placeholder="Enter your address" required ></textarea>
                 </div>
                    

                 <br>
                 <div>
                    <label for="book_id">Book ID: </label>
                    <br>
                    <input type="text" name="book_id" id="book_id" placeholder="Enter your book id" required>
                 </div>
                 <br>
                 <div>
                    <label for="book_title">Book Title: </label>
                    <br>
                    <input type="text" name="book_title" id="book_title" placeholder="Enter your book title" required >
                </div>
                <br>
                 <div>
                    <label for="q_books">Quantity of books: </label>
                    <br>
                    <input type="text" name="q_books" id="q_books" placeholder="Enter quantity of books" required>
                 </div>
                 <br>
                 <div>
                    <label for="t_amount">Total amount: </label>
                    <br>
                    <input type="text" name="t_amount" id="t_amount" placeholder="Enter total amount" required>
                 </div>
                 <br>
                <div class="account_type" >
                    <label for="account_type">Mobile banking services: </label>
                    <select name="account_type" id="account_type" required>
                        <option value="bKash">bKash</option>
                        <option value="Nagad">Nagad </option>
                        <option value="Rocket">Rocket </option>
                        <option value="Upay">Upay </option>                       
                    </select>
                </div>
                <br>
                <div>
                    <label for="a_number">Account Number: </label>
                    <br>
                    <input type="text" name="a_number" id="a_number" placeholder="Enter your account number" required>
                 </div>
                 <br>
                 <div>
                    <label for="t_id">Transaction number: </label>
                    <br>
                    <input type="text" name="t_id" id="t_id" placeholder="Enter your transaction number" required>
                 </div>
                 <br>
                 
                 <br>
                 <br>
                 <div class="submit_text">
                    <input type="submit" value="Purchase">
                </div>
                <br>
                 


            </form>
        </div>

    </div>
</body>
</html>