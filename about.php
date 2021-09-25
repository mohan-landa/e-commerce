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
        <style>
            p{
                font-size:25px;
            }
        </style>
    </head>
    <body>
        <?php
        include 'includes/header.php'
        ?>
        
        <div class="content" style="margin-top: 60px;">
            <div class="container">
                <div class="row">
                    
                    <div class="col-xs-1">
                        
                    </div>
                    
                    <div class="col-xs-10">
                        <h2 style="color:red;">Who we are</h2>
                        <p>E-Store India is a Venture of Axis E-Corp Solutions Pvt. Ltd. It was Started in Year 2016 and is growing year by years.</p>
                        <br>
                        <p>E-Store India is the retail revolution, that is planned to serve common people grocery and daily need products with best quality and competitive price at the doorsteps. The objective of this store chain is to arrange good quality grocery, FMCG products on best price in the industry.</p>
                        <br>
                        <p>We are the team of India's best Reatail professionals, business managers and financial experts who are committed to work for the benefits of a common man. E-Store India is against of the high profit taking culture of the market, whereas we provide all branded FMCG products in comparative low cost.</p>
                        <br>
                        <p>E-Store India as a company first thinks of his customers benefits so runs various free health camps in association with other companies for the well being of the customers and also provides certified herbal and ayurveda healths products to give customer a happy and healthy life.</p>
                        <br>
                        <p>Now E-Store India is ready to reach at each and every home of South Asia and the company is establishing its wings in other states of India. We have a wide store chain in the multiple cities of India that is surving the customers all the entire grocery and FMCG range with the brand that they are using in their daily life.</p>
                        <br>
                        <p>E-Store India is the entity having group of multiple ventures like Grocery, FMCG, Retail as well as F & B (Foods & Beverages), manufacturing units, media and entertainment. Our endeavor is to serve best things to best people none other than We Indian..!</p>
                    </div>
                    
                </div>
            </div>
        </div>
        
        <?php
        if(!isset($_SESSION['email'])) include 'includes/footer.php';
        ?>
    </body>
</html>
