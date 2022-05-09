<?php 
require 'includes/common.php';
if(isset($_SESSION['email'])){
    header('location: home.php');
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
            <div class="container-fluid">
                <div class="row">
                    
                <div class="col-xs-6 col-md-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4>Mobile 1</h4>
                        </div>
                        <div class="panel-body">
                            <div class="">
                                <div class="col-xs-2"></div>
                                <div class="col-xs-8">
                                    <img class="img-resposive img-thumbnail" src="img/1.jfif"/>
                                </div>
                                <div class="col-xs-2"></div>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-12">
                                    <center><p>This is mobile 1</p></center>
                                    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Order Now!</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                    
                <div class="col-xs-6 col-md-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4>Mobile 2</h4>
                        </div>
                        <div class="panel-body">
                            <div class="">
                                <div class="col-xs-2"></div>
                                <div class="col-xs-8">
                                    <img class="img-resposive img-thumbnail" src="img/2.jfif"/>
                                </div>
                                <div class="col-xs-2"></div>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-12">
                                <center><p>This is mobile 2</p></center>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Order Now!</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                    
                <div class="col-xs-6 col-md-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4>Mobile 3</h4>
                        </div>
                        <div class="panel-body">
                            <div class="">
                                <div class="col-xs-2"></div>
                                <div class="col-xs-8">
                                    <img class="img-resposive img-thumbnail" src="img/3.jfif"/>
                                </div>
                                <div class="col-xs-2"></div>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-12">
                                <center><p>This is mobile 3</p></center>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Order Now!</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                    
                <div class="col-xs-6 col-md-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4>Mobile 4</h4>
                        </div>
                        <div class="panel-body">
                            <div class="">
                                <div class="col-xs-2"></div>
                                <div class="col-xs-8">
                                    <img class="img-resposive img-thumbnail" src="img/4.jfif"/>
                                </div>
                                <div class="col-xs-2"></div>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-12">
                                <center><p>This is mobile 4</p></center>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Order Now!</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                    
                <div class="col-xs-6 col-md-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4>Mobile 5</h4>
                        </div>
                        <div class="panel-body">
                            <div class="">
                                <div class="col-xs-2"></div>
                                <div class="col-xs-8">
                                    <img class="img-resposive img-thumbnail" src="img/5.jfif"/>
                                </div>
                                <div class="col-xs-2"></div>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-12">
                                <center><p>This is mobile 5</p></center>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Order Now!</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                    
                <div class="col-xs-6 col-md-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4>Mobile 6</h4>
                        </div>
                        <div class="panel-body">
                            <div class="">
                                <div class="col-xs-2"></div>
                                <div class="col-xs-8">
                                    <img class="img-resposive img-thumbnail" src="img/6.jfif"/>
                                </div>
                                <div class="col-xs-2"></div>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-12">
                                <center><p>This is mobile 6</p></center>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Order Now!</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                    
                </div>
            </div>
        </div>
        
        <?php
        include 'includes/footer.php';
        ?>
        
    </body>
</html>
