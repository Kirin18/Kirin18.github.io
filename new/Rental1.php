<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>List of Rental Fees</title>

     <link rel="stylesheet" href="jquery-ui.css" >
     <link rel="stylesheet" href="nav.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <link rel="stylesheet" href="BVenue.css">
     <link href="https://fonts.googleapis.com/css?family=Permanent+Marker|Teko" rel="stylesheet">

     <style>
     body,h1,h2,h3,h4,h5,h6,label,div {font-family: 'Teko', sans-serif;
     margin:0;}
     body{font-size:23px; background-color:#dadada;}
     </style>
  </head>  <div  class="header">
  <img src="images/Logo.jpeg" style="height:100px">
  </div>
  <nav>
    <div class="navbar">
      <a class="active" href="home.php">Home</a>
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
  <br>
      <div class="box">
  <h1 id="title">List of Venue Rental Fees</h1>
  <body>

    <h2 class="demoHeaders">Venues:</h2>
  <div id="accordion">
    <h3 class="venue">ICC Hall</h3>
    <div><img src="images/cac1.jpg" alt="icc" width="280" height="280"> ;
      <br>RM3250 per day </div>
    <h3 class="venue">Banquet Hall, ICC</h3>
    <div><img src="images/banq.jpg" alt="audi" width="280" height="280">
      <br>RM 450 per day </div>
    <h3 class="venue">Main Auditorium</h3>
    <div><img src="https://i.imgur.com/Ib98q32.jpg" alt="audi" width="280" height="280">
      <br> RM850 per day </div>
    <h3 class="venue">Mini Auditorium</h3>
    <div><img src="images/mini.jpg" alt="audi" width="280" height="280">
      <br> RM300 </div>
    <h3 class="venue">Multipurpose Hall Wadi Budi</h3>
    <div>RM 500 </div>
    <h3 class="venue">SHAHS Mosque</h3>
    <div><img src="images/mosq1.jpg" alt="audi" width="280" height="280">
      <br><em> FREE<em>
      </div>

  </div>
  <h3 class="venue">*All equipments depend on its availability.   Note: Click here to next page</h3>
<div >


  <form action="bookvenue.php">
   <input type="submit" value="Proceed to booking"class="form-submit-button" value="Proceed to booking" style="font-family: 'Teko', sans-serif;
   margin:0;"></form></div>
      </div>


<script src="external/jquery/jquery.js"></script>
<script src="jquery-ui.js"></script>
<script src="Accordion.js"></script>
<br>
<br>
  </body>
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
</html>
