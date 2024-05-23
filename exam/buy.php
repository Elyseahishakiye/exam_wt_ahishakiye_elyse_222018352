<?php  
    
     $db= new mysqli('localhost','root','','ockello_art_gallery');
    $product_name= $_POST['product_name'];
    $category=$_POST['category'];
    $quantity=$_POST['quantity'];
    $name=$_POST['name'];
    $phone=$_POST['phone'];
    $date = $_POST['date'];
    $amount= $_POST['amount'];
    $inserts="INSERT INTO sales VALUES('','$product_name','$category','$quantity','$name','$phone','$date','$amount' )";
        $c=mysqli_query($db,$inserts);
    if ($c) {
          echo "registered";
    } else {
        echo "failed".mysqli_error($db);
    }
    
     ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Purchase Form</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h2>Buy a Product</h2>
        <form action="" method="post">
            <label for="product-name">Product Name</label>
            <input type="text" id="product-name" name="product-name" required>

            <label for="category">payment method</label>
            <select id="category" name="category" required>
                <option value="">Select a method</option>
                <option value="E-wallete">E-wallete</option>
                <option value="Credit">Credit Card</option>
                <option value="Debt Card">Debt Card</option>
                <option value="CryptoCurrency">CryptoCurrency</option>
                <option value="other">Other</option>
            </select>

            <label for="quantity">Quantity</label>
            <input type="number" id="quantity" name="quantity" min="1" required>

            <label for="name">Your Name</label>
            <input type="text" id="name" name="name" required>

            <label for="phone">Phone Number</label>
            <input type="tel" id="phone" name="phone" required>

            <label for="date">Sales Date</label>
            <input type="date" id="date" name="date" required>

            <label for="amount">Amount Paid</label>
            <input type="text" id="amount" name="amount" required>

            <input type="submit" value="Buy Now">
        </form>
    </div>
</body>
</html>
<style type="text/css">
	
	body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    display: block;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
}

.container {
    background-color: #fff;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    width: 300px;
}

h2 {
    text-align: center;
    margin-bottom: 20px;
}

form {
    display: flex;
    flex-direction: column;
}

label {
    margin-bottom: 5px;
    font-weight: bold;
}

input[type="text"],
input[type="number"],
input[type="email"],
input[type="tel"],
input[type="date"],
select,
textarea {
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 4px;
    width: 100%;
}
select,option
{
	width: 107%;
}

input[type="submit"] {
    padding: 15px;
    background-color: #28a745;
    border: none;
    border-radius: 4px;
    color: #fff;
    font-weight: bold;
    cursor: pointer;
    width: 107%;
}

input[type="submit"]:hover {
    background-color: #218838;
}

</style>