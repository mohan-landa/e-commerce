<?php
require 'includes/common.php';
session_start();

$item_id = $_GET['id'];
$user_id = $_SESSION['user_id'];

$con = mysqli_connect("localhost","root","","ass4");

$select_query = "INSERT INTO user_items(user_id, item_id, status) VALUES('$user_id', '$item_id', 'Added to cart')";
$select_query_result = mysqli_query($con, $select_query) or die(mysqli_error($con));
header('location: products.php');

?>