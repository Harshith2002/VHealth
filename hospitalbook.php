<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOSPITALS</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
    <link rel="stylesheet" href="hospitalIndex.css">
</head>
<body>
<?php include('./includes/header.php'); ?>
    <svg style="display: none">
        <symbol id="magnify" viewBox="0 0 18 18" height="100%" width="100%">
            <path
                d="M12.5 11h-.8l-.3-.3c1-1.1 1.6-2.6 1.6-4.2C13 2.9 10.1 0          6.5 0S0 2.9 0 6.5 2.9 13 6.5 13c1.6 0 3.1-.6 4.2-1.6l.3.3v.8l5 5          1.5-1.5-5-5zm-6 0C4 11 2 9 2 6.5S4 2 6.5 2 11 4 11 6.5 9 11 6.5            11z"
                fill="#fff" fill-rule="evenodd" />
        </symbol>
    </svg>
    <center>
    <h3 style="margin-top:60px;">Search by Hospital Name</h3>
    <div class="search-bar">
        <input type="text" class="input456" placeholder="&nbsp;" type="search" id="lname" autocomplete="off"
        onkeyup="filterBrands()" onsearch="filterBrands()" name="lname">
        <span class="label">Name</span>
        <span class="highlight"></span>
        <div class="search-btn">
            <svg class="icon icon-18">
                <use xlink:href="#magnify"></use>
            </svg>
        </div>
    </div>
    </div>
    <div class="container">
        <div class="card">
            <div class="row ">
                <div class="col-sm-7">
                    <div class="card-block">
                        <h4 class="card-title">Ramesh Hospitals</h4>
                        <p>Multi Superspeciality center focuses on – Cardiology, Neurology, Obstetrics & Gynaecology, Trauma & Emergency, Multi Organ Transplant, Nephrology.</p>
                        <a href="./hospital.php" class="btn btn-primary btn-sm">View More</a>
                    </div>
                </div>
                <div class="col-sm-5">
                    <img class="d-block w-100" src="./img/rameshhosp.jpg" alt="" height="300" width="400">
                </div>
            </div>
        </div>

        <div class="card">
            <div class="row ">
                <div class="col-sm-7">
                    <div class="card-block">
                        <h4 class="card-title">Rainbow Multi-Special Hospital</h4>
                        <p>Multi Superspeciality center focuses on – Cardiology, Neurology, Obstetrics & Gynaecology, .</p>
                        <a href="./hospital.php" class="btn btn-primary btn-sm">View More</a>
                    </div>
                </div>
                <div class="col-sm-5">
                    <img class="d-block w-100" src="./img/rainbowhosp.jpg" alt="" height="250">
                </div>
            </div>
        </div>

        <div class="card">
            <div class="row ">
                <div class="col-sm-7">
                    <div class="card-block">
                        <h4 class="card-title">NIMS Hospital</h4>
                        <p>Superspeciality center focuses on – Cardiology, Neurology, Obstetrics & Gynaecology, .</p>
                        <a href="./hospital.php" class="btn btn-primary btn-sm">View More</a>
                    </div>
                </div>
                <div class="col-sm-5">
                    <img class="d-block w-100" src="./img/nims.jpg" alt="" height="300" width="400">
                </div>
            </div>
        </div>

        <div class="card">
            <div class="row ">
                <div class="col-sm-7">
                    <div class="card-block">
                        <h4 class="card-title">Dental Care Hospital</h4>
                        <p>Multi Superspeciality center on dental specialization</p>
                        <a href="./hospital.php" class="btn btn-primary btn-sm">View More</a>
                    </div>
                </div>
                <div class="col-sm-5">
                    <img class="d-block w-100" src="./img/dental.png" alt="" height="300" width="400">
                </div>
            </div>
        </div>
    </div><br><br>
    </center>
</body>
<?php include('./includes/footer.php'); ?>
<script>

    var brandName = document.querySelectorAll(".card-title");
    var brandContainer = document.querySelectorAll(".card");
    var bodyContainer = document.querySelector(".container");

    function filterBrands() {
        var inputValue = document.querySelector(".input456").value.toLowerCase().replace(/\s+/g, '');

        var i;
        for (i = 0; i < brandContainer.length; i++) {
            if (brandName[i].innerText.toLowerCase().replace(/\s+/g, '').includes(inputValue)) {
                brandContainer[i].classList.add("appear");
            } else {
                brandContainer[i].classList.remove("appear");
                brandContainer[i].classList.add("hide");
            }
        }
    }

</script>

</html>