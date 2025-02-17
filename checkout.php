<?php
session_start();
if (!isset($_SESSION['cart'])) {
    echo "Khong co gio hang nào!";
    echo "<a href='index.php'> Quay lại trang chủ </a>";
    return;
} else {
    $cart = $_SESSION['cart'];
    // Lưu vào bảng tblorder
    $total = 0;
    foreach ($cart as $key => $value) {
        $total += (int)$value['price'] * (int)$value['quantity'];
    }
    $orderTime = date("Y-m-d");
    include_once("connection.php");

    $sql = "INSERT INTO tblorder (orderTime, total) VALUES ('$orderTime', $total)";
    $rs = $conn->query($sql);

    $last_id = $conn->insert_id; // Lấy ID của bản ghi vừa được chèn
    // lưu vào bảng tblorderdetail
    $lines = "";
    foreach ($cart as $key => $value) {
        // $lines .= $no  . "\t" . $key . "\t" . $value['name'] . "\t" . $value['price'] . "\t" . $value['quantity'] . "\n";
        $name = $value['name'];
        $price = $value['price'];
        $quantity = $value['quantity'];
        $sql = "INSERT INTO tblorderdetail (name, price, quantity, order_id) VALUES ('$name', '$price', '$quantity', '$last_id')";
        $conn->query($sql);
    }
    unset($_SESSION['cart']);
    header("location: index.php");
}
