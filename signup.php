<?php
require 'includes/common.php';
if(isset($_SESSION['email'])){
<<<<<<< HEAD
    header('location: index.php');
=======
    header('location : products.php');
>>>>>>> eee2b71 (E-Commerce app by using html,css,bootstrap,php and mysqli)
}
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
                    
                    <div class="col-xs-12 col-md-6">
                        <center>
                            <div>
                                <img class="img-resposive" src="img/signup.png" alt="Sign Up"/>
                            </div>
                        </center>
                    </div>
                    
                    <div class="col-xs-12 col-md-6">
                        <form method="post" action="scripts/signup.php">
                            <div class="form-group">
                                <h3>SIGN UP</h3>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Name" name="name"/>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Email" name="email"/>
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="Password" name="password"/>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Contact" name="contact"/>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="City" name="city"/>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Address" name="address"/>
                                </div>
                                <div class="form-group" style="float:right;">
                                    <button class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    
=======
        <title>Sign Up : Lifestyle Store</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="css/signup.css" type="text/css">
        <link rel="stylesheet" href="css/style.css" type="text/css">
    </head>
    <body>
        
        <?php
        include 'includes/header.php';
        ?>
       
        <div class="signup-content" style="width: 100%; margin-top:70px;">
            <div class="container">
                <div class="row">
                    <div class="col-xs-3">
                        
                    </div>
                    <div class="col-xs-6">
                        <form method="post" action="signup_script.php">
                            <div class="form-group">
                                <h1>SIGN UP</h1>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Name" name="name">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="Email" name="email">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Password" name="password">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Contact">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="City">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Address">
                            </div>
                            <div class="form-group">
                                <button class="btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                    <div class="col-xs-3">
                        
                    </div>
>>>>>>> eee2b71 (E-Commerce app by using html,css,bootstrap,php and mysqli)
                </div>
            </div>
        </div>
        
<<<<<<< HEAD
        <?php
        include 'includes/footer.php';
        ?>
=======
        
        <?php
        include 'includes/footer.php';
        ?>
        
>>>>>>> eee2b71 (E-Commerce app by using html,css,bootstrap,php and mysqli)
    </body>
</html>
