<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <!--jQuery library--> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!--Latest compiled and minified JavaScript--> 
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
    .checked {
        color: orange;
    }
    .thumbnail{
        margin-left:30px;
    }
    .first{
         margin-left:130px;
    }
    </style>
</head>
<body>
<?php include('./includes/header.php'); ?>
<img src="img/background.jpeg" style="margin-top:50px;" width="100%"><br>
<div class="container-fluid">
<br>
    <div class="thumbnail col-sm-3 first">
        <img src="img/person1.jpg" style="border-radius:50%;float:left;" height="150" width="150">
        <center>
            <h3>Ramesh </h3>
            <p> Psycologist </p>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <p> Conversations: 1737 </p>
            <p class="fa fa-clock-o"> Available on:Friday </p><br>
            <a type="button" class="btn btn-info" href="chatbot.php">Chat</a>
        </center>
    </div>
    <div class="thumbnail col-sm-3">
        <img src="img/person4.jpg" style="border-radius:50%;float:left;" height="150" width="150">
        <center>
            <h3>Anisha Agarwal</h3>
            <p> Career Coach </p>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <p> Conversations: 1737 </p>
            <p class="fa fa-clock-o"> Available on:Friday </p><br>
            <a type="button" class="btn btn-info" href="chatbot.php">Chat</a>
        </center>
    </div>
    <div class="thumbnail col-sm-3">
        <img src="img/person3.jpg" style="border-radius:50%;float:left;" height="150" width="150">
        <center>
            <h3>Ravi Sankar</h3>
            <p> De-Addiction Specialist </p>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <p> Conversations: 1737 </p>
            <p class="fa fa-clock-o"> Available on:Friday </p><br>
            <a type="button" class="btn btn-info" href="chatbot.php">Chat</a>
        </center>
    </div>
    <div class="thumbnail col-sm-3 first">
        <img src="img/person5.jpg" style="border-radius:50%;float:left;" height="150" width="150">
        <center>
            <h3>Sunita Roy</h3>
            <p> Hypnotherapist </p>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <p> Conversations: 1737 </p>
            <p class="fa fa-clock-o"> Available on:Friday </p><br>
            <a type="button" class="btn btn-info" href="chatbot.php">Chat</a>
        </center>
    </div>
    <div class="thumbnail col-sm-3">
        <img src="img/person2.jpg" style="border-radius:50%;float:left;" height="150" width="150">
        <center>
            <h3>Chandan</h3>
            <p> Counselor </p>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <p> Conversations: 1737 </p>
            <p class="fa fa-clock-o"> Available on:Friday </p><br>
            <a type="button" class="btn btn-info" href="chatbot.php">Chat</a>
        </center>
    </div>
    <div class="thumbnail col-sm-3">
        <img src="img/person6.png" style="border-radius:50%;float:left;" height="150" width="150">
        <center>
            <h3>Ankita Roy</h3>
            <p> Psycologist </p>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <p> Conversations: 1737 </p>
            <p class="fa fa-clock-o"> Available on:Friday </p><br>
            <a type="button" class="btn btn-info" href="chatbot.php">Chat</a>
        </center>
    </div>
</div>
<?php include('./includes/footer.php'); ?>
</body>