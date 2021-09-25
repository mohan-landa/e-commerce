<?php
require 'includes/common.php';
if(!isset($_SESSION['email'])){
    header('location: index.php');
}
<<<<<<< HEAD
$user_id = $_SESSION['id'];
$s_q = "DELETE FROM users_items WHERE user_id='$user_id'";
$s_q_r = mysqli_query($con, $s_q);
=======
>>>>>>> eee2b71 (E-Commerce app by using html,css,bootstrap,php and mysqli)
?>

<!DOCTYPE html>
<html>
    <head>
<<<<<<< HEAD
        <meta charset="UTF-8">
        <title>E- Store</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>
    <body>
        <?php
        include 'includes/header.php'
        ?>
        
        <div class="content" style="margin-top: 60px;">
            <div class="container">
                <div class="row">
                    
                    <div class="col-xs-1 col-md-3">
                        
                    </div>
                    
                    <div class="col-xs-10 col-md-6">
                        <h3>Thank you for ordering from E- Store. The order shall be delivered to you shortly</h3>
                        <h3>Order some more mobiles <a href="index.php">here</a>.</h3>
                    </div>
                    
                    <div class="col-xs-1 col-md-3">
                        
                    </div>
                    
                </div>
            </div>
=======
        <title>Success : Lifestyle Store</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="css/success.css" type="text/css">
    </head>
    <body>
        <div>
        <center>
            <div class="jumbotron">
                <center>
                    <h3>Your order is confirmed. Thank you for shopping with us. <a href="products.php"><u>Click here</u></a> to purchase any other item.</h3>
                </center>
            </div>
        </center>
>>>>>>> eee2b71 (E-Commerce app by using html,css,bootstrap,php and mysqli)
        </div>
    </body>
</html>
