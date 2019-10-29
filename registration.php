<?php
   include("dbconfig.php");
if(isset($_POST['submit'])){

  $name = mysqli_real_escape_string($db, $_POST['name']); 

  $father_name = mysqli_real_escape_string($db, $_POST['fname']);

  $email = mysqli_real_escape_string($db, $_POST['email']);

  $contact_number = mysqli_real_escape_string($db, $_POST['mobile']);

  $address1 = mysqli_real_escape_string($db, $_POST['add1']);

   $address2 = mysqli_real_escape_string($db, $_POST['add2']);

   $near = mysqli_real_escape_string($db, $_POST['near']);

   $landmark = mysqli_real_escape_string($db, $_POST['land']);

   $po = mysqli_real_escape_string($db, $_POST['po']);

   $ps = mysqli_real_escape_string($db, $_POST['ps']);

   $dist = mysqli_real_escape_string($db, $_POST['dist']);

   $pin = mysqli_real_escape_string($db, $_POST['pin']);

   $alt_number = mysqli_real_escape_string($db, $_POST['altmobile']);

   $class = mysqli_real_escape_string($db, $_POST['class']);

   $course = mysqli_real_escape_string($db, $_POST['course']);
   


   $sql="INSERT INTO registration (name,father_name,email,contact_number,address1,address2,near,landmark,po,ps,dist,pin,alt_number,class,course) VALUES ('$name','$father_name','$email','$contact_number','$address1','$address2','$near','$landmark','$po','$ps','$dist','$pin','$alt_number','$class','$course')";

   if(!mysqli_query($db,$sql))
   {
      echo "error" .$sql. "<br>" .$db->error;
   }
   else
   {
     // echo "Inserted Successfully";
   }  
  }
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <title>JE Campus</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    
	  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
      <div class="container">
        <a class="navbar-brand" href="index.html">JE<span>CAMPUS</span></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="oi oi-menu"></span> Menu
        </button>

	    

          <div class="collapse navbar-collapse" id="ftco-nav">
          <ul class="navbar-nav ml-auto">
          <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
	          <li class="nav-item"><a href="about.html" class="nav-link">About</a></li>
	          <li class="nav-item active"><a href="registration.php" class="nav-link">Registration</a></li>
	          <li class="nav-item "><a href="login.php" class="nav-link">Login</a></li>
	          <li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>
          </ul>
        </div>


	    </div>
	  </nav>
    <!-- END nav -->
    
    <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('images/bg3.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
          <div class="col-md-9 ftco-animate pb-5">
          	<p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Registration <i class="ion-ios-arrow-forward"></i></span></p>
            <h1 class="mb-3 bread">Registration</h1>
          </div>
        </div>
      </div>
    </section>

		<section class="ftco-section contact-section">
      <div class="container">
        <div class="row d-flex mb-5 contact-info justify-content-center">
        	<div class="col-md-8">
        		
          </div>
        </div>
        <div class="row block-9 justify-content-center mb-5">
          <div class="col-md-8 mb-md-5">
            <h2 class="text-center">Fill up the form below </h2>
             <h5 class="text-center subtitle">(* are mandatory) </h5>
            <form class="form-signin" action="registration.php" method="post">
              <div class="form-label-group">
                <label for="inputEmail">Full Name *</label>
                <input type="text" id="inputEmail" class="form-control" placeholder="Enter Full Name" name="name" required autofocus>
                
              </div>
              <div class="form-label-group">
                <label for="inputEmail">Father's Name *</label>
                <input type="text" id="inputEmail" class="form-control" placeholder="Enter Father's Name" name="fname" required >
                
              </div>
              <div class="form-label-group">
                <label for="inputEmail">Email ID *</label>
                <input type="email" id="inputEmail" class="form-control" placeholder="Enter Email" name="email" required >
                
              </div>
              <div class="form-label-group">
                <label for="inputEmail">Contact Number *</label>
                <input type="text" id="inputEmail" class="form-control" placeholder="Enter Contact Number" name="mobile" required >
                
              </div>
              <div class="form-label-group">
                <label for="inputEmail">Address Line 1 *</label>
                <input type="text" id="inputEmail" class="form-control" placeholder="Enter Address" name="add1" required >
                
              </div>
              <div class="form-label-group">
                <label for="inputEmail">Address Line 2</label>
                <input type="text" id="inputEmail" class="form-control" placeholder="Enter Address" name="add2" >
                
              </div>
              <div class="form-label-group">
                <label for="inputEmail">Near </label>
                <input type="text" id="inputEmail" class="form-control" placeholder="Enter Near" name="near"  >
                
              </div>
              <div class="form-label-group">
                <label for="inputEmail">Landmark </label>
                <input type="text" id="inputEmail" class="form-control" placeholder="Enter Landmark" name="land"  >
                
              </div>
              <div class="form-label-group">
                <label for="inputEmail">Post Office *</label>
                <input type="text" id="inputEmail" class="form-control" placeholder="Enter Post Office" name="po" required >
                
              </div>
              <div class="form-label-group">
                <label for="inputEmail">Police Station *</label>
                <input type="text" id="inputEmail" class="form-control" placeholder="Enter Police Station" name="ps" required >
                
              </div>
              <div class="form-label-group">
                <label for="inputEmail">District *</label>
                <input type="text" id="inputEmail" class="form-control" placeholder="Enter District" name="dist" required >
                 
              </div>
              <div class="form-label-group">
                 <label for="inputEmail">Pin Code *</label>
                <input type="text" id="inputEmail" class="form-control" placeholder="Enter Pin Code" name="pin" required >
                
              </div>
              <div class="form-label-group">
                <label for="inputEmail">Alternate Contact Number *</label>
                <input type="text" id="inputEmail" class="form-control" placeholder="Enter Alternate Mobile Number" name="altmobile" required >
                
              </div>
              <div class="form-label-group">
                <label for="inputEmail">Class *</label> 
                <!-- <input type="text" id="inputEmail" class="form-control" placeholder="Enter Class" name="class" required > -->
                <select class="form-control" placeholder="Enter Class" name="class" required>
                  <option autofocus value="">Select Class</option>
                  <option value="IX">IX</option>
                  <option value="X">X</option>
                  <option value="XI">XI</option>  
                  <option value="XII">XII</option>
                  <option value="others">Others</option>
                </select>
              </div>
              <div class="form-label-group">
                <label for="inputEmail">Course *</label> 
                <!-- <input type="text" id="inputEmail" class="form-control" placeholder="Enter Class" name="class" required > -->
                <select class="form-control" placeholder="Enter Class" name="course" required>
                  <option autofocus value="">Select Course</option>
                  <option value="NEET">NEET</option>
                  <option value="JEE MAIN">JEE MAIN</option>
                  <option value="JEE ADVANCE">JEE ADVANCE</option>  
                  <option value="WBJEEI">WBJEE</option>
                </select>
              </div>
              <div class="form-label-group btnsubmit">
                
                <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit" name="submit">Submit</button>
              </div>
              </div>

            </form>
          </div>
        </div>
      </div>
    </section>

    <footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-2">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">About JE Campus</h2>
              <p>Education is the most powerful weapon which you can use to change the world</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-youtube"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-5">
              <h2 class="ftco-heading-2">Information</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">Term and Conditions</a></li>
                <li><a href="#" class="py-2 d-block">Privacy &amp; Cookies Policy</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Support</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">FAQ</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Have a Questions?</h2>
              <div class="block-23 mb-3">
                <ul>
                  <li><span class="icon icon-map-marker"></span><span class="text">Suri, Birbhum, West Bengal</span></li>
                  <li><a href="#"><span class="icon icon-phone"></span><span class="text">+9434584692</span></a></li>
                  <li><a href="#"><span class="icon icon-envelope"></span><span class="text">jecampus6@gmail.com</span></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> JE Campus All rights reserved | Developed By-Sumitra Sinha M-82580180974 
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>