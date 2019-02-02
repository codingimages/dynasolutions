<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="description" content="At dynasolutions.com we do building services about cleaning, painting, maintenance and much more.">
  <meta name="keywords" content="cleaning services" "building cleaning and more">
  <meta name="author" content="dynasolutions.com">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
  <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="button.css">
  <link href="https://fonts.googleapis.com/css?family=Noto+Sans" rel="stylesheet">
  <link rel="shortcut icon" type="image/png" href=img/favicon.png>
  <title>Dyna Solutions</title>
  <style>
    body {
      background-color: white;
    }

    .container {
      max-width: 760px;
    }

    span {
      color: #d60000;
    }

    .contact-form {
      background-position: center;
      background-size: cover;
      border-radius: 5px;
    }
  </style>
</head>

<body>

  <!-- Navbar start -->
  <nav class="navbar fixed-top navbar-expand-md  navbar-light lead">
      <img src="img/logoalone.png" width="30" height="30" class="d-inline-block align-middle" alt="logo">
      <a class="navbar-brand text-dark nav-title" href="index.html">Dyna Solutions</a>
    
        <!-- Responsive button -->
        <button class="navbar-toggler text-dark" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
          aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
    
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="index.html">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="nosotros.html">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="servicios.html">Services</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="aplicar.php">Jobs</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.php">Contact</a>
            </li>
          </ul>
        </div>
      </nav>
      <!-- Navbar end -->

  <!-- Jumbotron showcase -->
  <section class="empleos__display">
      <div class="empleos__display__picture">
        <div class="container empleos__display__text">
          <h1 class="display-5 text-light">Looking for a job?</h1>
          <p class="lead text-light">You can apply from here</p>
          <button type="button" class="btn btn-info">
            <a class="text-light" href="#apply">Apply</a>
          </button>
        </div>
      </div>
    </section>
  <!-- Jumbotron showcase ends-->

  <!-- Section informativa -->
  <section class="container" id="apply">
    <h1 class="text-info mt-5">
      <strong>Simple to apply</strong>
    </h1>
    <h2 class="text-dark mt-5 mb-5">Send us your info along with a resume</h2>
    <p class="lead mb-5">Dyna Solutions Building Services offer jobs with benefits for those who want to apply.</p>
    <p class="lead mb-5">If you have read the<a class="text-info" href="servicios.html"> services that we provide</a>, and have similar working experience, you are welcome to to apply</p>
    <p class="lead mb-5">Easy to apply, just fill out the requested information and upload your resume.  We will call you soon.</p>
  </section>

  <div class="section container mb-5">
    <h4>Attaching your resume is mandatory, system won't process the request if your resume is not attached.  Otherwise call us<a class="text-info"href="#tel"> here</a>.</h4>
  </div>

  <!-- Content start -->
  <div class="container mb-5">
    <div class="row">
        <div class="col-md-12">
            <div class="contact-form bg-info text-light mt-3 mb-5 px-4 py-5">
                <h3 class="text-center mb-3">Contact Form</h3>
                <div class="text-center">
                    <?php
                    
                    if(isset($_SESSION['msg'])){
                        echo $_SESSION['msg'];
                        unset($_SESSION['msg']);
                    } else if(isset($_SESSION['msgFields'])){
                        echo $_SESSION['msgFields'];
                        unset($_SESSION['msgFields']);
                    }
                    
                    ?>
                </div>
                <form action="SendGrid-API/f_process2.php" method="post" enctype="multipart/form-data">
                    <div class="row mb-3">
                        <div class="form-group col-md-6">
                            <label for="Name">Name<span>*</span></label>
                            <input type="text" name="name" class="form-control bg-dark text-white">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="Phone">Phone<span>*</span></label>
                            <input type="text" name="phone" class="form-control bg-dark text-white">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-12">
                            <label for="Email">EMail<span>*</span></label>
                            <input type="text" name="email" class="form-control bg-dark text-white">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-12">
                            <label for="Name">Message<span>*</span></label>
                            <textarea name="message" id="" cols="30" rows="10" class="form-control bg-dark text-white"></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-12">
                            <label for="File">Document (Resume)<span>*</span></label><br>
                            <input type="file" name="file" class="file"><br>
                            <span class="text-muted">
                                <?php
                                if(isset($_SESSION['msgFile'])){
                                    echo $_SESSION['msgFile'];
                                    unset($_SESSION['msgFile']);
                                }
                                ?>
                            </span>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-dark">Send</button>
                </form>
            </div>
        </div>
    </div>
</div>
  <!-- Content ends -->
 
  <!-- footer start -->
  <footer class="footer text-white bg-dark pt-5 pb-5">
    <div class="container">
      <div class="row">
        <div class="text-info col col-12 col-md-4">
          <h5>
            <strong>Navigation</strong>
          </h5>
          <a class="text-info" href="index.html">Home</a>
          <br>
          <a class="text-info" href="nosotros.html">About Us</a>
          <br>
          <a class="text-info" href="servicios.html">Services</a>
          <br>
          <a class="text-info" href="aplicar.php">Jobs</a>
          <br>
          <a class="text-info" href="contact.php">Contact</a>
          <br>
          <br>
        </div>
        <div class="text-info col col-12 col-md-4">
          <h5>
            <strong>Contact #1</strong>
          </h5>
          <a class="text-info" href="mailto:antoniogomez@yahoo.com">Email Antonio</a>
          <br>
          <a class="text-info" href="tel:3012634991">Call Antonio</a>
          <br>
        </div>
        <div class="text-info col col-12 col-md-4">
          <h5>
            <strong>Contact #2</strong>
          </h5>
          <a class="text-info" href="mailto:antoniogomez@yahoo.com">Email Fernando</a> 
          <br>
          <a class="text-info" href="tel:2022881554">Call Fernando‬</a>
          <br>
        </div>
      </div>
    </div>

      <section class="emergency">
        <div class="container">
          <p class="lead text-danger">For emergencies regarding our services please call<br> <a class="text-info text-center" href="tel:3012634991">(301) 263-4991‬</a></p>
        </div>
      </section>

    <div class="container">
      <div class="row">
        <div class="col col-12">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3098.7605837138326!2d-77.3049136846453!3d39.04357787954836!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b6314c1c3657a5%3A0xdd5f047b6ea69e9d!2s2+Jefferson+Run+Rd%2C+Great+Falls%2C+VA+22066!5e0!3m2!1sen!2sus!4v1527615737242" width="300" height="225" frameborder="0" style="border:0" allowfullscreen></iframe>
          <div class="col col-12 col-md-12 mt-2 mb-2">
            <h5>
              <strong>We appreciate your business</strong>
            </h5>
            <p id=pfooter> <a class="text-info"  href="contact.php" >Call or contact us.</a></p>
          </div>
        </div>
      </div>
    </div>

      <div class="footer-copyright">
        <div class="container">
          © 2018 All right reserved
          <a class="text-info" href="index.html">Dyna Solutions Building Services</a>
        </div>
      </div>
  </footer>
  <!-- footer ends -->


  <!-- back to top button -->
  <button onclick="topFunction()" id="myBtn" title="Go to top">
    <i class="fa fa-arrow-up text-info"></i>
  </button>
  <script>
    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function () {
      scrollFunction()
    };

    function scrollFunction() {
      if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("myBtn").style.display = "block";
      } else {
        document.getElementById("myBtn").style.display = "none";
      }
    }

    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
      document.body.scrollTop = 0;
      document.documentElement.scrollTop = 0;
    }
  </script>
  <!-- back to top button ends -->

</body>

<!-- bootstrap jquery plugins -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
<!-- bootstrap jquery plugins ends-->

<!-- Forked toggler button -->
<script>
  $(document).ready(function(){
    $('.navbar-toggler').html('<i class="fa fa-chevron-circle-down"></i>');
  })
</script>

</html>