<?php
require '../includes/common.php';
if(isset($_SESSION['email'])){
    header('location: index.php');
}

$name = mysqli_real_escape_string($con, $_POST['name']);
$nl = strlen($name);
if($nl<5){
    echo "Please enter your real name";
    exit;
}

$email = mysqli_real_escape_string($con, $_POST['email']);
$s_q = "SELECT * FROM users WHERE email='$email'";
$s_q_r = mysqli_query($con, $s_q) or die(mysqli_error($con));
if(mysqli_num_rows($s_q_r)>0){
    echo "This email is already registered. Please use another email or login with this email";
    exit;
}

$password = mysqli_real_escape_string($con, $_POST['password']);
$pl = strlen($password);
if($pl<6){
    echo "Password must contain atleast 6 characters";
    exit;
}
$password = md5($password);

$contact = mysqli_real_escape_string($con, $_POST['contact']);
$city = mysqli_real_escape_string($con, $_POST['city']);
$address = mysqli_real_escape_string($con, $_POST['address']);

$s_q = "INSERT INTO users (name,email,password,contact,city,address) values ('$name','$email','$password','$contact','$city','$address')";
$s_q_r = mysqli_query($con, $s_q) or die(mysqli_error($con));
$user_id = mysqli_insert_id($con);
$_SESSION['id'] = $user_id;
$_SESSION['email'] = $email;
header('location: ../home.php');

?>