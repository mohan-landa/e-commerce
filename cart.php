<?php
require 'includes/common.php';
if(!isset($_SESSION['email'])){
    header('location: index.php');
}
$user_id = $_SESSION['id'];
$s_q = "SELECT * FROM users_items WHERE user_id='$user_id'";
$s_q_r = mysqli_query($con, $s_q) or die(mysqli_error($con));
$nr = mysqli_num_rows($s_q_r);
?>

<!DOCTYPE html>
<html>
    <head>
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
