<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Product Catalog</title>
</head>
<body>

<h2>Product List</h2>

<form action="savecart.php" method="post">

    Select Product:
    <select name="product">
        <option value="P001,Laptop,27000">Laptop - 27000</option>
        <option value="P002,Smartphone,15000">Smartphone - 15000</option>
        <option value="P003,Tablet,12000">Tablet - 12000</option>
    </select>

    <br><br>

    Quantity:
    <input type="number" name="qty" value="1" min="1">

    <br><br>

    <input type="submit" value="Add to Cart">

</form>

<br>
<a href="shoppingcart.php">View Cart</a>

</body>
</html>