<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>payment</title>
</head>
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


    .cards
    {
        display: flex;
        text-align: center;
        padding: 20px;
        justify-content: space-between;
    }
    table
    {
        width: 40%;
       
    }
  .pay-table
  {
    width: 100%;
    display: flex;
    justify-content: space-between;

  }
  .t{
    width: 60%;
    padding-right: -40px;
    font-size: 20px;
    text-align: center;
   box-shadow: 5px 10px 20px 20px lightgrey;
  }


.btn:hover{
    background-color: #3498db;
    color: #fff;
    transition: 1.5s;
}


h1, h2 {
    color: #2c3e50;
    text-transform: uppercase;
    font-weight: 700;
    margin: 0 0 10px;
}

h1 {
    font-size: 2.5em;
    text-align: center;
    margin-top: 20px;
}
  h1:after
  {
        content: '';
        background: #333;
        display: block;
        height: 3px;
        width: 150px;
        margin: 10px auto;

  }

h2 {
    font-size: 1.8em;
}

p {
    font-size: 1.1rem;
    line-height: 1.8;
    margin-bottom: 25px;
}

/* Responsive Design */
@media (max-width: 600px) {
    .payment-container {
        padding: 20px;
        width: 95%;
    }

    h1 {
        font-size: 2em;
    }

    h2 {
        font-size: 1.5em;
    }



</style>
<body>


    <br><br><br><br><br><br>
<div class="payment">
    <div class="payment-method">
        <h1>Payment</h1>
        <p>We offer a variety of payment options to make it easy for you to access our services. Please choose the method that works best for you.</p>
     
            <div class="payment-method">
                <h2>Credit/Debit Card</h2>
                <p>We accept all major credit and debit cards. You can make a secure payment online through our payment portal.</p>
            </div>


     
                     
                                   
 <div class="container">
        <h2>Buy a Product</h2>
        <form action="" method="post">
            <label for="product-name">Product Name</label>
            <input type="text" id="product_name" name="product_name" required>

            <label for="category">payment method</label>
            <select id="category" name="category" required>
                <option value="">Select a method</option>
                <option value="E-wallete">E-wallete</option>
                <option value="Credit">Credit Card</option>
                <option value="MOMO">MOMO</option>
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

            <input type="submit" name="send" value="Buy Now">
        </form>
    </div>
                             
            <div class="t">
          <table border="1" cellspacing="0">
            <tr>
                <td colspan="8">table of payment pills and other portions</td>
            </tr>
            <tr>
                <td>payment id</td>
                <td>product Name</td>
                <td>customer Name</td>
                <td>quantity</td>
                <td>payment method</td>
                <td>Phone number</td>
                <td>Sales date</td>
                <td>amount paid</td>
                
            </tr>
            <tr>
              <?php  
               $db= new mysqli('localhost','root','','ockello_art_gallery');
               if (isset($_POST['send'])) {
              
               
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
    
}
            $se="SELECT * FROM sales";
            $checks=mysqli_query($db,$se);

              ?>
            <?php while ($row=mysqli_fetch_assoc($checks)) { ?>

                <td><?php echo $row['salesID']; ?></td>
                <td><?php echo $row['product_name']; ?></td>
                <td><?php echo $row['customerName']; ?></td>
                <td><?php echo $row['quantity']; ?></td>
                <td><?php echo $row['payment']; ?></td>
                <td><?php echo $row['phoneNumber']; ?></td>
                <td><?php echo $row['salesDate']; ?></td>
                <td><?php echo $row['AmountPaid']; ?></td>
                
            </tr>
        <?php } ?>

        </table></div></div>
 </form>
</body>
</html>