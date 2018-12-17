<!DOCTYPE html>
<html><head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Home</title>
<link rel="stylesheet" href="home.css">
<link rel="stylesheet" href="nav.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link href="https://fonts.googleapis.com/css?family=Permanent+Marker|Teko" rel="stylesheet">
<link href="jquery-ui.css" rel="stylesheet"></head>
<style>
body,h1,h2,h3,h4,h5,h6,label,div {font-family: 'Teko', sans-serif;
margin:0;}
</style>
<body >
  <div  class="header">
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
<div class="row">
  <div class="column">
    <img src="images/iium_4.jpg" style="height:200px;width:400px">
  </div>
  <div class="column">
    <img src="images/kict.jpg" style="height:200px;width:400px">
  </div>
  <div class="column">
    <img src="images/cac.jpg" style="height:200px;width:400px">
  </div>
  <div class="column">
    <img src="images/kict2.jpg" style="height:200px;width:100%">
  </div>
</div>

  <div class="row">
    <div class="column" style="background-color:#6DDAD4;font-weight:bold">
     Book Venues

     <form action="Rental1.php">
   <input type="submit" class="form-submit-button" value="Book Now!!"style="background-color:#99e5e1;font-weight:bold">
   </form>
    </div>
    <div class="column" style="background-color:#132235;color:white;font-weight:bold">Book Equipments

      <form action="Rental2.php">
      <input type="submit" class="form-submit-button" value="Book Now!!"style="background-color:#364353;font-weight:bold">
      </form>
    </div>
    <div class="column" style="background-color: #6DDAD4;font-weight:bold">Report a Problem (Venue)

      <form action="venue-report.php">
      <input type="submit" class="form-submit-button" value="Report Now!!"style="background-color:#99e5e1;font-weight:bold">
      </form>
    </div>
    <div class="column" style="background-color: #132235;color:white;font-weight:bold">Report a Problem (Equipments)  <form action="equipments-report.php">
      <input type="submit" class="form-submit-button" value="Report Now!!"style="background-color:#364353;font-weight:bold">
      </form></div>
  </div>

<div class="Getintouch" style="background-color:#dadada">
<div style="padding-right:10px;">


  <div   style="font-weight:bold;text-align:center;font-size:80px">
Like what we do?
</div>
<div style="font-weight:bold;text-align:center;font-size:60px">
  Get in touch!
</div>
<form style="font-size:20px;color:black" action="https://mailthis.to/syed.khalid58@yahoo.com"
    method="POST">

<div style="margin:10px;">
<label style="font-size:30px;padding:10px;padding-top:20px;"for="fname">Name:</label>
   <input type="text" id="name" name="firstname"  style="  background-color: #ffffff;
     border-style:solid;
   border-width: 2px;width: 200px;height: 30px;margin-bottom: 10px;
   border-color: #132235;" required="required">
</div>
<div style="margin:10px;">
  <label style="font-size:30px;padding:10px;padding-top:20px;">Email:</label>
  <input type="email" name="email" style="  background-color: #ffffff;
    border-style:solid;
  border-width: 2px;width: 200px;height: 30px;margin-bottom: 1px;
  border-color: #132235;" required="required">
</div>

<div style="margin-bottom: 10px;" >
  <label style="font-size:30px;padding-right:290px;">Message:</label>
<br>
  <textarea id="message" name="message" style="  background-color: #ffffff;
    border-style:solid;
  border-width: 2px;width: 400px;height: 150px;margin-bottom: 10px;margin-left: 35px;
  border-color: #132235;" required="required"rows="4" cols="50"></textarea>
</div>


<input type="submit" class="form-submit-button"  value="Submit"style="background-color:#364353;font-weight:bold;color:white;margin-left:30px;height:50px;width:150px;">
  </form></div>
  <br>
</div>
</body>
      <script src="external/jquery/jquery.js"></script>
      <script src="jquery-ui.js"></script>
      <script>

        function mySubmit() {
            alert("The report was successfully submitted! Thank You!");
        }

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
    <h1 style="color:grey">Connect Us</h1>
    <a href="#" class="fa fa-facebook"></a>
<a href="#" class="fa fa-twitter"></a>
<a href="#" class="fa fa-youtube"></a>
<a href="#" class="fa fa-instagram"></a>
<a href="#" class="fa fa-linkedin"></a>
<a href="#" class="fa fa-reddit"></a>
  </div>

</div>

  </footer>
