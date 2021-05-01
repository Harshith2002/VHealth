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
    <style>
        th{
            border:1px solid white;
            padding:10px;
            text-align:center;
            background-color: rgb(216,31,42);
            color:white;
        }
        td{
            border:1px solid gray;
            text-align:center;
            padding:5px;
        }
        footer{
            margin-top:400px;
        }
    </style>
</head>
<body>
<?php include('./includes/header.php'); ?>
<div class="container" style="margin-top:100px;">
        <div class="col-sm-9">
            <h3>MEDITATION</h3>
            <p>Meditation is a practice where an individual uses a technique – such as mindfulness, or focusing the mind on a particular object, thought, or activity – to train attention and awareness, and achieve a mentally clear and emotionally calm and stable state.Scholars have found meditation elusive to define, as practices vary both between traditions and within them.

Meditation is practiced in numerous religious traditions. The earliest records of meditation (dhyana) are found in the ancient Hindu texts known as the Vedas, and meditation plays a salient role in the contemplative repertoire of Hinduism and Buddhism. Since the 19th century, Asian meditative techniques have spread to other cultures where they have also found application in non-spiritual contexts, such as business and health.

Meditation may significantly reduce stress, anxiety, depression, and pain,[8] and enhance peace, perception,self-concept, and well-being. Research is ongoing to better understand the effects of meditation on health (psychological, neurological, and cardiovascular) and other areas.Meditation is a practice where an individual uses a technique – such as mindfulness, or focusing the mind on a particular object, thought, or activity – to train attention and awareness, and achieve a mentally clear and emotionally calm and stable state.Scholars have found meditation elusive to define, as practices vary both between traditions and within them.

Meditation is practiced in numerous religious traditions. The earliest records of meditation (dhyana) are found in the ancient Hindu texts known as the Vedas, and meditation plays a salient role in the contemplative repertoire of Hinduism and Buddhism. Since the 19th century, Asian meditative techniques have spread to other cultures where they have also found application in non-spiritual contexts, such as business and health.

Meditation may significantly reduce stress, anxiety, depression, and pain,[8] and enhance peace, perception,self-concept, and well-being. Research is ongoing to better understand the effects of meditation on health (psychological, neurological, and cardiovascular) and other areas.</p>
        </div>
    <div class="col-sm-3">
        <img src="img/meditate.jpg" style="margin-top:20px;" height="300" width="300">
        <center><a href="fitness.php" class="btn btn-primary">Know more about Meditation Exercises</a></center>
    </div>
    </div><br><hr><br>
<center><img src="img/nutrition.jpg"></center>
    <div class="container">
        <div class="col-sm-9">
            <h3>NUTRITION</h3>
            <p>Nutritionists use ideas from molecular biology, biochemistry, and genetics to understand how nutrients affect the human body.

    Nutrition also focuses on how people can use dietary choices to reduce the risk of disease, what happens if a person has too much or too little of a nutrient, and how allergies work.

    Nutrients provide nourishment. Proteins, carbohydrates, fat, vitamins, minerals, fiber, and water are all nutrients. If people do not have the right balance of nutrients in their diet, their risk of developing certain health conditions increases.

    This article will explain the different nutrients a person needs and why. It will also look at the role of the dietitian and the nutritionist.Nutritionists use ideas from molecular biology, biochemistry, and genetics to understand how nutrients affect the human body.

    Nutrition also focuses on how people can use dietary choices to reduce the risk of disease, what happens if a person has too much or too little of a nutrient, and how allergies work.

    Nutrients provide nourishment. Proteins, carbohydrates, fat, vitamins, minerals, fiber, and water are all nutrients. If people do not have the right balance of nutrients in their diet, their risk of developing certain health conditions increases.

    This article will explain the different nutrients a person needs and why. It will also look at the role of the dietitian and the nutritionist.Nutritionists use ideas from molecular biology, biochemistry, and genetics to understand how nutrients affect the human body.

    Nutrition also focuses on how people can use dietary choices to reduce the risk of disease, what happens if a person has too much or too little of a nutrient, and how allergies work.

    Nutrients provide nourishment. Proteins, carbohydrates, fat, vitamins, minerals, fiber, and water are all nutrients. If people do not have the right balance of nutrients in their diet, their risk of developing certain health conditions increases.

    This article will explain the different nutrients a person needs and why. It will also look at the role of the dietitian and the nutritionist.Nutritionists use ideas from molecular biology, biochemistry, and genetics to understand how nutrients affect the human body.
     </p>
        </div>
    <div class="col-sm-3">
        <img src="img/nut1.png" style="margin-top:80px;">
    </div>
    </div>
    <div class="container">
        <div class="thumbnail">
            <h3>NUTRIENTS TABLE</h3>
            <div class="row text-center">
                <div class="col-sm-5">
                    <form action="nutrients.php" method="POST">
                        <div style="margin-top:30px;float:left;">
                            <label for="location">Enter Food Item: </label>
                            <input type="text" name="location" required = "true">
                            <button type="submit" name="find" class="btn btn-primary">Search</button>
                        </div>
                    </form>
                </div>
                <div class="col-sm-7">
                    <?php 
                        if(isset($_POST['find'])){ ?>
                        <table>
                        <tr>
                            <th>Carbohydrates</th>
                            <th>Fat</th>
                            <th>Proteins</td>
                            <th>Calories</td>
                            <th>Sugars</td>
                            <th>Fiber</td>
                            <th>Calcium</td>
                        </tr>
                        <tr>
                            <td>2.6</td>
                            <td>19.3</td>
                            <td>11.5</td>
                            <td>230</td>
                            <td>0</td>
                            <td>0</td>
                            <td>11</td>
                        </tr>
                    <?php }?>
                </div>
            </div>
        </div>
</div>
<hr>
</body>
</html>