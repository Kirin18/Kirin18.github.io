<!DOCTYPE html>
<html>
<title>About Us</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="aboutus.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="nav.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Permanent+Marker|Teko">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: 'Teko', sans-serif;margin:0;}
</style>
<body class="light-grey">
  <div style="font-family: 'Permanent Marker', cursive;" class="header">
  <img src="images/Logo.jpeg" style="height:100px">
  </div>

  <nav>
    <div class="navbar">
      <a class="active" href="home.html">Home</a>
    <a href="gallery.php">Gallery</a>
      <a href="aboutus.php">About Us</a>
      <div class="dropdown">
      <button class="dropbtn">Services

      </button>
      <div class="dropdown-content">
        <a href="Rental1.php">Book Venues</a>
        <a href="Rental2.php">Book Equipments</a>
        <a href="venue-report.php">Report a Problem with Venues</a>
        <a href="equipments-report.php">Report a Problem with Equipments</a>
      </div>

    </div>

    </div>
  </nav>

<div class="whole">
  <div id="about-us">
    <div class="center">
      <h1>About Us</h1>
      <h4>Our Website aims to provide a platform for
        IIUM students and staffs to be able to book venues around IIUM and equipments that are made available by Daya Bersih.
        The existing system requires student to student to send a physical form to the office,hence our website increases the efficiancy by performing all the tasks online.  </h4>
  </div>
  </div>
  <div id="Our-Team" >
    <div class="center clearfix" >
      <h1>Our Team</h1>
      <div class="row" style="padding-left: 170px">
  <div class="column">
    <div class="card">
      <img class="kimg" src="khalid.jpeg" alt="Khalid" style="width:100%">
      <div class="container">
        <h2>Syed Khalid</h2>
        <p class="title">CEO &amp; Founder</p>
        <p> "We are very concerned about the problems faced by students when booking venue and equipments"</p>
        <p>syedkhalid@gmail.com</p>
        <a id="link"href="https://mail.google.com/mail/u/0/#compose">Contact Now!!</a>


      </div>
    </div>
  </div>

  <div class="column" >
    <div class="card" >
      <img class="kimg"src="Murshyid.jpg" alt="Muced" style="width:100%">
      <div class="container">
        <h2>Murshyid Nordin</h2>
        <p class="title">Designer and System Analyst</p>
        <p>"A simple design to ease everyones access to the website"</p>
        <p>murshyidnordin@gmail.com

        </p><br>
        <a id="link" href="https://mail.google.com/mail/u/0/#compose">Contact Now!!</a>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="acard", id="adam">
      <img class="kimg"src="adam.jpg" alt="Adam" style="width:100%">
      <div class="container">
        <h2>Adam Khalid</h2>
        <p class="title">General Manager</p>
        <p>"We worry about the IIUM communities satisfaction"</p>
        <p>adamkhalid@gmail.com</p>
        <a id="link" href="https://mail.google.com/mail/u/0/#compose">Contact Now!!</a>
      </div>
    </div>
  </div>


</div></div>
  </div>
  </div>

  <script src="external/jquery/jquery.js"></script>
    <script src="jquery-ui.js"></script>
<script>

        var yourNavigation = $(".navbar");
            stickyDiv = "sticky";
            yourHeader = $('.header').height();

        $(window).scroll(function() {
          if( $(this).scrollTop() > yourHeader ) {
            yourNavigation.addClass(stickyDiv);
          } else {
            yourNavigation.removeClass(stickyDiv);
          }
        });



</script>

<footer style="font-size:20px">
  <div class="rowx" >
  <div class="columnx" style="background-color:#132235;color:black"><hr>
    <div class="columny">
    <h2 style="color:grey">Gallery</h2>
    <a href="gallery.php">Gallery</a>
    <br>
      <h2 style="color:grey">About Us</h2>
    <a href="aboutus.php">About us</a>
    </div>
    <h2 style="color:grey">Home</h2>
    <a href="home.php">Home</a><br>

    <h2 style="color:grey">Services</h2>
    <a href="Rental1.php">Book Venues</a>
    <br>
      <a href="Rental2.php">Book Equipments</a>
        <br>

      <a href="venue-report.php">  Report a Problem with Venues</a>
        <br>
      <a href="equipments-report.php">Report a Problem with Equipments</a>


  </div>

    <div class="columnx" style="background-color:#132235;color:black"><hr>
    <h1 style="color:grey">Connect With Us</h1>
    <a href="#" class="fa fa-facebook"></a>
<a href="#" class="fa fa-twitter"></a>
<a href="#" class="fa fa-youtube"></a>
<a href="#" class="fa fa-instagram"></a>
<a href="#" class="fa fa-linkedin"></a>
<a href="#" class="fa fa-reddit"></a>
  </div>

</div>

  </footer>
</body>
</html>
