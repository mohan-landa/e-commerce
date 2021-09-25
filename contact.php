<?php
require 'includes/common.php';
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
                        <form action="scripts/contact.php" method="post">
                            <h4>Contact Us</h4>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Enter your name" name="1"/>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="Email Id" name="2"/>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Enter mobile number" name="3"/>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Write subject" name="4"/>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Enter any message" name="5"/>
                            </div>
                            <button class="btn btn-primary">Submit</button>
                            <br><br>
                        </form>
                    </div>
                    
                    <div class="col-xs-1 col-md-3">
                        
                    </div>
                    
                </div>
            </div>
        </div>
        
        <?php
        if(!isset($_SESSION['email'])) include 'includes/footer.php';
        ?>
    </body>
</html>
