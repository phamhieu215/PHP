<?php
include_once("config.php");
$conn = new mysqli($url, $uname,$upass,$dbname);
if($conn->connect_error) {
    die("connect fail!");
}