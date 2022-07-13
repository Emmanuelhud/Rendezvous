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
    


    <?php
    include "navaccess.php";
    ?>

<section class="pt-5">
<div class="container card bg-glass">
  <div class="jumbotron card-body">
    <h1 style="color: #521262;" class="my-5 display-5 fw-bold ls-tight">Booking your appointment</h1>
    <p>Start your booking by selecting which service you want.</p>
    
    
      


    <hr>
        <p id="progressnum" class="fw-bold">Progress - 1/5</p>
        <div class="progress mb-4">
            <div id="progress" class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%; background-color: #521262;"></div>
        </div>
    </div>
</div>


<!-- section start -->
<div class="container mt-4 card bg-glass">
    <div class="card-body">
        <!-- form start -->
        <form >
            <!-- Text input -->
            <div class="form-outline mt-4 mb-4">
                <label class="form-label" for="service">Select a service</label>
                <select onclick="showDiv()" class="form-control custom-select custom-select-lg mb-1">
                    <option selected>Click to select from the list</option>
                    <option value="1">General Health</option>
                    <option value="2">Reproductive Health</option>
                    <option value="3">Mental Health</option>
                    <option value="3">Dermatology</option>
                    <option value="3">Dental</option>
                </select>    
                <small id="passwordHelpBlock" class="form-text text-muted">
                    Select a service from the dropdown.
                </small>
            </div>
            <!-- Text input -->
                <div id="step2" style="display:none; width: 25%;" class="col">
                    <div class="form-outline">
                        <label class="form-label" for="date">Date and Time</label>
                        <div class="input-group date" id="datepicker">
                            <input type="text" id="date" class="form-control"/>
                            <span class="input-group-append">
                                <span style="height: 38px;" class="input-group-text bg-white d-block">
                                    <i class="fa fa-calendar mt-1"></i>
                                </span>
                            </span>
                            <small id="passwordHelpBlock" class="form-text text-muted">
                            Select the box or the calendar to pick a date.
                            </small>
                        </div>
                    </div>
                    <button onclick="availability()" type="button" class="btn btn-outline-success mt-3 mb-2" data-toggle="button" aria-pressed="false" autocomplete="off">
                        Check availability 
                    </button>
                </div>

  <!-- Email input -->
  <!-- <div class="form-outline mb-4">
    <input type="email" id="form6Example5" class="form-control" />
    <label class="form-label" for="form6Example5"></label>
  </div> -->

  <fieldset for="time" class="">
  <div onclick="message()" id="step3" style="display:none;" class="btn-group btn-group-toggle mt-3" data-toggle="buttons">
  <label class="btn btn-secondary">
    <input name="time" type="radio" name="options" id="option1" autocomplete="off" > 11:00
  </label>
  <label class="btn btn-secondary">
    <input name="time" type="radio" name="options" id="option1" autocomplete="off" > 11:15
  </label>
  <label class="btn btn-secondary">
    <input name="time" type="radio" name="options" id="option1" autocomplete="off" > 11:30
  </label>
  <label class="btn btn-secondary">
    <input name="time" type="radio" name="options" id="option2" autocomplete="off"> 12:30
  </label>
  <label class="btn btn-secondary">
    <input name="time" type="radio" name="options" id="option3" autocomplete="off"> 16:15
  </label>
  <br>
  <small id="passwordHelpBlock" class="form-text text-muted">
                    Select an available time that best suits you.
                </small>
</div>
<fieldset>

  <!-- Number input -->
  <!-- <div class="form-outline mb-4">
    <input type="number" id="form6Example6" class="form-control" />
    <label class="form-label" for="form6Example6"></label>
  </div> -->

  <!-- Message input -->
  <div id="step4" onclick="last()" style="display:none;" class="form-outline mb-4 mt-4">
    <label class="form-label" for="reason">Why are you booking an appointment?</label>
    <textarea class="form-control" id="form6Example7" rows="4"></textarea>
    <small id="passwordHelpBlock" class="form-text text-muted">
    Breifly give an explanation of your condition. If applicable, mention when symptoms started and what medical was taken.
    </small>
  </div>

  <!-- Checkbox -->
  <!-- <div class="form-check d-flex justify-content-center mb-4">
    <input class="form-check-input me-2" type="checkbox" value="" id="form6Example8" checked />
    <label class="form-check-label" for="form6Example8"> Create an account? </label>
  </div> -->
  <div id="step5" onclick="complete()" style="display:none;" class="form-outline mt-4 mb-4">
    <label for="doctor">Select a doctor</label>
    <select multiple class="form-control" id="exampleFormControlSelect2">
      <option>Dr Matt Murdock</option>
      <option>Dr Frank Castle</option>
      <option>Dr Amy Fowler</option>
      <option>Dr Wanda Maximoff</option>
      <option>Dr Mark Naird</option>
    </select>
    <small id="passwordHelpBlock" class="form-text text-muted">
                    Select from the list of available doctors available at this time for the specified service.
                </small>
  </div>
  <!-- Submit button -->
  <!-- <button id="step6" style="display:none; background-color: #521262;" type="submit" class="btn text-white btn-block mb-4">Confirm Booking</button> -->
  <a href="confirm.php">
<button id="step6" style="display:none; background-color: #521262;"  class="btn text-white pull-right mr-5 mb-5">
<a href="confirm.php">Confirm Booking</a></button>
</a>
</form>
<!-- form end -->
        </div>
    </div>
<!--
* Section of code for the form structure adn layout.
*Code taken from: 
https://mdbootstrap.com/docs/standard/forms/overview/
-->
<!-- section end -->
   

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
    <script src="js/main.js"></script>
</body>
</html>