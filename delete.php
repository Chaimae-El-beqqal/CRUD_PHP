<?php 
include('connexion.php');
if(isset($_POST['submit']))
{
    $query = "DELETE FROM product_liste WHERE name='$_POST[product]'";
    mysqli_query($conn,$query);
    echo "Product deleted :".mysqli_affected_rows($conn);
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
    <title>Delete a Product</title>
</head>
<body>
    <h1>Products Store</h1>
    <img src="hhh.jpg"/>
    <form action="delete.php" method="post">
   <label>Product name :  <input type="text" name="product"/></label>
<br>
    
    <input type="submit" name="submit" value="Delete" >
    <br>
    <div class="links">

    <a href="creat.php">Creat</a>
    <a href="read.php">Read</a>
    <a href="update.php">Update</a>
    <a href="delete.php">Delete</a>
</div>
</form>