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
                    
                </div>
            </div>
        </div>
        
        <?php
        include 'includes/footer.php';
        ?>
    </body>
</html>
