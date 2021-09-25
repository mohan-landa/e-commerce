<?php
require '../includes/common.php';
if(isset($_SESSION['email'])){
    header('location: index.php');
}
echo 'An email was sent to you with a link to change your password';
?>