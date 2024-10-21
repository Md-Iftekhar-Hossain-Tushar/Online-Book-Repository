<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="add_book.css">
    <title>Document</title>
</head>
<body>
    <div class="center">
        <div class="header_class">
            <h1>Add book:</h1>
        </div>

        <div class="form_class">
            <form class="form_contents" action="add_book_php.php" method="post" enctype="multipart/form-data">
                <div>
                    <label for="book_title">Name: </label>
                    <br>
                    <input type="text" name="book_title" id="book_title" placeholder="Enter book name" required >
                </div>
                <br>
                <br>
                <div>
                    <label for="book_writer">Writer: </label>
                    <br>
                    <input type="text" name="book_writer" id="book_writer" placeholder="Enter book writer name" required>
                 </div>
                 <br>   
                 <br>
                <div>
                    <label for="book_price">Price: </label>
                    <br>
                    <input type="text" name="book_price" id="book_price" placeholder="Enter book price" required>
                 </div>
                 <br>
                 <br>
                <div>
                    <label for="book_quantity">Book Quantity: </label>
                    <br>
                    <input type="text" name="book_quantity" id="book_quantity" placeholder="Enter book quantity" required>
                 </div>
                 <br>
                 <br>
                <div>
                    <label for="contact">Description: </label>
                    <br>
                    <input type="text" name="book_description" id="book_description" placeholder="Enter book price description" required>
                 </div>
                 <br>
                 
                 <br>
                 <div>
                    <label for="book_image">Attach book photo:</label>
                    <br>
                    <input type="file" name="book_image" id="book_image">
                 </div>
                 <br>

                 <br>
                 <br>
                 <div class="submit_text">
                    <input type="submit" value="Add book">
                </div>
                <br>
                 


            </form>
        </div>

    </div>
</body>
</html>