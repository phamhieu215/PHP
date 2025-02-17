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
        <div class="cart text-right mx-3 my-3">
            <a href="cart.php" class="btn btn-primary">Giỏ hàng</a>
        </div>
        <div class="cart text-right mx-3 my-3">
            <a href="viewsListOrder.php" class="btn btn-primary ">Đơn hàng đã đặt</a>
        </div>
        <table class="table">
            <thead class="table-dark">
                <tr>
                    <th>Mã hàng</th>
                    <th>Tên hàng</th>
                    <th>Số lượng</th>
                    <th>Đơn giá</th>
                    <th>Hình ảnh</th>
                    <th>Chọn mua</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include_once("connection.php");
                $sql = "SELECT * FROM tblproduct";
                $rs = $conn->query($sql);
                if ($rs->num_rows > 0) {
                    while ($row = $rs->fetch_assoc()) {
                ?>
                        <tr>
                            <td><?= $row['id'] ?></td>
                            <td><?= $row['name'] ?></td>
                            <td><?= $row['quantity'] ?></td>
                            <td><?= $row['price'] ?></td>
                            <td>
                                <img src="<?= $row['image'] ?>" alt="" width="50px">
                            </td>
                            <td>
                                <a href="addCart.php?id=<?= $row['id'] ?>" class="btn btn-warning">Mua</a>
                            </td>
                        </tr>
                <?php
                    }
                }
                ?>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>

</html>