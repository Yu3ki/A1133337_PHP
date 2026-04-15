<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $item = explode(",", $_POST["product"]);

    $id = $item[0];
    $name = $item[1];
    $price = $item[2];
    $qty = $_POST["qty"];

    // if already exist, add quantity
    if (isset($_COOKIE['cart'][$id])) {
        $qty = $qty + $_COOKIE['cart'][$id]['qty'];
    }

    setcookie("cart[$id][id]", $id, time() + 3600);
    setcookie("cart[$id][name]", $name, time() + 3600);
    setcookie("cart[$id][price]", $price, time() + 3600);
    setcookie("cart[$id][qty]", $qty, time() + 3600);
}

header("Location: shoppingcart.php");
exit;
?>