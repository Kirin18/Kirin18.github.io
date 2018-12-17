<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>List of Rental Fees</title>

     <link rel="stylesheet" href="jquery-ui.css" >
     <link rel="stylesheet" href="nav.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <link rel="stylesheet" href="Rental2.css">
     <link href="https://fonts.googleapis.com/css?family=Permanent+Marker|Teko" rel="stylesheet">
  </head>
     <style>
     body,h1,h2,h3,h4,h5,h6,label,div,input {font-family: 'Teko', sans-serif;
     margin:0;}
     body{font-size:25px; background-color:#dadada;}
     </style>
  <div  class="header">
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
  <h1 id="title">List of Equipment Rental Fees</h1>
  <body>

    <h2 class="demoHeaders">Equipments:</h2>
  <div id="accordion">
  	<h3>Broom/Mop   <img src="images/sweep.png" alt=""></h3>
  	<div >RM1 per day <br> RM5 per week
     </div>
  	<h3>Chair 10pcs     <img src="images/chair.png" alt=""></h3>

  	<div>RM5 per day <br> RM30 per week </div>
    <h3>Table 5 pcs     <img src="images/table.png" alt=""></h3>

    <div> RM5 per day <br> RM30 per week </div>

    <h3>Speaker     <img src="images/speaker.png" alt=""></h3>

  	<div> RM10 per day <br> RM55 per week </div>
    <h3>Projector     <img src="images/projector.png" alt=""></h3>
    <div> RM10 per day <br>RM60 per week </div>
    <h3>*All equipments depend on its availability.   Note: Click here to proceed next page</h3>

    <form action="book-equipments.php">
     <input type="submit" class="form-submit-button" value="Proceed to booking" style="font-family: 'Teko', sans-serif;
     margin:0;"></form>
   </div>
      </div>


<script src="external/jquery/jquery.js"></script>
<script src="jquery-ui.js"></script>
<script src="Accordion.js"></script>
<br>

  </body>



        <script src="external/jquery/jquery.js"></script>
        <script src="jquery-ui.js"></script>
        <script>
        $( function() {
        		$( "#datepicker,#datepicker2").datepicker({
        			showOn: "button",
        			buttonImage: "images/calendar.png",
        			buttonImageOnly: true,
        			buttonText: "Select date"
        		});
        	} );
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
</html>
