<?php
include "connect.php";
include "session.php";
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <title>Home Page</title>
</head>
<body style="background-image: url('https://images.pexels.com/photos/40568/medical-appointment-doctor-healthcare-40568.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1');
background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
  background-color: rgba(0, 0, 0, 0.6);
  ">
    
<!-- <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-fixed-top shadow-sm" id="mainNav">
        <div class="container px-5">
            <a class="navbar-brand fw-bold" href="land.php">
            <img src="img/rendezvousboxlogo.png" class="img-fluid" alt="Web Development">

            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>

                <i class="bi-list"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto me-4 my-3 my-lg-0">
                    <li class="nav-item"><a class="nav-link me-lg-3" href="#features">Dashbaord</a></li>
                    <li class="nav-item"><a class="nav-link me-lg-3" href="#download">Health Articles</a></li>
                    <li class="nav-item"><a class="nav-link me-lg-3" href="#features">How it works</a></li>
                    <li class="nav-item"><a class="nav-link me-lg-3" href="#download">Contact</a></li>
                </ul>
                <button class="btn btn-primary rounded-pill px-3 mb-2 mb-lg-0" data-bs-toggle="modal" data-bs-target="#feedbackModal">
                    <span class="d-flex align-items-center">
                        <i class="bi-chat-text-fill me-2"></i>
                        <span class="small">Book appointment</span>
                    </span>
                </button>
            </div>
        </div>
    </nav> -->

    <?php 
 include "navaccess.php"
?>

<section class="pt-5">
<div class="container card bg-glass">
  <div class="jumbotron card-body">
    <h1 style="color: #521262;" class="my-5 display-5 fw-bold ls-tight">Booking your appointment - Step 1</h1>
    <p>Select which consultation type that best suits you and your condition you wish to see a registered healthcare professional about.</p>
        <hr>
        <p class="fw-bold">Progress - 0/5</p>
        <div class="progress mb-4">
            <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%; background-color: #521262;"></div>
        </div>
    </div>
</div>

<div id="services" class="container-fluid text-center mb-3">
 
  <br>
  <div class="row slideanim">

  
    <div class="col-sm-3">
        <div class="card" style="width: auto;">
            <div class="card-body bg-glass">

            <a class="navbar-brand fw-bold" href="land.php">
            <img src="img/remotemeeting.svg" class="img-fluid" style="max-width: 50%; height: auto;" alt="Web Development">
            </a>

                <h5 class="card-title">Live appointment Now</h5>
                <p class="card-text"></p>
                <a href="form.php" class="btn btn-primary">Select</a>
            </div>
        </div>
    </div>


    <div class="col-sm-3">
        <div class="card" style="width: auto;">
            <div class="card-body bg-glass">
            <img src="img/groupvideo.svg" class="img-fluid" style="max-width: 50%; height: auto;" alt="Web Development">

                <h5 class="card-title">Online video consultation</h5>
                <p class="card-text"></p>
                <a href="form.php" class="btn btn-primary">Select</a>            
            </div>
        </div>
    </div>

    <div class="col-sm-3">
        <div class="card" style="width: auto; height: auto;">
            <div class="card-body bg-glass">
            <img src="img/calling.svg" class="img-fluid" style="max-width: 50%; height: auto;" alt="Web Development">

                <h5 class="card-title">Phone Consultation</h5>
                <p class="card-text"></p>
                <a href="form.php" class="btn btn-primary">Select</a>
            </div>
        </div>
    </div>
    
    <div class="col-sm-3">
        <div class="card" style="width: auto;">
            <div class="card-body bg-glass">
            <img src="img/messaging.svg" class="img-fluid" style="max-width: 50%; height: auto;" alt="Web Development">

                <h5 class="card-title">Message consultation</h5>
                <p class="card-text"></p>
                <a href="form.php" class="btn btn-primary">Select</a>
            </div>
        </div>
    </div>

    <div class="col-sm-3 mt-5">
        <div class="card" style="width: auto;">
            <div class="card-body bg-glass">
            <img src="img/doctoring.svg" class="img-fluid" style="max-width: 50%; height: auto;" alt="Web Development">

                <h5 class="card-title">In-person consultation</h5>
                <p class="card-text"></p>
                <a href="form.php" class="btn btn-primary">Select</a>
            </div>
        </div>
    </div>

</div>
</section>



<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>
    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>
    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>
</body>
</html>