<?php
require 'includes/common.php';
if(!isset($_SESSION['email'])){
<<<<<<< HEAD
    header('location: index.php');
}
$user_id = $_SESSION['id'];
$s_q = "SELECT * FROM users_items WHERE user_id='$user_id'";
$s_q_r = mysqli_query($con, $s_q) or die(mysqli_error($con));
$nr = mysqli_num_rows($s_q_r);
=======
    header('location : login.php');
}
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
                    
                    <div class="col-xs-1 col-md-2">
                        
                    </div>
                    
                    <div class="col-xs-10 col-md-8">
                        <table class="table table-striped table-hover">
                            <tbody>
                                <tr>
                                    <th>Item Number</th>
                                    <th>Price</th>
                                </tr>
                                <?php
                                $total_price = 0;
                                for($i=1;$i<=$nr;$i++){
                                    $row = mysqli_fetch_array($s_q_r);
                                    $item_id = $row[2];
                                    $c = mysqli_connect("localhost","root","","iproject") or die(mysqli_error($c));
                                    $q = "SELECT * FROM items WHERE i_id='$item_id'";
                                    $q_r = mysqli_query($con, $q) or die(mysqli_error($c));
                                    $r = mysqli_fetch_array($q_r);
                                    $price = $r[2];
                                    $total_price += $price;
                                ?>
                                <tr>
                                    <td>Mobile <?php echo $item_id;?></td>
                                    <td>Rs. <?php echo $price;?></td>
                                </tr>
                                <?php
                                }
                                if($nr>0){
                                ?>
                                <tr>
                                    <td><a href="success.php" class="btn btn-primary">Purchase Now</a></td>
                                    <td>Total Price : Rs.<?php echo $total_price; ?></td>
                                </tr>
                                <?php
                                }else{
                                ?>
                                <tr>
                                    <td><p>No items added to cart add now by <a href="index.php">clicking here</a></p></td>
                                </tr>
                                <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                    
                    <div class="col-xs-1 col-md-2">
                        
                    </div>
                    
                </div>
            </div>
        </div>
    </body>
</html>
=======
        <title>Cart : Lifestyle Store</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="css/cart.css" type="text/css">
    </head>
    <body>
        
        <?php
        require 'includes/header.php';
        $user_id = $_SESSION['user_id'];
        $con = mysqli_connect("localhost","root","","ass4") or die(mysqli_error($con));
        $s_q = "SELECT * FROM user_items WHERE user_id='$user_id'";
        $s_q_r = mysqli_query($con, $s_q) or die(mysqli_error($con));
        if(mysqli_num_rows($s_q_r)>0){
            
            $price = 0;
            $item_number = "";
            $numrows = mysqli_num_rows($s_q_r);
            for($i=0;$i<$numrows;$i++){
                $row = mysqli_fetch_array($s_q_r);
                $item_id = $row['item_id'];
                if($i==$numrows-1){
                    $item_number = $item_number.$item_id;
                }else{
                    $item_number = $item_number.$item_id.", ";
                }
                if($item_id==1){
                    $price += 1000;
                }else{
                    $price += 999;
                }
                /*
                $sq = "SELECT * FROM items WHERE item_id=`$item_id`";
                $sqr = mysqli_query($con,$sq) or die(mysqli_error($con));
                if(mysqli_num_rows($sqr)>0){
                    $row1 = mysqli_fetch_array($sqr);
                    $price += $row1['item_price'];
                }
                */
            }
            
        ?>
        <div class="cart-content" style="padding-top: 100px;">
            <div class="col-xs-1 col-md-3"></div>
            <div class="col-xs-10 col-md-6">
            <table class="table table-responsive table-bordered">
                <tbody>
                    <tr>
                        <th>Item Number</th>
                        <th>Item Name</th>
                        <th>Price</th>
                        <th></th>
                    </tr>
                    <tr>
                        <th>
                            <?php
                            echo $item_number;
                            ?>
                        </th>
                        <th>
                            <?php
                            echo $item_number;
                            ?>
                        </th>
                        <th>
                            <?php
                            echo $price;
                            ?>
                        </th>
                        <th></th>
                    </tr>
                    <tr>
                        <th></th>
                        <th>Total</th>
                        <th>Rs.<?php
                        echo $price;
                        ?></th>
                        <th><button class="btn btn-primary" style="color:#ffffff;"><a href="success.php" style="color:#ffffff;">Confirm Order</a></button></th>
                    </tr>
                </tbody>
            </table>
            </div>
            <div class="col-xs-1 col-md-3"></div>
            <br><br><br>
        </div>
        <?php
        }else{
        ?>
        <br><br><br>
        <h1 style="">There are no items in your cart</h1>
        <br><br><br>
        <?php
        }
        ?>
        
        
        
        <div class="cart-footer" style="bottom:0; position: absolute; width: 100%; padding:10px 0; bottom:0; color: #9d9d9d; background-color: #000000;">
            <footer>
                <div class="container">
                    <div class="row">
                    <center>
                        <div>
                        <p>Copyright © Lifestyle Store. All Rights Reserved|Contact Us: +91 90000 00000</p>
                        </div>
                    </center>
                    </div>
                </div>
            </footer>
        </div>
        
    </body>
</html>
>>>>>>> eee2b71 (E-Commerce app by using html,css,bootstrap,php and mysqli)
