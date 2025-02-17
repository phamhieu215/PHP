<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh mục sản phẩm</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="title text-center">
            <h2>THÊM DANH MỤC HÀNG</h2>
        </div>
        <form action="addCate.php" method="post">
            <div class="form-group">
                <label for="name">Tên danh mục hàng</label>
                <input type="text" id="name" name="name" class="form-control">
            </div>
            <div class="form-group">
                <label for="desc">Mô tả</label>
                <input type="text" id="desc" name="desc" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Thêm danh mục hàng</button>
        </form>

        <div class="list-cate">
            <table class="table">
                <thead class="table-dark">
                    <tr>
                        <th>Mã danh mục</th>
                        <th>Tên danh mục</th>
                        <th>Mô tả</th>
                        <th>Hành động</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include_once("connection.php");
                    $sql = "SELECT * FROM tblcategory";
                    $rs = $conn->query($sql);
                    if ($rs->num_rows > 0) {
                        while ($row = $rs->fetch_assoc()) {

                    ?>
                            <tr>
                                <td><?= $row['id'] ?></td>
                                <td><?= $row['name'] ?></td>
                                <td><?= $row['description'] ?></td>
                                <td>
                                    <a href="editCate.php?id=<?= $row['id'] ?>" class="btn btn-warning">Sửa</a>
                                    <a href="deleteCate.php?id=<?= $row['id'] ?>" class="btn btn-danger">Xóa</a>
                                </td>
                            </tr>
                    <?php
                        }
                    }
                    ?>
                </tbody>

            </table>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>

</html>