<?php
require 'includes/common.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Lifestyle Store Products</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="css/products.css" type="text/css">
        <link rel="stylesheet" href="css/style.css" type="text/css">
    </head>
    <body>
        
        <?php
        include 'includes/header.php';
        include 'includes/check-if-added.php';
        ?>
        
        <div class="products-content" style="margin-bottom:10px; margin-top:100px; margin-left: 20px; margin-right: 20px;">
            <div class="container">
                <div class="row">
                    <div class="jumbotron">
                        <h1>Welcome to our Lifestyle Store!</h1>
                        <p>We have the best cameras, watches and shirts for you. No need to hunt around, we have all in one place.</p>
                    </div>
                    
                    <div class="thumbnail col-xs-6 col-md-4">
                    <div>
                        <center style="padding:5px;">
                        <img src="img/9.jpg" class="img-thumbnail" style="padding: 0px;">
                        <h3>Item 1</h3>
                        <p>Price: Rs.1000</p>
                        <?php if (!isset($_SESSION['email'])) { ?> 
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                            <?php } else { 
                            if (check_if_added_to_cart(1)) { 
                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; } else
                            { ?> <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> <?php } } 
                            ?>
                        </center>
                    </div>
                </div>
                
                <div class="thumbnail col-xs-6 col-md-4">
                    <div>
                        <center style="padding:5px;">
                        <img src="img/2.jpg" class="img-thumbnail" style="padding: 0px;">
                        <h3>Item 2</h3>
                        <p>Price: Rs.999</p>
                        <?php if (!isset($_SESSION['email'])) { ?> 
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                            <?php } else { 
                            if (check_if_added_to_cart(2)) { 
                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; } else
                            { ?> <a href="cart-add.php?id=2" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> <?php } } 
                            ?>
                        </center>
                    </div>
                </div>
                    
                <div class="thumbnail col-xs-6 col-md-4">
                    <div>
                        <center style="padding:5px;">
                        <img src="img/3.jpg" class="img-thumbnail" style="padding:0px;">
                        <h3>Item 3</h3>
                        <p>Price: Rs.999</p>
                        <?php if (!isset($_SESSION['email'])) { ?> 
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                            <?php } else { 
                            if (check_if_added_to_cart(3)) { 
                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; } else
                            { ?> <a href="cart-add.php?id=3" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> <?php } } 
                            ?>
                        </center>
                    </div>
                </div>
                    
                <div class="thumbnail col-xs-6 col-md-4">
                    <div>
                        <center style="padding:5px;">
                        <img src="img/4.jpg" class="img-thumbnail" style="padding: 0px;">
                        <h3>Item 4</h3>
                        <p>Price: Rs.999</p>
                        <?php if (!isset($_SESSION['email'])) { ?> 
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                            <?php } else { 
                            if (check_if_added_to_cart(4)) { 
                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; } else
                            { ?> <a href="cart-add.php?id=4" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> <?php } } 
                            ?>
                        </center>
                    </div>
                </div>
            <div class="thumbnail col-xs-6 col-md-4">
                    <div>
                        <center style="padding:5px;">
                        <img src="img/5.jpg" class="img-thumbnail" style="padding: 0px;">
                        <h3>Item 5</h3>
                        <p>Price: Rs.999</p>
                        <?php if (!isset($_SESSION['email'])) { ?> 
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                            <?php } else { 
                            if (check_if_added_to_cart(5)) { 
                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; } else
                            { ?> <a href="cart-add.php?id=5" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> <?php } } 
                            ?>
                        </center>
                    </div>
                </div>
            <div class="thumbnail col-xs-6 col-md-4">
                    <div>
                        <center style="padding:5px;">
                        <img src="img/6.jpg" class="img-thumbnail" style="padding: 0px;">
                        <h3>Item 6</h3>
                        <p>Price: Rs.999</p>
                        <?php if (!isset($_SESSION['email'])) { ?> 
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                            <?php } else { 
                            if (check_if_added_to_cart(6)) { 
                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; } else
                            { ?> <a href="cart-add.php?id=6" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> <?php } } 
                            ?>
                        </center>
                    </div>
                </div>
            <div class="thumbnail col-xs-6 col-md-4">
                    <div>
                        <center style="padding:5px;">
                        <img src="img/7.jpg" class="img-thumbnail" style="padding: 0px;">
                        <h3>Item 7</h3>
                        <p>Price: Rs.999</p>
                        <?php if (!isset($_SESSION['email'])) { ?> 
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                            <?php } else { 
                            if (check_if_added_to_cart(7)) { 
                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; } else
                            { ?> <a href="cart-add.php?id=7" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> <?php } } 
                            ?>
                        </center>
                    </div>
                </div>
            <div class="thumbnail col-xs-6 col-md-4">
                    <div>
                        <center style="padding:5px;">
                        <img src="img/8.jpg" class="img-thumbnail" style="padding: 0px;">
                        <h3>Item 8</h3>
                        <p>Price: Rs.999</p>
                        <?php if (!isset($_SESSION['email'])) { ?> 
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                            <?php } else { 
                            if (check_if_added_to_cart(8)) { 
                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; } else
                            { ?> <a href="cart-add.php?id=8" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> <?php } } 
                            ?>
                        </center>
                    </div>
                </div>
            <div class="thumbnail col-xs-6 col-md-4">
                    <div>
                        <center style="padding:5px;">
                        <img src="img/1.jpg" class="img-thumbnail" style="padding: 0px;">
                        <h3>Item 9</h3>
                        <p>Price: Rs.999</p>
                        <?php if (!isset($_SESSION['email'])) { ?> 
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                            <?php } else { 
                            if (check_if_added_to_cart(9)) { 
                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; } else
                            { ?> <a href="cart-add.php?id=9" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> <?php } } 
                            ?>
                        </center>
                    </div>
                </div>
            <div class="thumbnail col-xs-6 col-md-4">
                    <div>
                        <center style="padding:5px;">
                        <img src="img/10.jpg" class="img-thumbnail" style="padding: 0px;">
                        <h3>Item 10</h3>
                        <p>Price: Rs.999</p>
                        <?php if (!isset($_SESSION['email'])) { ?> 
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                            <?php } else { 
                            if (check_if_added_to_cart(10)) { 
                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; } else
                            { ?> <a href="cart-add.php?id=10" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> <?php } } 
                            ?>
                        </center>
                    </div>
                </div>
            <div class="thumbnail col-xs-6 col-md-4">
                    <div>
                        <center style="padding:5px;">
                        <img src="img/11.jpg" class="img-thumbnail" style="padding: 0px;">
                        <h3>Item 11</h3>
                        <p>Price: Rs.999</p>
                        <?php if (!isset($_SESSION['email'])) { ?> 
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                            <?php } else { 
                            if (check_if_added_to_cart(11)) { 
                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; } else
                            { ?> <a href="cart-add.php?id=11" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> <?php } } 
                            ?>
                        </center>
                    </div>
                </div>
            <div class="thumbnail col-xs-6 col-md-4">
                    <div>
                        <center style="padding:5px;">
                        <img src="img/12.jpg" class="img-thumbnail" style="padding: 0px;">
                        <h3>Item 12</h3>
                        <p>Price: Rs.999</p>
                        <?php if (!isset($_SESSION['email'])) { ?> 
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                            <?php } else { 
                            if (check_if_added_to_cart(12)) { 
                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; } else
                            { ?> <a href="cart-add.php?id=12" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> <?php } } 
                            ?>
                        </center>
                    </div>
                </div>
                    
                </div>
            </div>
        </div>
        
        <?php
        require 'includes/footer.php';
        ?>
        
    </body>
</html>
