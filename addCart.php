<?php
$id = $_GET['id'];
session_start();

$cart = (!$_SESSION['cart']) ? array() : $_SESSION['cart'];

include_once("connection.php");
$sql = "SELECT * FROM tblproduct WHERE id = $id";

$rs = $conn->query($sql);
$item = $rs->fetch_assoc();

if(!$cart[$id] ) {
    $cart[$id] = array("name" => $item['name'], "quantity" => 1, "price" => $item["price"] );
}
else {
    $cart[$id]["quantity"]++;
}
$_SESSION['cart']  = $cart;
header("location: index.php");