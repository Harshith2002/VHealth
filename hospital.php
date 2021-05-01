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
    <title>About</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
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
        .heading {
        font-size: 25px;
        margin-right: 25px;
        }
        .fa {
        font-size: 25px;
        }
        .checked {
        color: orange;
        }
        .side {
        float: left;
        width: 15%;
        margin-top: 10px;
        margin-left:40px;
        }
        .middle {
        float: left;
        width: 60%;
        margin-top: 10px;
        margin-left:1px;
        }
        .right {
        margin-left:1px;
        text-align: right;
        }
        .row:after {
        content: "";
        display: table;
        clear: both;
        }
        .bar-container {
        width: 100%;
        background-color: #f1f1f1;
        text-align: center;
        color: white;
        }
        .bar-5 {width: 60%; height: 18px; background-color: #04AA6D;}
        .bar-4 {width: 30%; height: 18px; background-color: #2196F3;}
        .bar-3 {width: 10%; height: 18px; background-color: #00bcd4;}
        .bar-2 {width: 4%; height: 18px; background-color: #ff9800;}
        .bar-1 {width: 1%; height: 18px; background-color: #f44336;}
    </style>
</head>
<body>
<?php include('./includes/header.php'); ?>
    <div class="container-fluid">
        <div class="col-sm-6 col-sm-offset-1" style="margin-top:40px;">
            <h1>Rainbow Multi-Speciality Hospitals</h1>
            <p>Beside Bustand road,<br> Kothapeta,<br> Guntur - 522001, AP.</p>
            <h3>About</h3>
            <p>Spread over 320,000 sq.ft, the 350-bedded Multi Superspeciality center focuses on – Cardiology, Neurology, Obstetrics & Gynaecology, Trauma & Emergency, Multi Organ Transplant, Nephrology, Gastroenterology & Orthopedics.
                Ramesh Hospitals – Birth n’ Beyond for women and children is a boutique maternity center offering services in Gynecology, Obstetrics, Pediatrics and Neonatology. The comfort and convenience of Prenatal Guidance, Birthing Suits, Lactation Support, and Post-Delivery Care are made more accessible to the reach of people in the region.
            </p><br>
        </div>
        <div class="col-sm-3">
            <img src="img/rainbowhosp.jpg" height="250" style="margin-top:50px;"><br><br><br>
            <center><button type="button" class="btn btn-success" style="border-radius:50px;" id="pop">Book an Appointment</button></center>
        </div>
    </div>
    <div class="modal-overlay">
        <div class="modal">
            <div class="col-sm-10" style="background:#FFFFFF;border-radius: 35px;margin-top:10px;outline:none;">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <form>
                            <center><h3>Appointment Form</h3></center></br>
                            <div class="form-group form-inline">
                                <label for="strength">Name:</label>
                                <input  type="text" class="form-control" name="name" id="name" required>
                            </div>
                            <div class="form-group form-inline">
                                <label for="strength">Phone:</label>
                                <input  type="number" class="form-control" name="phn" id="phn" required>
                            </div>
                            <div class="form-group form-inline">
                                <label for="date">Pick Date:</label>
                                <input  type="date" class="form-control" name="date" id="date" required>              
                            </div>
                            <div class="form-group form-inline">
                                <label for="dept">Department:</label>
                                <select id='dept' name="dept">
                                    <option value="">Neurology</option>
                                    <option value="">PhysioTherapy</option>
                                    <option value="">Cardiology</option>
                                </select>
                            </div>
                            <label>Appointment Fee: Rs.100/-</label>
                            <br><br>
                            <center><button type="submit" name="submit" class="btn btn-primary btn-block">Proceed to Pay</button></center>
                        </form>
                    </div>
                </div>
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
    <div class="container">
        <center><h2>Our Specialists</center>
        <div class="col-sm-3">
            <div class="thumbnail">
                <img src="img/doc1.png" alt="" style="height:240px;">
                <div class="caption">
                <center>
                    <h4>Dr. R Jyothi Prakash Reddy</h4>
                    <p>Sr Consultant Obstetrics</p>
                    <p>MD, DGO</p>
                </center>    
                </div>
            </div> 
        </div>
        <div class="col-sm-3">
            <div class="thumbnail">
                <img src="img/doc2.png" alt="" style="height:240px;">
                <div class="caption">
                <center>
                    <h4>Dr. Deepa</h4>
                    <p>Consultant ENT Surgeon</p>
                    <p>MD, IDCCM</p>
                </center>    
                </div>
            </div> 
        </div>
        <div class="col-sm-3">
            <div class="thumbnail">
                <img src="img/doc1.png" alt="" style="height:240px;">
                <div class="caption">
                <center>
                    <h4>Dr. R Jyothi Prakash Reddy</h4>
                    <p>Sr Consultant Obstetrics</p>
                    <p>MD, DGO</p>
                </center>    
                </div>
            </div> 
        </div>
        <div class="col-sm-3">
            <div class="thumbnail">
                <img src="img/doc2.png" alt="" style="height:240px;">
                <div class="caption">
                <center>
                    <h4>Dr. Deepa</h4>
                    <p>Consultant ENT Surgeon</p>
                    <p>MD, IDCCM</p>
                </center>    
                </div>
            </div> 
        </div>
    </div>
    <div class="container thumbnail">
        <h3>HOSPITAL RATING</h3>
        <center>
            <span class="heading">User Rating</span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star"></span>
            <p>4.1 average based on 254 reviews.</p>
        </center>
        <div class="row">
        <div class="side">
            <div>5 star</div>
        </div>
        <div class="middle">
            <div class="bar-container">
            <div class="bar-5"></div>
            </div>
        </div>
        <div class="side right">
            <div>150</div>
        </div>
        <div class="side">
            <div>4 star</div>
        </div>
        <div class="middle">
            <div class="bar-container">
            <div class="bar-4"></div>
            </div>
        </div>
        <div class="side right">
            <div>63</div>
        </div>
        <div class="side">
            <div>3 star</div>
        </div>
        <div class="middle">
            <div class="bar-container">
            <div class="bar-3"></div>
            </div>
        </div>
        <div class="side right">
            <div>15</div>
        </div>
        <div class="side">
            <div>2 star</div>
        </div>
        <div class="middle">
            <div class="bar-container">
            <div class="bar-2"></div>
            </div>
        </div>
        <div class="side right">
            <div>6</div>
        </div>
        <div class="side">
            <div>1 star</div>
        </div>
        <div class="middle">
            <div class="bar-container">
            <div class="bar-1"></div>
            </div>
        </div>
        <div class="side right">
            <div>2</div>
        </div>
        </div>
    </div>
</body>
<?php include('./includes/footer.php'); ?>
</html>