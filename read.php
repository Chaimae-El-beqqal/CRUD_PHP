<?php 
include('connexion.php');
if(isset($_POST['submit']))
{
    $query = "SELECT * FROM  product_liste  WHERE name = '$_POST[product]'";
    $result = mysqli_query($conn,$query);
    echo "<table>
    <tr><th>Product Name</th>
    <th>Product quantity</th>
    <th>Delivery date</th>
    </tr>";
    while($row = mysqli_fetch_array($result))
      {
          echo "<tr>
          <td> $row[name]</td>
          <td> $row[quantity]</td>
          <td>$row[date]</td>
          </tr>";

      }    
      echo "Product selected :".mysqli_affected_rows($conn);
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
    <form action="read.php" method="post">
    <label>Product name :  <input type="text" name="product"/></label>
<br>
    <input type="submit" name="submit" value="Read" >
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