<?php 

$servername = "x40p5pp7n9rowyv6.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
$username = "snpo2g0p2ngjlmbs";
$password = "wx0zgk8wd2tq0p0o";
$database = "rs732wrr0jhwthb9";

$email="";
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
  $email = $_POST['email'];
  $conn = new mysqli($servername, $username, $password, $database);
  $cmd ="INSERT into reg value('$email');";
  if(mysqli_query($conn,$cmd))
  {
    echo "<script type=text/javascript>alert('Successful');</script>";
  }
  else
  {
    echo "<script type=text/javascript>alert('Failed');</script>";
  }
} 
  
?>


<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Crea8 Child</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap-grid.css" />
    <link rel="stylesheet" href="css/styles.css" />
  </head>
  <body>

    <nav class="backg">
      <div class="wrapper d-flex py-3 justify-content-between">
        <div class="my-auto">
          <img src="svg\baby.svg" alt="" class="mr-2 baby">
          <img src="svg/logo-text.svg" alt="" class="logo-text">
        </div>

        <div class=" my-auto">
          <a href="#subscribe" class="get">Get early access</a>
        </div>
      </div>
    </nav>

    <div class="wrapper d-flex justify-content-between">
      <div class="">
        <div class="">
          <h1 class="title">Crea<span class="eight">8</span> Child</h1>
        </div>
        <div class="">
          <p class="det">
            Your perfect design of a perfect baby within minutes
          </p>
        </div>
      </div>

      <div class="">
        <img src="svg/A.svg" alt="" class="ppl" />
      </div>
    </div>

    <div class="bg-pink">
      <p class="for wrapper">For couples who want to design their own babies</p>
    </div>

    <div class="bg-fc pb-5">
      <div class="wrapper d-flex justify-content-between pt-5 ">
        <div class="">
          <p class="more">
            Create the ultimate shopping experience designing your own baby
          </p>
          <img src="svg/stroller.svg" alt="" class="stroll" />
        </div>

        <div class="box">

        </div>
      </div>
    </div>

    <div class="works">
      <h3 class="works-how mt-0">How it works</h3>
      <div class="wrapper">
        <div class="d-flex justify-content-between">
          <div class="mr">
            <div class="">
              <img src="svg\des.svg" alt="" class="des ml" />
            </div>
            <p class="works-title">Design with our App</p>
            <p class="works-body">
              Design your baby and select the features you want with our
              powerful app. No training required, Just drag & drop.
            </p>
          </div>
          <div class="mr">
            <div class="">
              <img src="svg\conn.svg" alt="" class="con ml" />
            </div>
            <p class="works-title">Connect to your lab</p>
            <p class="works-body">
              Connect your design to your laboratory for authentication and
              further processes. Crea8 Service Designer and Data Server
              generator will help you.
            </p>
          </div>
          <div class="">
            <div class="">
              <img src="svg\scan.svg" alt="" class="scan ml" />
            </div>
            <p class="works-title">Scan QR code and send</p>
            <p class="works-body">
              Crea8 can be easily tested and deployed by scanning a QR code .
              You can share the link or QR code. Your physician can join the app
              from that link.
            </p>
          </div>
        </div>
      </div>
    </div>

    <div class="bg-pink mt-0">
      <p class="for wrapper">App to be released in Fall 2021</p>
    </div>

    <div class="wrapper" id="subscribe">
      <div class="">
        <p class="inform">Be the first to know by joining our mailing list</p>
      </div>

      <form method="post" action="index.php">
        <input
          type="email"
          name="email"
          placeholder="Email Address"
          class="d-block input-email py-3 px-2"
        />
        <input
          name="name" 
          type="submit"
          value="Subscribe"
          class="d-block btn-submit mt-3"
        />
      </form>
    </div>

    <footer class="">
      <div class="d-flex justify-content-center pt-5">
        <div class="">
          <img src="svg/insta.svg" alt="" class="social mr-4" />
        </div>
        <div class="">
          <img src="svg/fb.svg" alt="" class="social mr-4" />
        </div>
        <div class="">
          <img src="svg/twt.svg" alt="" class="social mr-4" />
        </div>
        <div class="">
          <img src="svg/yt.svg" alt="" class="social mr-4" />
        </div>
      </div>

      <div class="pb-5">
        <p class="foot-text">© 2020 Crea8 Child - All rights reserved.</p>
      </div>
    </footer>

    <script src="js/gsap.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>
