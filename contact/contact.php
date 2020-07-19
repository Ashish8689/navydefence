<?php

include "connection.php";
 
 if(isset($_POST['submit'])){
  $name = $_REQUEST['name'];
  $lname = $_REQUEST['Lname'];
  $email = $_REQUEST['email'];
  $mob = $_REQUEST['mobile'];
  $comment = $_REQUEST['comment'];

  $insertQuery = "insert into query (name,last,email,mobile,comment) values ('$name','$lname','$email','$mob','$comment')";

  $call = mysqli_query($con,$insertQuery);

  if($call){
  	$mess = "<div class='alert alert-success alert-dismissible fade show' role='alert'><p>Data successfully added</p></div>";
  }
  else{
  	$mess = "<div class= 'alert alert-danger alert-dismissible fade show'><p>Not added</p></div>";
  }
 }
?>


<!DOCTYPE html>
<html>
<head>
  <title>Contact Us</title>

  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" type="text/css" href="../css/main.css">
    <link rel="stylesheet" type="text/css" href="../css/contact.css">
    <link rel="stylesheet" type="text/css" href="../css/responsive.css">

    <!-- Animation link -->
    <link rel="stylesheet" href="../js/Plugin/aos-master/dist/aos.css" />

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href=https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css>

</head>

<body>
    
    <!-- ************  Navbar ************* -->

    <div class="logo">
      <div class="left" data-aos="fade-right" data-aos-duration="700">
          <img src="../images/logo/navy.png">
      </div>
        <h1 data-aos="fade-down" data-aos-duration="600" data-aos-delay="300">Indian Navy</h1>
        <h4 data-aos="fade-up" data-aos-duration="600" data-aos-delay="300">Government of india</h4>
      <div class="right" data-aos="fade-left" data-aos-duration="700">
        <img src="../images/logo/smj.png">
      </div>
    </div>

<!-- ***********************   NavBar Start   ******************************* -->

    <div class="navbar">  
      <ul class="nav-link">
        <li><a href="../index.html">Home</a></li>
        <li><a href="">Career & Job </a> <i class="fa fa-angle-right"></i>
                   <ul>
                      <li>Become an Officer <i class="fa fa-angle-right"></i>
                      <ul>
                      <li><a href="../carrer/officer/executive/executive.html">Executive</a></li>
                      <li><a href="../carrer/officer/engineering/engineering.html">Engineering</a></li>
                      <li><a href="../carrer/officer/electrical/electrical.html">Electrical</a></li>
                      <li><a href="../carrer/officer/education/education.html">Education</a></li>
                  </ul></li>

                      <li>Become a Salior</li>
                      <li><a href="../carrer/WomenNavy.html">Women in Navy</a></li>
                  </ul></li>

        <li><a href="">about</a>  <i class="fa fa-angle-right"></i>
                  <ul>
                      <li><a href="../about/ChiefNavy.html">Leaders of Navy</a></li>    
                      <li><a href="../about/Rank/RankAndInsignia.html">Rank And Insignia</a></li>
                      <li><a href="../about/gallery/gallery.html">Gallery</a></li>
                      <li><a href="../about/location.html">Locations</a></li>
                  </ul></li>

        <li><a href="">Join Navy</a> <i class="fa fa-angle-right"></i>
                  <ul>
                      <li><a href="../join/WhyNavy.html">Why to Join ?</a></li>
                      <li><a href="../join/WhyNavy.html">Why do we need Navy</li>
                      <li>Benefits
                          <ul>
                              <li><a href="../join/BenefitOfficer.html">Officer</a></li>
                              <li><a href="../join/BenefitSailor.html">Sailor</a></li>
                          </ul>
                      </li>
                  </ul></li>

        <li><a href="">Inside Navy </a> <i class="fa fa-angle-right"></i>
                  <ul>
                    <li><a href="../insideNavy/LifeInNavy.html">Life at Sea</a></li>
                    <li><a href="../insideNavy/LifeInNavy.html">Life on Submarine</a></li>
                    <li><a href="../insideNavy/LifeInNavy.html">Life on Ship</a></li>
                    <li><a href="../insideNavy/LifeInNavy.html">Life after Navy</a></li>
                    <li><a href="../insideNavy/LifeInNavy.html">Facilities</a></li>
                  </ul></li>
        <li><a href="">Contact Us</a></li>
      </ul>
      
      <div class="hamburger">
        <div class="line1"></div>
        <div class="line2"></div>
        <div class="line3"></div>
     </div>

     <p class="menu">Menu</p>
    </div>  

<!-- ***********************   NavBar End   ******************************* -->


  <!-- *************  Contact Form  ***************** -->

    <div class="container-contact100">
      <div class="wrap-contact100">

        <div class="left-container">
          <!-- <h1>Call</h1> -->
          <div class="symbol py-2 d-flex align-items-center">
            <i class="fa fa-phone mr-3"></i>
            <h3>1800-419-2929 (EXT. 7)</h3>
          </div>
      </div>

<!--   *************************   Form   ************************************* -->


        <form class="contact100-form validate-form" method="POST" action="">
            <span class="contact100-form-title">
              Get in touch
            </span>

          <div class="wrap-input100 validate-input" data-validate = "Name is required">
            <input class="input100" type="text" name="name" placeholder="Name">
            <span class="focus-input100"></span>
            <span class="symbol-input100">
              <i class="fa fa-user" aria-hidden="true"></i>
            </span>
          </div>

          <div class="wrap-input100 validate-input" data-validate = "Name is required">
            <input class="input100" type="text" name="Lname" placeholder="LastName">
            <span class="focus-input100"></span>
            <span class="symbol-input100">
              <i class="fa fa-user" aria-hidden="true"></i>
            </span>
          </div>

          <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
            <input class="input100" type="text" name="email" placeholder="Email">
            <span class="focus-input100"></span>
            <span class="symbol-input100">
              <i class="fa fa-envelope" aria-hidden="true"></i>
            </span>
          </div>

          <div class="wrap-input100 validate-input" data-validate = "Name is required">
            <input class="input100" type="text" name="mobile" placeholder="Mobile No">
            <span class="focus-input100"></span>
            <span class="symbol-input100">
              <i class="fa fa-mobile" aria-hidden="true"></i>
            </span>
          </div>

          <div class="wrap-input100 validate-input" data-validate = "Message is required">
            <textarea class="input100" name="comment" placeholder="Message"></textarea>
            <span class="focus-input100"></span>
          </div>

          <?php if(isset($mess)){echo $mess;} ?>

          <div class="container-contact100-form-btn">
            <button class="contact100-form-btn" name="submit">
              Send
            </button>
          </div>
        </form>
      </div>
    </div>






 <!-- ************  footer  ************ -->
  <footer class="footersection" id="footerid">

  <div class="row px-5">
     <div class="col-lg-2 col-md-2 col-sm-6 px-0 d-flex justify-content-center align-items-center">
         <img src="../images/footer/india.png" class="img-fluid">
     </div>

     <div class="col-lg-10 col-md-10 col-sm-6 px-0 d-flex justify-content-center align-items-center">

          <h5 class="footer">Copyright @2020 All rights reserved! This Website is made by Ashish.</h5>

      </div>
  </div>  

        <div class="scrolltop float-right">
            <i class="fa fa-arrow-up" onclick="topfunction()" id="mybtn"></i>
        </div>
    </div>
</footer>


    <script src="https://kit.fontawesome.com/f723055c76.js"></script>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="js/carofresdhel.js" type="text/javascript"></script>
    
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <script src="../js/Plugin/aos-master/dist/aos.js"></script>
    

   <!-- ******   Javascript File *******   -->
   <script src="../js/main.js"></script>


</body>
</html>

