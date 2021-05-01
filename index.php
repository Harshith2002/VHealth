<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title>VHealth</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        footer{
            background: #905F5F;
            height:50px;
            color:white;
        }
        footer p{
            padding-top:10px;
        }
    </style>
</head>
<body>
    <?php 
        include('./includes/header.php'); 
        $Controller = new Controller;
        $user_cookie = $Controller -> printData(intval($_COOKIE['id']));
        if (isset($user_cookie)){
            $user_data = "SELECT f_name FROM users WHERE user_name='$user_cookie'";
            $run_query = mysqli_query($conn, $user_data) or die($mysqli_error($run_query));
            $fetch_data = mysqli_fetch_assoc($run_query);
            echo "<center><h2 style='color:black;margin-top:60px;margin-bottom:10px;'> Welcome.... ".$fetch_data['f_name']." !!</h2></center>";
        }
    ?>
    <div id="myCarousel" class="carousel slide" data-ride="carousel" style="margin-top:10px;">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
        <div class="item active">
        <center><img src="img/VHealth.png" alt=" " height="500"></center>
        </div>

        <div class="item">
        <center><img src="img/tips.png" alt=" " height="500"></center>
        </div>

        <div class="item">
        <center><img src="img/pic.png" alt=" " height="500"></center>
        </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
        <span class="sr-only">Next</span>
    </a>
    </div>
    <?php
        
    ?>
    <div style="border:3px solid; margin-top:10px;" id="about">
        <center><h2>About Us</h2></center>
        <p style="font-size:18px;padding-left:10px;padding-right:10px;">
        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.      
        </p> 
    </div>
    <div style="margin-top:10px;" id="services">
        <center><h2>Our Services</h2></center>
            <div class="container">
                <div class="row text-center" id="item_list">
                    <div class="col-sm-4">
                        <a href="" >
                            <div class="thumbnail">
                                <img src="img/booknow.png" alt="" style="height:240px;">
                                <div class="caption">
                                    <h3>Book Now</h3>
                                </div>
                            </div> 
                        </a>
                    </div>
                    <div class="col-sm-4">
                        <a href="./ayurveda.php" >
                            <div class="thumbnail">
                                <img src="img/ayurveda.jpg" alt="" style="height:240px;">
                                <div class="caption">
                                    <h3>Ayurveda</h3>
                                </div>
                            </div> 
                        </a>
                    </div>
                    <div class="col-sm-4">
                        <a href="./mentalhealth.php" >
                            <div class="thumbnail">
                                <img src="img/mentalhealth.png" alt="" style="height:240px;">
                                <div class="caption">
                                    <h3>Mental Health</h3>                                  
                                </div>
                            </div>
                        </a>
                    </div>              
                </div>
            </div>
            <div class="container">
                <div class="row text-center" id="item_list">
                    <div class="col-sm-4">
                        <a href="./fitness.php" >
                            <div class="thumbnail">
                                <img src="img/fitness.jpg" alt="" style="height:240px;">
                                <div class="caption">
                                    <h3>Fitness</h3>
                                  
                                </div>
                            </div> 
                        </a>
                    </div>
                    <div class="col-sm-4">
                        <a href="./covid.php">
                            <div class="thumbnail">
                                <img src="img/covid.jpg" alt="" style="height:240px;">
                                <div class="caption">
                                    <h3>COVID Statistics</h3>
                                </div>
                            </div> 
                        </a>
                    </div>
                    <div class="col-sm-4">
                        <a href="./plasma.php" >
                            <div class="thumbnail">
                                <img src="img/bloodplasma.jpg" alt="" style="height:240px;">
                                <div class="caption">
                                    <h3>Blood and Plasma Centers</h3>                                  
                                </div>
                            </div>
                        </a>
                    </div>              
                </div>
            </div>
    </div>
    <div id="team" style="border:3px solid; margin-top:10px;margin-bottom:10px; ">
        <center><h2>Our Team</h2></center>
            <div class="container">
                <div class="row text-center">
                    <div class="col-sm-3">                       
                            <div class="thumbnail" style="border-color:transparent;">
                                <img src="img/harshith.jpeg" alt="" style="height:300px;">
                                <div class="caption">
                                    <h3>S S V M HARSHITH KANIGALPULA</h3>
                                </div>
                            </div> 
                    </div>
                    <div class="col-sm-3">                       
                            <div class="thumbnail" style="border-color:transparent;">
                                <img src="img/sudhindra.jpg" alt="" style="height:300px;">
                                <div class="caption">
                                    <h3>SUDHINDRA PAI</h3>
                                </div>
                            </div> 
                    </div>
                    <div class="col-sm-3">                       
                            <div class="thumbnail" style="border-color:transparent;">
                                <img src="img/yamini.jpeg" alt="" style="height:300px;">
                                <div class="caption">
                                    <h3>YAMINI HARIPRIYA KANUPARTHI</h3>
                                </div>
                            </div> 
                    </div>
                    <div class="col-sm-3">                       
                            <div class="thumbnail" style="border-color:transparent;">
                                <img src="img/ritesh.jpeg" alt="" style="height:300px;">
                                <div class="caption">
                                    <h3>RITESH PUVVADA</h3>
                                </div>
                            </div> 
                    </div>
                                  
                </div>
            </div>
    </div>
    <div id="contact" style="margin-top:10px;background-color:#1B1E23;">
        <div class="container">
            <div class="row text-center">
                <div class="col-sm-4" style="padding-top:10px;">
                    <h2 style="color:#D4AF37;font-size:25px;">VHealth</h2>
                    <div class="thumbnail" style="background-color:#1B1E23;color:white;border-color:#1B1E23;">
                        <p style="font: normal normal normal 20px arial,sans-serif;">This company is a nonprofit organization with the aim of improving health and wellness around the world.If you're interested in learning more or partnering for a good cause. Please feel free to reach out </p>
                    </div>    
                </div>
                <div class="col-sm-4">
                    <img src="img/logo.png" alt="" style="height:290px;width:300px;padding:20px;">
                </div>
                <div class="col-sm-4" style="padding-top:30px;">
                    <h2 style="color:#D4AF37;font-size:25px;">Contact Information</h2>
                    <div class="thumbnail" style="background-color:#1B1E23;color:white;border-color:#1B1E23;">
                    <p class="fa fa-google" style="font-size:20px;">  vhealth@gmail.com</p><br>
                    <p class="fa fa-phone" style="font-size:20px;"> +91 9299299212</p><br>
                    <a href="#" class="fa fa-facebook" style="padding:5px 20px 10px 5px;border-radius: 50%;font-size: 20px;width: 5px;height:5px;text-align: center;text-decoration: none;margin: 1px 2px;color: white;"></a>
                    <a href="#" class="fa fa-youtube" style="padding:5px 20px 10px 5px;border-radius: 50%;font-size: 20px;width: 5px;height:5px;text-align: center;text-decoration: none;margin: 1px 2px;color: white;"></a>
                    <a href="#" class="fa fa-instagram" style="padding:5px 20px 10px 5px;border-radius: 50%;font-size: 20px;width: 5px;height:5px;text-align: center;text-decoration: none;margin: 1px 2px;color: white;"></a>
                    <a href="#" class="fa fa-linkedin" style="padding:5px 20px 10px 5px;border-radius: 50%;font-size: 20px;width: 5px;height:5px;text-align: center;text-decoration: none;margin: 1px 2px;color: white;"></a>
                </div>
            </div>
        </div>
    </div>
    </div>
    <footer>
        <div class="container">
        <center>
            <p>Copyright &copy; VHealth. All Rights Reserved</p>	
        </center>
        </div>
    </footer>
    <?php include('./includes/footer.php'); ?>
</body>
</html>