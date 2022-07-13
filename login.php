<?php
session_start();
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" type="text/css" href="css/style.css"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <title>Login</title>
</head>
<body>
    
<?php
 include "nav.php";
?>


<!-- login form -->
<!-- Section: Design Block -->
<section class="background-radial-gradient overflow-hidden">
  <div class="container px-4 py-5 px-md-5 text-center text-lg-start my-5">
    <div class="row gx-lg-5 align-items-center mb-5">
      <div class="col-lg-6 mb-5 mb-lg-0" style="z-index: 10">
        <h1 class="my-5 display-5 fw-bold ls-tight" style="color: hsl(218, 81%, 95%)">
          Login to book appointments<br />
          <span style="color: hsl(218, 81%, 75%)">and manage your account</span>
        </h1>
        <p class="mb-4 opacity-70" style="color: hsl(218, 81%, 85%)">
        Access to this service is strictly for authorised users only.
        Unauthorised access and or use of information may result in 
        legal action being taken, including pursuant to the Computer 
        Misuse Act 1990. For authorised users, by proceeding to access
        and use this service provided by rendezvous and/or the information
        it contains, you agree to any terms of use, notices and policies 
        which are contained or referenced within it or which have otherwise
        been drawn to your attention as an authorised user.
        <!-- Virtually - Login. (n.d.). App.virtually.healthcare. Retrieved April 26, 2022, from 
        https://app.virtually.healthcare/login?_ga=2.8920112.44525974.1650965973-
        1088930553.1650965973  -->
        </p>
      </div>


      <div class="col-lg-6 mb-5 mb-lg-0 position-relative">
        <div id="radius-shape-1" class="position-absolute rounded-circle shadow-5-strong"></div>
        <div id="radius-shape-2" class="position-absolute shadow-5-strong"></div>

        <div class="card bg-glass">
          <div class="card-body px-4 py-5 px-md-5">
          <form action="login_process.php" method="post">
          
          
            <!-- <div class="alert alert-warning alert-dismissible fade show" role="alert"> -->
          
            <?php
if(isset($_SESSION["error_msg"])){
  echo "<p>{$_SESSION["error_msg"]}</p>";
}
?>  
          
                <!-- <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div> -->

              <!-- 2 column grid layout with text inputs for the first and last names -->
              

              <!-- Email input -->
              <div class="form-outline mb-4">
              <label class="form-label" for="email">Email address</label>
                <input name="email" type="email" id="email" class="form-control" />
                <small id="passwordHelpBlock" class="form-text text-muted">
                            Please enter your email address.
                            </small>
              </div>

              <!-- patient number input -->
<div class="form-outline mb-4">
              <label class="form-label" for="number">Patient Number</label>
                <input type="number" id="number" name="number" class="form-control" />
                <small id="passwordHelpBlock" class="form-text text-muted">
                            Please enter your patient number.
                            </small>
              </div>

              <!-- Password input -->
              <div class="form-outline mb-4">
              <label class="form-label" for="password">Password</label>
                <input type="password" id="password" name="password" class="form-control" />
                <small id="passwordHelpBlock" class="form-text text-muted">
                            Please enter your password.
                            </small>
              </div>


              <!-- Submit button -->
              
              <input type="submit" name="login" value="Login" class="btn btn-large btn-primary btn-block">
              
              <hr class="my-4">

             <button class="btn btn-lg btn-primary btn-block"  type="submit"> 
             <img src="img/nhslogo2.png" width="50" class="img-fluid mb-1 mr-2" alt="Web Development">
                Log in with NHS login
            </button>

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Section: Design Block -->
<!--
* Section of code for the navbar.
*Code taken from: 
https://mdbootstrap.com/docs/standard/extended/login/ 
-->
<!-- end of login form -->

<!-- Footer -->

<!-- End of footer -->









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