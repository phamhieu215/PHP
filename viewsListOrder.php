<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách đơn hàng</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="cart text-left">
            <a href="index.php" class="btn btn-primary my-3">Quay lại trang chủ</a>
        </div>
        <table class="table">
            <thead class="table-dark">
                <tr>
                    <th>Mã đơn hàng</th>
                    <th>Ngày đặt</th>
                    <th>Tổng tiền</th>
                    <th>Hành động</th>

                </tr>
            </thead>
            <tbody>
                <?php
                include_once("connection.php");
                $sql = "SELECT * FROM tblorder";
                $rs = $conn->query($sql);
                if ($rs->num_rows > 0) {
                    while ($row = $rs->fetch_assoc()) {
                ?>
                        <tr>
                            <td><?= $row['id'] ?></td>
                            <td><?= $row['orderTime'] ?></td>
                            <td><?= $row['total'] ?></td>
                            <td>
                                <a href="orderDetail.php?id=<?= $row['id'] ?>" class="btn btn-primary">Xem chi tiết</a>
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