<?php

require 'includes/common.php';

$con = mysqli_connect("localhost","root","","ass4") or die(mysqli_error($con));

$name = mysqli_real_escape_string($con, $_POST['name']);
$email = mysqli_real_escape_string($con, $_POST['email']);
$password = mysqli_real_escape_string($con, $_POST['password']);
$password = md5($password);

$select_query = "select id FROM users WHERE email='$email'";
$select_query_result = mysqli_query($con, $select_query) or die(mysqli_error($con));

$rows_cnt = mysqli_num_rows($select_query_result);
if($rows_cnt>0){
    echo "This email is already registered";
}else{
    $select_query = "insert INTO users (name,email,password) values('$name','$email','$password')";
    $select_query_result = mysqli_query($con, $select_query) or die(mysqli_error($con));
    $user_id = mysqli_insert_id($con);
    $_SESSION['user_id'] = $user_id;
    $_SESSION['email'] = $email;
    header('location: products.php');
}

?>