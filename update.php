<?php 
include('connexion.php');
if(isset($_POST['submit']))
{
    $query = "UPDATE  product_liste set quantity='$_POST[quantity]' ,date='$_POST[date]' WHERE name = '$_POST[product]'";
    mysqli_query($conn,$query);
    echo "Product Updated :".mysqli_affected_rows($conn);
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
    <h1>Products Update</h1>
    <img src="hhh.jpg"/>
    <form action="update.php" method="post">
    <label>Product name :  <input type="text" name="product"/></label>
<br>
<label>Product quantity :  <input type="text" name="quantity"/></label>
    <br>
    <label>Delivery Date :  <input type="date" name="date"/></label>
    <br>
    <input type="submit" name="submit" value="Update" >
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