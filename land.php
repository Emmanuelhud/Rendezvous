<?php
include "connect.php";
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
<body class="bg-light">

<div class="text-center">
  <button type="button" class="btn btn-info btn-large text-white my-2 mx-2" data-toggle="modal" data-target="#exampleModalCenter">
    Learn about this project!
  </button>
</div>
  
  <!-- Modal -->
  <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">About this project</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
        <h1>Assignment: Individual project</h1><br>
          <p>
            Programming Languages and tools: This project was created using HTML, CSS, PHP. For the development
             process XAMPP was used to host the application on a local web server, as well as phpMyAdmin being used to manage the MySQL database.<br><br>
            About: This is an appointment scheduling/booking application for secifically for use in the medical
          industry for the delivery of medical care.<br><br>
          How to use:<br> 
          1. Select on the 'Book Appoinment' button <br>
          2. Log in using the following credentials to gain full access: <br> - Email:lukecage@gmail.com<br> - Number:4567890<br> - Password:huddersfield <br>
          3. Navigate the application<p>
  
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

<?php 
 include "navaccess.php"
?>

<!-- Hero Banner Section -->
<section class="hero-banner py-5">
    <div class="container">
        <div class="row row align-items-center">
            <div class="col-xl-5 offset-xl-1 order-xl-1">
                <img src="img/medillus/medillus/SVG/medillus18.svg" class="img-fluid" style="max-width: 100%; height: auto;" alt="Web Development">
            </div>
            <div class="col-lg-6">
                <h1 class="my-5 display-5 fw-bold ls-tight" style="color: hsl(218, 81%, 95%)">
                    Book an appointment now <br />
                    <span style="color: hsl(218, 81%, 75%)">to see a doctor today.</span>
                </h1>                
                <p class="mb-4 opacity-70" style="color: hsl(218, 81%, 85%)">
                    Booking an appointment with rendezvous is quick and easy. We offer different types of consultation so you don't have to worry about making it to your next appointment. To book an appointment and see a doctor today, click the Book Now button below!
                </p>                
                <a href="appointment.php" class="btn btn-outline-secondary btn-lg border">Book Now</a>
            </div>
        </div>
    </div>
</section>
<img src="img/wavesOpacity.svg" class="img-fluid" alt="Web Development">
<!--
* Section of hero banner.
*Code taken from: 
https://www.markuptag.com/hero-banner-html-design-in-bootstrap-5/
-->
<!-- Hero banner end -->

<!-- booking rendezvous section -->

<div id="services" class="container-fluid text-center mb-3">
  <h2 class="my-5 display-7 fw-bold ls-tight">Book an appointment with rendezvous</h2>
  <br>
  <div class="row slideanim">

    <div class="col-sm-4">
    <img src="img/login.svg" class="img-fluid" style="max-width: 50%; height: auto;" alt="Web Development">
      <span class="glyphicon glyphicon-off logo-small"></span>
      <h4 class="fw-bold ls-tight">Sign in to your account</h4>
      <p>Sign in and book your appointment. Alternatively you can use your NHS account to sign in to be able to book an appointment.</p>
    </div>

    <div class="col-sm-4">
    <img src="img/select.svg" class="img-fluid" style="max-width: 50%; height: auto;" alt="Web Development">
      <span class="glyphicon glyphicon-heart logo-small"></span>
      <h4 class="fw-bold ls-tight">Choose the service you want</h4>
      <p >rendezvous offers a range of appointment service that best suits you and your options.</p>
    </div>

    <div class="col-sm-4">
    <img src="img/booking.svg" class="img-fluid" style="max-width: 50%; height: auto;" alt="Web Development">
      <span class="glyphicon glyphicon-lock logo-small"></span>
      <h4 class="fw-bold ls-tight">Book an appointment</h4>
      <p>Book an appointment with a registered healthcare professional the same day or book up to 3 days in advance.</p>
    </div>

  </div>

  <br><br>

  <div class="row slideanim">
    <div class="col-sm-4">
    <img src="img/remotemeeting.svg" class="img-fluid" style="max-width: 50%; height: auto;" alt="Web Development">
      <span class="glyphicon glyphicon-leaf logo-small"></span>
      <h4 class="fw-bold ls-tight">No more waiting rooms</h4>
      <p>See a registered healthcare professional from anyway at a time that suits you. You no longer have to worry about getting to the clinic.</p>
    </div>

    <div class="col-sm-4">
    <img src="img/medresearch.svg" class="img-fluid" style="max-width: 50%; height: auto;" alt="Web Development">
      <span class="glyphicon glyphicon-certificate logo-small"></span>
      <h4 class="fw-bold ls-tight">No more waiting rooms</h4>
      <p>Lorem ipsum dolor sit amet..</p>
    </div>

    <div class="col-sm-4">
    <img src="img/medcare1.svg" class="img-fluid" style="max-width: 50%; height: auto;" alt="Web Development">
      <span class="glyphicon glyphicon-wrench logo-small"></span>
      <h4 class="fw-bold ls-tight">No more waiting rooms</h4>
      <p>Lorem ipsum dolor sit amet..</p>
    </div>

  </div>
</div>
<!--
* Section of flexboxes for the bookign explanation service.
*Code taken from: 
https://www.w3schools.com/bootstrap/bootstrap_theme_company.asp
and
https://www.w3schools.com/bootstrap/tryit.asp?filename=trybs_theme_company_complete_animation
-->
<!-- End booking section -->






<img src="img/footerwaves1.svg" style="transform: rotate(180deg);" class="img-fluid" alt="Web Development">

<!-- Footer -->
<footer style="background-color: #521262;" class=" text-center text-white">
  <!-- Grid container -->
  <div class="container p-4 ">

    <!-- Section: Form -->

      <div class="bg-white card mb-5 text-dark">
        <div class="card-body mx-4">
        <form action="">
        <!--Grid row-->
        <div class="row d-flex justify-content-center">
          <!--Grid column-->
          <div class="col-auto">
            <p class="pt-2">
              <strong>Sign up for our newsletter</strong>
            </p>
          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-md-5 col-12">
            <!-- Email input -->
            <div class="form-outline form-white mb-4">
              <input placeholder="Email address" type="email" id="form5Example21" class="form-control" />
              <label class="form-label" for="form5Example21"></label>
            </div>
          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-auto text-dark">
            <!-- Submit button -->
            <button style="background-color: #521262;" type="submit" class="btn btn-outline-light mb-4 ">
              Subscribe
            </button>
          </div>
          <!--Grid column-->
        </div>
        <!--Grid row-->
      </form>
   
    <!-- Section: Form -->

    <!-- Section: Text -->

      <p>
        Sign up for our newsletter to get the lastest information and tips from our doctors and registered healthcare professionals on how to live a healthy and balanced life.
      </p>

    <!-- Section: Text -->
        </div>
      </div>

      

    <!-- Section: Links -->
    <section class="">
      <!--Grid row-->
      <div class="row">
        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <img style="height: 100%;" src="img/footerlogo3.png" class="img-fluid" alt="Web Development">
        </div>
        <!--Grid column-->
        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase">About</h5>

          <ul class="list-unstyled mb-0">
            <li>
              <a href="#!" class="text-white">About Us</a>
            </li>
            <li>
              <a href="#!" class="text-white">Terms and conditions</a>
            </li>
            <li>
              <a href="#!" class="text-white">Privacy Policy</a>
            </li>
            <li>
              <a href="#!" class="text-white">Booking</a>
            </li>
          </ul>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase">Contact</h5>

          <ul class="list-unstyled mb-0">
            <li>
              <a href="#!" class="text-white">Help Center</a>
            </li>
            <li>
              <a href="#!" class="text-white">Support</a>
            </li>
            <li>
              <a href="#!" class="text-white">Contact Us</a>
            </li>
            <li>
              <a href="#!" class="text-white">FAQ</a>
            </li>
          </ul>
        </div>
        <!--Grid column-->
         <!--Grid column-->
         <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <p>
          If you’d like to book or reschedule an appointment, please call our booking line. For other queries, you can also email us. We’re here:
Monday to Friday: 8am-7pm,
Saturday: 9am-5pm,
Sunday 10am-4pm.
          </p>
        </div>
        <!--Grid column-->
      </div>
      <!--Grid row-->
    </section>
    <!-- Section: Links -->
  </div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2022 Copyright:
    <a class="text-white" href="">rendezvous.com</a>
  </div>
  <!-- Copyright -->
</footer>
<!--
* footer section
*Code taken from: 
https://mdbootstrap.com/docs/standard/navigation/footer/
-->
<!-- Footer -->




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


