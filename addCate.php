<?php 
$name = $_POST['name'];
$desc = $_POST['desc'];
include_once("connection.php");
$sql = "INSERT INTO tblcategory (name, description) VALUES ('$name', '$desc')";

$conn->query($sql);

header("location: category.php");
