<?php
require '../includes/common.php';
if(!isset($_SESSION['email'])){
    header('location: ../index.php');
}
$user_id = $_SESSION['id'];
$item_id = $_GET['id'];
$s_q = "INSERT INTO users_items (user_id,item_id,status) values ('$user_id','$item_id','Added to cart')";
$s_q_r = mysqli_query($con, $s_q) or die(mysqli_error($con));
header('location: ../index.php');
?>