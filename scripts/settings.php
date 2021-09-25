<?php
require '../includes/common.php';
$email = $_SESSION['email'];
$s_q = "SELECT * FROM users WHERE email='$email'";
$s_q_r = mysqli_query($con, $s_q) or die(mysqli_error($con));

$op = mysqli_real_escape_string($con, $_POST['op']);
if(strlen($op)<6){
    echo "Old password must contain atleast 6 characters";
    exit;
}
$op = md5($op);
$row = mysqli_fetch_row($s_q_r);
if($row[3]!=$op){
    echo "Enter your correct old password";
    exit;
}

$np = mysqli_real_escape_string($con, $_POST['np']);
if(strlen($np)<6){
    echo "New password must contain atleast 6 characters";
    exit;
}
$np = md5($np);
$rnp = mysqli_real_escape_string($con, $_POST['rnp']);
if(strlen($rnp)<6){
    echo "Re-typed new password must contain atleast 6 characters";
    exit;
}
$rnp = md5($rnp);

if($np!=$rnp){
    echo "New password and Re-type new password are not same";
    exit;
}

$s_q = "UPDATE users SET password='$np' WHERE email='$email'";
$s_q_r = mysqli_query($con, $s_q) or die(mysqli_error($con));

header('location: ../home.php');


?>