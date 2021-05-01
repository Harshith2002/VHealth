<?php 
require_once('config.php');
require_once('core/controller.Class.php');
include('./server.php');
?>
<style>
li{
    font-size:15px;
}
</style>
<div class="navbar navbar-inverse navbar-fixed-top" style="background-color: #120E43">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>                        
            </button>
            <a class="navbar-brand" href="index.php"><h2 style="margin-top:-10px;">VHealth</h2></a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right">
                <?php 
                    if (!isset($_COOKIE['id'])) {
                ?>
                   <li><a href = "<?php echo $login_url; ?>" ><span class = "glyphicon glyphicon-log-in"></span> Login </a></li>
                <?php
                    } 
                    else{
                ?>
                    <li><a href = "ayurveda.php">Ayurveda</a></li>
                    <li><a href = "hospitalbook.php">Bookings</a></li>
                    <li><a href = "nutrients.php">Fitness</a></li>
                    <li><a href = "centers.php">Centers</a></li>
                    <li><a href = "covid.php">COVID</a></li>
                    <li><a href="mentalhealth.php">Mental Health</a></li>
                    <li><a href="profile.php"><span class = "glyphicon glyphicon-user"></span>Profile</a></li>
                    <li><a href = "logout.php"><span class = "glyphicon glyphicon-log-out"></span> Logout</a></li>
                <?php 
                    }
                ?>
            </ul>
        </div>
    </div>
</div>