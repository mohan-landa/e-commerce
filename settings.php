<?php
require 'includes/common.php';
if(!isset($_SESSION['email'])){
    header('location: index.php');
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
                    
                    <div class="col-xs-1 col-md-3">
                        
                    </div>
                    
                    <div class="col-xs-10 col-md-6">
                        <form method="post" action="scripts/settings.php">
=======
        <title>Settings : Lifestyle Store</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="css/setting.css" type="text/css">
        <link rel="stylesheet" href="css/style.css" type="text/css">
    </head>
    <body>
        
        <?php
        require 'includes/header.php';
        ?>
        
        <div class="setting-content" style="margin-top: 60px;">
            <div class="container">
                <div class="row">
                    <div class="col-xs-1 col-md-3"></div>
                    <div class="col-xs-10 col-md-6">
                        <form method="post" action="settings_script.php">
>>>>>>> eee2b71 (E-Commerce app by using html,css,bootstrap,php and mysqli)
                            <div class="form-group">
                                <h4>Change Password</h4>
                            </div>
                            <div class="form-group">
<<<<<<< HEAD
                                <input type="password" class="form-control" placeholder="Old Password" name="op"/>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="New Password" name="np"/>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Re-type New Password" name="rnp"/>
                            </div>
                            <button class="btn btn-primary">Change</button>
                        </form>
                    </div>
                    
                    <div class="col-xs-1 col-md-3">
                        
                    </div>
                    
                </div>
            </div>
        </div>
=======
                                <input name="pass" type="password" class="form-control" placeholder="Password">
                            </div>
                            <div class="form-group">
                                <input name="newpass" type="password" class="form-control" placeholder="New Password">
                            </div>
                            <div class="form-group">
                                <input name="rnewpass" type="password" class="form-control" placeholder="Re-type New Password">
                            </div>
                            <div class="form-group">
                                <button class="btn btn-primary">
                                    <a href="" style="color:#ffffff;">Change</a>
                                </button>
                            </div>
                        </form>
                    </div>
                    <div class="col-xs-1 col-md-3"></div>
                </div>
            </div>
        </div>
        
        
        <?php
        require 'includes/footer.php';
        ?>
        
>>>>>>> eee2b71 (E-Commerce app by using html,css,bootstrap,php and mysqli)
    </body>
</html>
