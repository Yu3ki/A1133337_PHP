<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Shopping Cart</title>
</head>
<body>

<h2>Your Shopping Cart</h2>

<table border="1">
<tr>
    <th>Action</th>
    <th>ID</th>
    <th>Product</th>
    <th>Price</th>
    <th>Qty</th>
    <th>Total</th>
</tr>

<?php
$total = 0;

if (isset($_COOKIE['cart'])) {

    foreach ($_COOKIE['cart'] as $id => $item) {

        $subtotal = $item['price'] * $item['qty'];
        $total += $subtotal;

        echo "<tr>";
        echo "<td><a href='delete.php?id=$id'>Delete</a></td>";
        echo "<td>".$item['id']."</td>";
        echo "<td>".$item['name']."</td>";
        echo "<td>".$item['price']."</td>";
        echo "<td>".$item['qty']."</td>";
        echo "<td>".$subtotal."</td>";
        echo "</tr>";
    }

} else {
    echo "<tr><td colspan='6'>Cart is empty</td></tr>";
}
?>

<tr>
    <td colspan="6" align="right">
        Total Price = <?php echo $total; ?>
    </td>
</tr>

</table>

<br>
<a href="catalog.php">Back to Catalog</a>

</body>
</html>