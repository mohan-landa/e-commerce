<?php

require 'includes/common.php';

$con = mysqli_connect("localhost","root","","ass4") or die(mysqli_error($con));

$email = mysqli_real_escape_string($con, $_POST['email']);
$password = mysqli_real_escape_string($con, $_POST['password']);

$password = md5($password);

$select_query = "select id,email FROM users WHERE email='$email' && password='$password'";

$select_query_result = mysqli_query($con, $select_query) or die(mysqli_error($con));

$rows_cnt = mysqli_num_rows($select_query_result);
if($rows_cnt==0){
    header('location : login.php');
}else{
    $row = mysqli_fetch_array($select_query_result);
    $_SESSION['user_id'] = $row['id'];
    $_SESSION['email'] = $row['email'];
    header('location: products.php');
}

?>