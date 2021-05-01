<?php 
require_once('config.php');
require_once('core/controller.Class.php');
include('./server.php');

$Controller = new Controller;
$user_cookie = $Controller -> printData(intval($_COOKIE['id']));

$cookie = $_COOKIE['id'];
if(isset($_POST['submit'])){
    $item_name = $_POST['item1'];
    echo $item_name;
    $query1 = "INSERT INTO orders(user, product_name, cost) VALUES ('$cookie', '$item_name', 150)";
    $result = mysqli_query($conn, $query1);
    if($result){
        echo '<script>alert("Success, Added to cart!")</script>';
    }else{
        echo "<br>The record was not inserted successfully because of this error ---> ". mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ayurveda</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <!--jQuery library--> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!--Latest compiled and minified JavaScript--> 
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .head{
            width: 100%;
            height: 180px;
            background: #905F5F;
            margin-top:50px;
        }
        .head h1{
            padding-top:20px;
            padding-left:30px;
        }
        h4{
            padding:20px;
            padding-left:30px;
        }
        .image{
            background-color:#98fb98;
            margin-left:80px;
        }
        @media only screen and (min-width: 40em) {
        .modal-overlay {
            display: -webkit-box;
            display: flex;
            -webkit-box-align: center;
                    align-items: center;
            -webkit-box-pack: center;
                    justify-content: center;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 5;
            background-color: rgba(0, 0, 0, 0.6);
            opacity: 0;
            visibility: hidden;
            -webkit-backface-visibility: hidden;
                    backface-visibility: hidden;
            -webkit-transition: opacity 0.6s cubic-bezier(0.55, 0, 0.1, 1), visibility 0.6s cubic-bezier(0.55, 0, 0.1, 1);
            transition: opacity 0.6s cubic-bezier(0.55, 0, 0.1, 1), visibility 0.6s cubic-bezier(0.55, 0, 0.1, 1);
        }
        .modal-overlay.active {
            opacity: 1;
            visibility: visible;
        }
        }
        .modal {
        display: -webkit-box;
        display: flex;
        -webkit-box-align: center;
                align-items: center;
        -webkit-box-pack: center;
                justify-content: center;
        position: relative;
        margin: 0 auto;
        background-color: #fff;
        width: 600px;
        max-width: 75rem;
        min-height: 20rem;
        padding: 1rem;
        border-radius: 3px;
        opacity: 0;
        overflow-y: auto;
        visibility: hidden;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        -webkit-backface-visibility: hidden;
                backface-visibility: hidden;
        -webkit-transform: scale(1.2);
                transform: scale(1.2);
        -webkit-transition: all 0.6s cubic-bezier(0.55, 0, 0.1, 1);
        transition: all 0.6s cubic-bezier(0.55, 0, 0.1, 1);
        }
        .modal .close-modal {
        position: absolute;
        cursor: pointer;
        top: 5px;
        right: 15px;
        opacity: 0;
        -webkit-backface-visibility: hidden;
                backface-visibility: hidden;
        -webkit-transition: opacity 0.6s cubic-bezier(0.55, 0, 0.1, 1), -webkit-transform 0.6s cubic-bezier(0.55, 0, 0.1, 1);
        transition: opacity 0.6s cubic-bezier(0.55, 0, 0.1, 1), -webkit-transform 0.6s cubic-bezier(0.55, 0, 0.1, 1);
        transition: opacity 0.6s cubic-bezier(0.55, 0, 0.1, 1), transform 0.6s cubic-bezier(0.55, 0, 0.1, 1);
        transition: opacity 0.6s cubic-bezier(0.55, 0, 0.1, 1), transform 0.6s cubic-bezier(0.55, 0, 0.1, 1), -webkit-transform 0.6s cubic-bezier(0.55, 0, 0.1, 1);
        -webkit-transition-delay: 0.3s;
                transition-delay: 0.3s;
        }
        .modal .close-modal svg {
        width: 1.75em;
        height: 1.75em;
        }
        .modal .modal-content {
        opacity: 0;
        -webkit-backface-visibility: hidden;
                backface-visibility: hidden;
        -webkit-transition: opacity 0.6s cubic-bezier(0.55, 0, 0.1, 1);
        transition: opacity 0.6s cubic-bezier(0.55, 0, 0.1, 1);
        -webkit-transition-delay: 0.3s;
                transition-delay: 0.3s;
        }
        .modal.active {
        visibility: visible;
        opacity: 1;
        -webkit-transform: scale(1);
                transform: scale(1);
        }
        .modal.active .modal-content {
        opacity: 1;
        }
        .modal.active .close-modal {
        -webkit-transform: translateY(10px);
                transform: translateY(10px);
        opacity: 1;
        }
    </style>
</head>
<body>
    <?php include('./includes/header.php'); ?>
    <div class="container head">
    <div class="col-sm-2">
        <img src="img/ayurved.png" height="180" width="200" style="border-radius:50%;">
    </div>
    <div class="col-sm-6">
        <h1 style="color:white;">Taking AYURVEDA to <br>everyone!</h1>
    </div>
    </div>
    <div>
    <center>
        <h4>Ayurvedic medicine has a rich history. Originally shared as an oral tradition, Ayurveda was recorded more than 5,000 years ago in Sanskrit, in the four sacred texts called the Vedas: the Rig Veda (3000-2500 BCE), Yajur Veda, Sam Veda, and Atharva Veda (1200-1000 BCE).
            Over the past few decades, Ayurveda has become increasingly well known in the west, following on the extraordinary success of yoga, of which it is the medical system. The popularity of both yoga and Ayurveda is due to the holistic and individualised approach that each encompasses.</h4>
        <h3>Get to know more!</h3>
    </center>
    </div>
    <div class="container">
        <div class="col-sm-2 thumbnail image" id="pop">
            <center>
                <img src="img/digestive.png" height="100" width="100">
                <h4>Digestive</h4><hr>
                <a>To know more</a>
            </center>
        </div>
        <div class="col-sm-2 thumbnail image">
            <center>
                <img src="img/hair_skin.png" height="100" width="100">
                <h4>Hair and Skin</h4><hr>
                <a>To know more</a>
            </center>
        </div>
        <div class="col-sm-2 thumbnail image">
            <center>
                <img src="img/jointpain.png" height="100" width="100">
                <h4>Joint Pain</h4><hr>
                <a>To know more</a>
            </center>
        </div>
        <div class="col-sm-2 thumbnail image">
            <center>
                <img src="img/respiratory.png" height="100" width="100">
                <h4>Respiratory</h4><hr>
                <a>To know more</a>
            </center>
        </div>
    </div>
    <div class="container">
    <form method="POST" action="./ayurveda.php">
    <center>
        <h3>Some of our products..</h3>
       
            <div class="col-sm-3 thumbnail">
                <img src="img/medicine2.png" height="200" width="150">
                <h4>Get Slim</h4>
                <input type="hidden" name="item1" value="Get Slim"></input>
                <input class="btn btn-primary" type="submit" name="submit" value="Add to cart"></input>
            </div>
            <div class="col-sm-3 thumbnail">
                <img src="img/medicine3.png" height="200" width="150">
                <h4>Maharshi Amrit Kalash</h4>
                <!-- <input type="hidden" name="item1" value="Maharshi Amrit Kalash"></input> -->
                <input class="btn btn-primary" type="submit" name="submit" value="Add to cart"></input>
                
            </div>
            <div class="col-sm-3 thumbnail">
                <img src="img/medicine4.png" height="200" width="150"><br>
                <h4>Jeeraka Lehyam</h4>
                <!-- <input type="hidden" name="item1" value="Jeeraka Lehyam"></input> -->
                <input class="btn btn-primary" type="submit" name="submit" value="Add to cart"></input>
            </div>
            <div class="col-sm-3 thumbnail">
                <img src="img/medicine1.jpg" height="200" width="150">
                <h4>Pankaja Kasturi</h4>
                <!-- <input type="hidden" name="item1" value="Pankaja Kasturi"></input> -->
                <input class="btn btn-primary" type="submit" name="submit" value="Add to cart"></input>
            </div>
    </center>
    </div>
    <div class="container">
    <center>
        <div class="col-sm-3 thumbnail">
            <img src="img/medicine1.jpg" height="200" width="150">
            <h4>Pankaja Kasturi</h4>
            <!-- <input type="hidden" name="item1" value="Pankaja Kasturi"></input> -->
            <input class="btn btn-primary" type="submit" name="submit" value="Add to cart"></input>
        </div>
        <div class="col-sm-3 thumbnail">
            <img src="img/medicine2.png" height="200" width="150">
            <h4>Get Slim</h4>
            <!-- <input type="hidden" name="item1" value="Get Slim"></input> -->
            <input class="btn btn-primary" type="submit" name="submit" value="Add to cart"></input>
        </div>
        <div class="col-sm-3 thumbnail">
            <img src="img/medicine3.png" height="200" width="150">
            <h4>Maharshi Amrit Kalash</h4>
            <!-- <input type="hidden" name="item1" value="Maharshi Amrit Kalash"></input> -->
            <input class="btn btn-primary" type="submit" name="submit" value="Add to cart"></input>
        </div>
        <div class="col-sm-3 thumbnail">
            <img src="img/medicine4.png" height="200" width="150"><br>
            <h4>Jeeraka Lehyam</h4>
            <!-- <input type="hidden" name="item1" value="Jeeraka Lehyam"></input> -->
            <input class="btn btn-primary" type="submit" name="submit" value="Add to cart"></input>
        </div>
    </center>
    </form>
    </div>
    <div class="modal-overlay">
        <div class="modal">
            <div class="col-sm-10">
                <center><h1>Digestive</h1></center>
                <p>Food is fuel for the body, and the stomach is one of the most important organs for your overall health and happiness. An efficient digestive system produces healthy tissues (Dhatus), which contributes to the formation of Ojas—the essence of immunity & good health.</p>
                <br><br>
                <p>In Ayurveda, weak digestion is known as Agnimandya—meaning weaked digestive fire, which cannot convert rasa (nutrients) to life-sustaining Ojas. In addition to being the causative factor in several diseases, weak digestion is a health problem in itself. Treatment of digestive problems at Jiva Ayurveda is effective because it identifies the root-cause first, and then treats it with 100% customized medicines, along with special diet and lifestyle plans that are designed to complete your treatment.</p>
            </div>
            <a class="close-modal">
            <svg viewBox="0 0 20 20">
                <path fill="#000000" d="M15.898,4.045c-0.271-0.272-0.713-0.272-0.986,0l-4.71,4.711L5.493,4.045c-0.272-0.272-0.714-0.272-0.986,0s-0.272,0.714,0,0.986l4.709,4.711l-4.71,4.711c-0.272,0.271-0.272,0.713,0,0.986c0.136,0.136,0.314,0.203,0.492,0.203c0.179,0,0.357-0.067,0.493-0.203l4.711-4.711l4.71,4.711c0.137,0.136,0.314,0.203,0.494,0.203c0.178,0,0.355-0.067,0.492-0.203c0.273-0.273,0.273-0.715,0-0.986l-4.711-4.711l4.711-4.711C16.172,4.759,16.172,4.317,15.898,4.045z"></path>
            </svg>
            </a>
        </div>
    </div>
<script>
    var elements = $(".modal-overlay, .modal");
    $("#pop").click(function () {
        elements.addClass("active");
    }); 
    $(".close-modal").click(function () {
        elements.removeClass("active");
    });
</script>
<?php include('./includes/footer.php'); ?>
</body>
</html>