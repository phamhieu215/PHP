<?php 
$name = $_POST['name'];
$price = $_POST['price'];
$quantity = $_POST['quantity'];
$categoryId = $_POST['categoryId'];
//upload file
$image = "";
$target_dir = "image/"; //chỉ định thư mục nơi tệp sẽ được đặt

$target_file = $target_dir. basename($_FILES['image']['name']); // chỉ định đường dẫn của tệp sẽ được tải lên

if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
    $image = $target_file;
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
include_once("connection.php");
$sql = "INSERT INTO tblproduct (name, price, quantity, categoryId, image) VALUES ('$name', '$price', '$quantity', '$categoryId', '$image')";

$conn->query($sql);

header("location: product.php");
