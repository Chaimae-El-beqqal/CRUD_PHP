<?php 
include('connexion.php');
if(isset($_POST['submit']))
{
    $product = htmlspecialchars(trim(strtolower($_POST['product'])));
    $quantity = htmlspecialchars(trim(strtolower($_POST['quantity'])));
    $date = htmlspecialchars(trim(strtolower($_POST['date'])));
    $query = "INSERT INTO product_liste(name,quantity,date) VALUES ('$product','$quantity','$date')";
    mysqli_query($conn,$query);
    echo "Product inserted :".mysqli_affected_rows($conn);
    mysqli_close($conn);
}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" type="text/css"/>
    <title>Products Store</title>
</head>
<body>
    <h1>Products Store</h1>
    <img src="hhh.jpg"/>
    <form action="creat.php" method="post">
    <label>Product name :  <input type="text" name="product"/></label>
<br>
<label>Product quantity :  <input type="text" name="quantity"/></label>
    <br>
    <label>Delivery Date :  <input type="date" name="date"/></label>
    <br>
    <input type="submit" name="submit" value="Buy now!" >
    <br>
</form>
<div class="links">

    <a href="creat.php">Creat</a>
    <a href="read.php">Read</a>
    <a href="update.php">Update</a>
    <a href="delete.php">Delete</a>
</div>
</body>
</html>