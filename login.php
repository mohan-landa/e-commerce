<?php
require 'includes/common.php';
if(isset($_SESSION['email'])){
    header('location: index.php');
}
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
                        
                    </div>
                </div>
            </div>
        </div>
        <br>
        <?php
        include 'includes/footer.php'
        ?>
    </body>
</html>
