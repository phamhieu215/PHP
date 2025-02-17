<?php 
$id = $_POST['id'];
$name = $_POST['name'];
$desc = $_POST['desc'];
include_once("connection.php");
$sql = "UPDATE tblcategory SET name = '$name', description = '$desc' WHERE id = $id ";

$conn->query($sql);

header("location: category.php");
