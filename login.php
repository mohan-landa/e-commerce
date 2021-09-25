<?php
require 'includes/common.php';
<<<<<<< HEAD
if(isset($_SESSION['email'])){
    header('location: index.php');
}
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
                        <panel class="">
                            <div class="panel-body">
                                <form method="post" action="scripts/login.php">
                                    <h4>LOGIN</h4><br>
                                    <h5>Don't have an account? <a href="signup.php">Register</a></h5>
                                    <div class="form-group">
                                        <input type="email" placeholder="Email" class="form-control" name="email"/>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" placeholder="Password" class="form-control" name="password"/>
                                    </div>
                                    <button class="btn btn-primary">Login</button>
                                </form>
                            </div>
                            <div class="panel-footer">
                                <a href="scripts/forgot_password.php">Forgot Password?</a>
                            </div>
                        </panel>
                    </div>
                    <div class="col-xs-1 col-md-3">
                        
=======
        <title>Login : Lifestyle Store</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="css/login.css" type="text/css">
        <link rel="stylesheet" href="css/style.css" type="text/css">
    </head>
    <body>
        
        <?php
        require 'includes/header.php';
        ?>
       
        <div class="mohan-content" style="margin-top: 60px;">
            <div class="container">
                <div class="row">
                    <div class="panel panel-primary">
                    <div class="panel-heading">
                        <a style="color: #ffffff;">LOGIN</a>
                    </div>
                    <div class="panel-body">
                        <form method="post" action="login_submit.php">
                            <div class="form-group">
                                <p class="text-warning"><i>Login to make a purchase</i></p>
                            </div>
                            <div class="form-group">
                                <input class="form-control" type="email" placeholder="Email" name="email">
                            </div>
                            <div class="form-group">
                                <input class="form-control" type="password" placeholder="Password" name="password">
                            </div>
                            <div class="form-group">
                                <button class="btn btn-primary">Login</button>
                            </div>
                        </form>
                    </div>
                    <div class="panel-footer">
                        <p>Don't have an account?<a href="signup.php"> Register</a></p>
                    </div>
>>>>>>> eee2b71 (E-Commerce app by using html,css,bootstrap,php and mysqli)
                    </div>
                </div>
            </div>
        </div>
<<<<<<< HEAD
        <br>
        <?php
        include 'includes/footer.php'
        ?>
=======
        
        
        <?php
        require 'includes/footer.php';
        ?>
        
        
>>>>>>> eee2b71 (E-Commerce app by using html,css,bootstrap,php and mysqli)
    </body>
</html>
