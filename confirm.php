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
<!-- navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light navbar-fixed-top shadow-sm" id="mainNav">
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
                    <li class="nav-item"><a class="nav-link me-lg-3" href="#download">Sign out</a></li>

                </ul>
                <a href="appointment.php">
                <button class="btn btn-primary rounded-pill px-3 mb-2 mb-lg-0" data-bs-toggle="modal" data-bs-target="#feedbackModal">
                    <span class="d-flex align-items-center">
                        <i class="bi-chat-text-fill me-2"></i>
                        
                        <span class="small">Book appointment</span>
                    </span>
                </button>
                </a>
            </div>
        
                <span class="pl-5 small">Luke Cage</span>
                <img style="width: 5%;" class="img-profile rounded-circle"
                src="img/profile.svg">
        </div>
    </nav>
<!-- end of navbar -->
<div class="container mt-5 mb-5">
    <div class="row d-flex justify-content-center">
        <div class="col-md-8">
            <div class="card bg-glass mb-5">
                <div style="background-color: #eeeeeea8;" class="text-left logo p-2 px-5 py-3"> <img src="img/rendezvousboxlogo.png" width="150"> </div>
                <div class="invoice p-5">
                    <h5>Your booking is confirmed!</h5> <span class="font-weight-bold d-block mt-4">Hello, Luke Cage </span> <span>Here is a summary of your appointment booking.</span>
                    <div class="payment border-top mt-3 mb-3 py-3 border-bottom table-responsive">
                    <table class="table table-borderless">
                            <tbody>
                                <tr>
                                <span class="d-block text-muted mb-3">Appointment type</span>
                                    <td width="20%"> <img src="img/remotemeeting.svg" width="90"> </td>
                                    <td class="text-center" width="60%"> <span class="font-weight-bold">In-person Consultation</span>
                                        <div style="font-size: 12px; color: #dedbdb;" class="product-qty"></div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="product border-bottom table-responsive">
                    <table class="table table-borderless">
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="py-1"> <span class="d-block text-muted">Date</span> <span>20 May 2022</span> </div>
                                    </td>
                                    <td>
                                        <div class="py-1"> <span class="d-block text-muted">Time</span> <span>11:30 AM</span> </div>
                                    </td>
                                    <td>
                                        <div class="py-1"> <span class="d-block text-muted">Doctor</span> <span> Dr Wanda Maximoff </span> </div>
                                    </td>
                                    
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="row d-flex justify-content-start">
                        <div class="">
                            <table class="table table-borderless">
                                <tbody styles="font-size: 13px;" class="totals">
                                    <tr>
                                        <td>
                                            <div class="text-left pt-2"> <span class="text-muted">Reason for booking</span> </div>
                                        </td>
                                    </tr>
                                    
                                        <td>
                                            <div class="text-left"> <span class="font-weight-bold">I have been experiencing migranes the past couple of days and it has not been getting better.</span> </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <p>An email confirming your appointment has been sent to your email!</p>
                    <p class="font-weight-bold mb-0">Thanks for booking an appointment!</p> <span>rendezvous</span>
                </div>
                <a href="land.php">
<button style="background-color: #521262;" type="button" class="btn text-white pull-right mr-5 mb-5">Return to homepage</button>
</a>
                <div style="background-color: #eeeeeea8;" class="d-flex justify-content-between footer p-3"> <span>Need Help? visit our <a href="#"> help center</a></span>  </div>
            </div>
        </div>
    </div>
</div>



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