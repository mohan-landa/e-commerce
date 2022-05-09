<nav class="navbar navbar-default navbar-fixed-top">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.php" style="padding-right: 10px;">E- Store</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar" style="padding-right: 30px;">
        <ul class="nav navbar-nav navbar-right">
            <?php
            if(isset($_SESSION['email'])){
            ?>
            <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"/> Cart</a></li>
            <li><a href="settings.php"><span class="glyphicon glyphicon-question-sign"/> Settings</a></li>
            <li><a href="about.php"><span class="glyphicon glyphicon-th-list"/> Aboutus</a></li>
            <li><a href="contact.php"><span class="glyphicon glyphicon-phone"/> Contactus</a></li>
            <li><a href="scripts/logout.php"><span class="glyphicon glyphicon-log-out"/> Logout</a></li>
            <?php
            }else{
            ?>
            <li><a href="signup.php"><span class="glyphicon glyphicon-user"/> Signup</a></li>
            <li><a href="login.php"><span class="glyphicon glyphicon-log-in"/> Login</a></li>
            <li><a href="about.php"><span class="glyphicon glyphicon-th-list"/> Aboutus</a></li>
            <li><a href="contact.php"><span class="glyphicon glyphicon-phone"/> Contactus</a></li>
            <?php
            }
            ?>
        </ul>
    </div>
</nav>