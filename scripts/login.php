<?php
require '../includes/common.php';
if(isset($_SESSION['email'])){
    header('location: index.php');
}

$email = mysqli_real_escape_string($con, $_POST['email']);
$s_q = "SELECT * FROM users WHERE email='$email'";
$s_q_r = mysqli_query($con, $s_q) or die(mysqli_error($con));
if(mysqli_num_rows($s_q_r)==0){
    echo "This email is not registered. Please register with this email to login";
    exit;
}

$password = mysqli_real_escape_string($con, $_POST['password']);
$pl = strlen($password);
if($pl<6){
    echo "Password must contain atleast 6 characters";
    exit;
}
$password = md5($password);
$row = mysqli_fetch_row($s_q_r);
if($row[3]!=$password){
    echo "Incorrect Password";
    exit;
}

$_SESSION['id'] = $row[0];
$_SESSION['email'] = $row[2];
header('location: ../home.php');

?>
