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
            margin-top:10px;
            padding:10px;
            text-align:center;
            width:97vw;
            background-color: rgb(216,31,42);
            color:white;
        }
        td{
            border:1px solid gray;
            text-align:center;
            padding:5px;
        }
        .list{
            padding:15px;
            padding-left:20px;
        }
        .box{
            padding:10px;
            margin-top:5px;
            border:1px solid black;
            border-radius:10px;
        }
    </style>
</head>
<body>
<?php include('./includes/header.php'); ?>
    <?php require("server.php"); ?>
    <div id="donor"  style="margin-top:60px;">
    <div class="container-fluid" >
        <div class="thumbnail">
            <h3>BLOOD AND PLASMA DONATION CENTERS</h3>
            <div class="row text-center">
                <div class="col-sm-6">
                    <form action="centers.php" method="POST">
                        <div style="margin-top:30px;float:left;">
                            <label for="location">Enter your Location: </label>
                            <input type="text" name="location" required = "true">
                            <button type="submit" name="search" class="btn btn-primary">Search</button>
                        </div>
                    </form>
                </div>
                <div class="col-sm-3">
                    <?php 
                        if(isset($_POST['search'])){ ?>
                        <img src="img/blood.png" alt="" width="200" height="200">
                        <?php if($_POST['location']=='Guntur'){?>
                        <h4>Blood Banks:</h4>
                        <p>1. Rainbow Blood Bank</p>
                        <p>2. NTR Trust Blood Bank</p>
                        <p>3. Red Cross Blood Bank</p>
                        <?php } else{?>
                        <h4>Blood Banks:</h4>
                        <p>1. SunFlowers</p>
                        <p>2. Charity Trust Co. </p>
                        <p>3. Nirmala BloodCentre</p>
                    <?php }}?>
                </div>
                <div class="col-sm-3">
                    <?php 
                    if(isset($_POST['search'])){ ?>
                    <img src="img/plasma.jpg" alt="" width="200" height="200">
                    <?php if($_POST['location']=='Guntur'){?>
                        <h4>PLASMA CENTERS:</h4>
                        <p>1. IDonate Organization</p>
                        <p>2. Indian RedCross Society</p>
                        <p>3. NTR Bhavan</p>
                        <?php } else{?>
                        <h4>PLASMA CENTERS:</h4>
                        <p>1. AirCross co.</p>
                        <p>2. WhiteCentre</p>
                        <p>3. Trusty Centre</p>
                    <?php }}?>
                </div>
            </div>
        </div>
    </div>
</div><hr>
    <div class="container">
    <h2 style="margin-left:-100px;">DISTRICT WISE BEDS AVAILABILTY IN AP</h2>
    <center>
        <div class="col-sm-3 col-sm-offset-1 box">
            <h4>Available ICU Beds</h4>
            <h3>2361</h3>
        </div>
        <div class="col-sm-3 col-sm-offset-1 box">
            <h4>Available O2 General Beds</h4>
            <h3>7572</h3>
        </div>
        <div class="col-sm-3 col-sm-offset-1 box">
            <h4>Available General Beds</h4>
            <h3>2361</h3>
        </div>
    </center>
    </div>
    <div class="list">    
        <table>
             <tr>
                <th rowspan="2">S.NO</th>
                <th rowspan="2">District</th>
                <th rowspan="2">No. of Hospitals</td>
                <th colspan="3">ICU Beds</td>
                <th colspan="3">O2 General Beds</td>
                <th colspan="3">General Beds</td>
                <th rowspan="2">Ventilator</td>
            </tr>
            <tr>
                <th>Total</th>
                <th>Occupied</th>
                <th>Available</th>
                <th>Total</th>
                <th>Occupied</th>
                <th>Available</th>
                <th>Total</th>
                <th>Occupied</th>
                <th>Available</th>
            </tr>
            <?php
                $sql = "SELECT * FROM availability";
                $result = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_array($result)) 
                {
                    
                    echo "<tr><td>".$row["SNO"]."</td><td>".$row["District"]."</td><td>".$row["num_hospitals"]."</td><td>".$row["icu_total"]."</td><td>".$row["icu_occupied"]."</td><td>".$row["icu_available"]."</td><td>".$row["o2_total"]."</td><td>".$row["o2_occupied"]."</td><td>".$row["o2_available"]."</td><td>".$row["gnrl_total"]."</td><td>".$row["gnrl_occupied"]."</td><td>".$row["gnrl_available"]."</td><td>".$row["ventilator"]."</td></tr>";
                }
            ?>
        </table>
    </div>
</body>
<?php include('./includes/footer.php'); ?>
</html>