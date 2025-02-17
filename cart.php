<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="cart text-center">
            <h2>GIỎ HÀNG</h2>
        </div>
        <table class="table">
            <thead class="table-dark">
                <tr>
                    <th>Tên hàng</th>
                    <th>Số lượng</th>
                    <th>Đơn giá</th>
                    <th>Thành tiền</th>
                </tr>
            </thead>
            <tbody>
                <?php
                session_start();
                if (empty($_SESSION['cart'])) {
                ?>
                    <tr>
                        <td colspan="4">Không có sản phẩm nào trong giỏ hàng</td>
                    </tr>
                    <?php

                } else {

                    $cart = $_SESSION['cart'];
                    $total = 0;
                    foreach ($cart as $key => $row) {
                        $total += $row['quantity'] * $row['price'];
                    ?>
                        <tr>
                            <td><?= $row['name'] ?></td>
                            <td><?= $row['quantity'] ?></td>
                            <td><?= $row['price'] ?></td>
                            <td><?= $row['quantity'] * $row['price'] ?>VND </td>
                        </tr>
                    <?php

                    }
                    ?>
                    <tr>
                        <td colspan="3" align="right"><b>Tổng tiền</b></td>
                        <td><?= $total ?>VND</td>
                    </tr>
                <?php } ?>
                <tr>
                    <td><a href="checkout.php" class="btn btn-primary">Đặt hàng</a></td>
                </tr>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>

</html>