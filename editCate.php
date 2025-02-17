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
        <h2 >SỬA DANH MỤC HÀNG</h2>
        </div>
        <?php
        $id = $_GET['id'];
        include_once("connection.php");
        $sql = "SELECT * FROM tblcategory WHERE id = $id";
        $rs = $conn->query($sql);
        $row = $rs->fetch_assoc();
        ?>
       <form action="updateCate.php" method="post">
                <input type="hidden" id="id" name="id" value = "<?=$row['id']?>">
        
            <div class="form-group">
                <label for="name">Tên hàng</label>
                <input type="text" id="name" name="name" class="form-control" value = "<?=$row['name'] ?>">
            </div>
            <div class="form-group">
                <label for="desc">Mô tả</label>
                <input type="text" id="desc" name="desc" class="form-control" value= "<?=$row['description'] ?>">
            </div>
            <button type="submit" class= "btn btn-primary">Sửa hàng</button>
       </form>
       </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>
</html>