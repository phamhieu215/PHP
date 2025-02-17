<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm hàng</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="title text-center">
        <h2 >THÊM  HÀNG</h2>
        </div>
       <form action="addProduct.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="name">Tên hàng</label>
                <input type="text" id="name" name="name" class="form-control">
            </div>
            <div class="form-group">
                <label for="name">Danh mục hàng</label>
                <select name="categoryId" id="" class="form-control">
                    <option value="">---Chọn danh mục hàng---</option>
                    <?php
                    include_once("connection.php");
                    $sql = "SELECT * FROM tblcategory";
                    $rs = $conn->query($sql);
                    if($rs->num_rows > 0) {
                        while($row = $rs->fetch_assoc()) {
                            
                    ?>
                       <option value="<?=$row['id']?>"><?=$row['name']?></option>
                    <?php
                        }
                    }
                    ?>
                </select>
            </div>
            <div class="form-group">
                <label for="desc">Số lượng</label>
                <input type="text" id="quantity" name="quantity" class="form-control">
            </div>
            <div class="form-group">
                <label for="desc">Đơn giá</label>
                <input type="text" id="price" name="price" class="form-control">
            </div>
            <div class="form-group">
                <label for="desc">Hình ảnh</label>
                <input type="file" id="image" name="image" class="form-control">
            </div>
            <button type="submit" class= "btn btn-primary">Thêm hàng</button>
       </form>

       <div class="list-cate">
       <table class="table">
            <thead class="table-dark">
                <tr>
                    <th>Mã hàng</th>
                    <th>Tên hàng</th>
                    <th>Giá</th>
                    <th>Số lượng</th>
                    <th>Hình ảnh</th>
                    <th>Hành động</th>
                </tr>
            </thead> 
            <tbody>
                <?php
                include_once("connection.php");
                $sql = "SELECT * FROM tblproduct";
                $rs = $conn->query($sql);
                if($rs->num_rows > 0) {
                    while($row = $rs->fetch_assoc()) {
                        
                ?>
                    <tr>
                        <td><?=$row['id']?></td>
                        <td><?=$row['name']?></td>
                        <td><?=$row['price']?></td>
                        <td><?=$row['quantity']?></td>
                        <td>
                            <img src="<?=$row['image']?>" alt="" width ="50px">
                        </td>
                        <td>
                            <a href="editProduct.php?id=<?=$row['id']?>" class="btn btn-warning">Sửa</a>
                            <a href="deleteProduct.php?id=<?=$row['id']?>" class="btn btn-danger">Xóa</a>
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