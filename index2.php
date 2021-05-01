<?php
require_once('config.php');
require_once('core/controller.Class.php');
// include('./server.php');

?>
<!DOCTYPE html>
<html>

  <head>
    <link rel="icon" href="./logo1.png" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>V-Health</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
    <!--jQuery library-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!--Latest compiled and minified JavaScript-->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- Custom CSS -->
    <link href="style1.css" rel="stylesheet" />
  </head>

  <body>

  <?php 
      if(isset($_COOKIE['id']) && isset($_COOKIE['sess'])){
        $Controller = new Controller;
        if($Controller -> checkUserStatus($_COOKIE['id'], $_COOKIE['sess'])) {
    ?>

   <?php include('./includes/header.php'); ?>
    
    <div class="col-sm-10 col-sm-offset-1 above">
      <h1 style="color: green">Hello, <?php echo $Controller -> printData(intval($_COOKIE['id']));?> !</h1>
    </div> 
    
    <br>
    <footer>Developed by VITShiners</footer>
  </body>


<!-- ----------------------------If not logged-in, then below loginpage---------------------- -->


  <?php }       
    } else{ 
  ?>

    <body style="background-color: #207398;">
      <div class="container">
        <div class="row row_style">
          <div class="col-xs-8">
            <div class="login-div">
              <form>
                <div class="logo"><img src="img/logo.png" height="100" width="100" style="border-radius:50%;"></div>
                <div class="sub-title">V-Health</div>
                <div class="fields"></div>
                <button onclick="window.location = '<?php echo $login_url; ?>'" type="button"  class="loginin-button">
                  Login via Google
                </button>
                <div class="link">
                 <p>Serving with CARE & pleasure!</p>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <footer> Developed by VITShiners </footer>
    </body>
  <?php } ?>
    
</html>
