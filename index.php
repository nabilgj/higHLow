<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="description" content="Highlow Guitar is all about customizing your Electric, Acoustic and Bass Guitars. You can select from a wide range of guitar size, type, body wood, neck wood, fingerboard material, nut material, knob styling.">

  <link rel="shortcut icon" href="images/favicon.ico">

  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css"> -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="./css/animatecss/animate.css">  

  <link rel="stylesheet" href="./css/style.css">
  
  <title> higHLow Guitars | Home Page </title>

</head>

<body data-spy="scroll" data-target="#navbarResponsive">

<!-- start home -->

<div id="home">
  <!-- Navigation start -->
    <nav class="navbar navbar-expand-md fixed-top">
      <div class="container-fluid">
          <a class="navbar-brand" href="#">HL</a>
          <!-- <img src="./images/logo.png"> -->
          <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarResponsive">
            <span class="custom-toggler-icon"><i class="fas fa-bars"></i></span>
          </button>
        
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" href="./index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#about">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#guitars">Guitars</a>
              </li>

              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" style="color: #88d5e9;" data-toggle="dropdown"><span style="color: blanchedalmond;">Customization</span>
                </a>
                <ul class="dropdown-menu">
                  <li><a href="./electric.php" class="nav-link">Electric Guitar</a></li>
                  <li><a href="./acoustic.php" class="nav-link">Acoustic Guitar</a></li>
                  <li><a href="./bass.php" class="nav-link">Bass Guitar</a></li>
                </ul>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="./order.php">Order</a>
              </li>
          </ul>
        </div>

      </div>
  </nav><!-- Navigation end -->

  <!-- image for home page-->
  <div class="landing">
    <div class="home-wrap">
      <div class="home-inner">
      </div>
    </div>
  </div>

  <!-- title text for home page-->
  <div class="caption text-center">
    <div class="os-animation" data-animation="fadeInUp" data-delay=".5s">
      <h1>hig <span class="captionH">H</span><span class="captionL">L</span> ow</h1>
    </div>

    <div class="os-animation" data-animation="fadeInDown" data-delay=".5s">
      <h3>Pull Your Strings</h3>
    </div>

    <div class="os-animation" data-animation="fadeIn" data-delay="1s">
      <a class="btn btn-lg" href="#guitars">Pull Now</a>
    </div>
  </div>

  <!-- bottom arrow for home page-->
  <!-- <a class="down-arrow" href="#about">
    <div class="arrow bounce d-none d-md-block">
      <i class="fas fa-angle-down" aria-hidden="true"></i>
    </div>
  </a> -->

</div><!-- end home -->


<!-- start about -->
<div id="about" class="offset">
  <div class="narrow">
    
    <div class="row">
      <div class="col-12">
        <h2 class="text-center">Something About Us!</h2>
      </div>
    </div>

    <div class="row">
      <div class="col-sm-12 col-md-6">
        <img src="./images/guitar3.jpg" class="about-image">
      </div>
      <div class="col-sm-12 col-md-6 about-text">
        <p> higHLow Guitars was founded in 2005 by Victor Badillio and since then higHLow is leading global 
            custom guitar builder.</p>

        <p> We are specialized in electric, acoustic and bass guitars. We use very sophisticated advance technology 
            like computer mills, lasers and other high-tech tools. Today higHLow is widely recognized throughoutout the
            musical instrument industry as the visionary guitar customizer.</p>

          <div class="os-animation text-center" data-animation="fadeIn" data-delay="1s">
            <a class="btn btn-lg" href="#guitars">Pull Now</a>
          </div>
      </div>
    </div>


  </div>
</div><!-- end about -->


<!-- start guitars -->
<div id="guitars" class="offset">
  <div class="container">

    <div class="row">
      <div class="col-12 text-center">
        <h2>HigHLow Guitars</h2>
      </div>
    </div>

    <div class="row">

      <div class="col-sm-12 col-md-4 guitar">
        <img src="./images/e8.jpg" alt="Avatar" class="image" style="width:100%">
        <div class="middle">
          <a class="btn-lg" href="./electric.php">Electric</a>
        </div>
      </div>

      <div class="col-sm-12 col-md-4 guitar">
        <img src="./images/a1.jpg" alt="Avatar" class="image" style="width:100%">
        <div class="middle">
          <a class="btn-lg" href="./acoustic.php">Acoustic</a>
        </div>
      </div>

      <div class="col-sm-12 col-md-4 guitar">
        <img src="./images/b1.jpg" alt="Avatar" class="image" style="width:100%">
        <div class="middle">
          <a class="btn-lg" href="./bass.php">Bass</a>
        </div>
      </div>

    </div>
  </div>
</div><!-- end guitars -->


<footer id="guitars" class="offset">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 text-center" style="color: #36555d;">
        <span style="color: #88d5e9; font-weight: bold;">higHLow </span> &copy; 2019 | All Rights Reserved
      </div>
    </div>
  </div>
</footer>




<script src="./js/jquery-3.3.1.min.js"></script>
<script src="https://use.fontawesome.com/releases/v5.11.2/js/all.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="./main.js"></script>
</body>
</html>