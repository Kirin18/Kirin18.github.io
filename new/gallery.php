<!DOCTYPE html>
<html>
<title>Gallery</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="gallery.css">
<link rel="stylesheet" href="nav.css">
<link href="https://fonts.googleapis.com/css?family=Permanent+Marker|Teko" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>

body,h1,h2,h3,h4,h5,h6 {font-family: 'Teko', sans-serif;margin:0;}
</style>
<body class="light-grey">
  <div style="font-family: 'Permanent Marker', cursive;" class="header">
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
    </div>


  <div id="Gallery">
    <div class="center">
  <h1>Gallery</h1>

  <div class="row">
    <div class="column">
      <a href="#img1">
      <img src="images/uia8.jpg" style="width:100%">
    </a>
      <a href="#_" class="lightbox" id="img1">
        <img src="images/uia8.jpg">
      </a>
      <a href="#img2">
      <img src="images/Noimage.png" style="width:100%">
    </a>
      <a href="#_" class="lightbox" id="img2">
        <img src="images/Noimage.png">
      </a>
      <a href="#img3">
      <img src="images/Noimage.png" style="width:100%">
    </a>
      <a href="#_" class="lightbox" id="img3">
        <img src="images/Noimage.png">
      </a>
      <a href="#img4">
      <img src="images/Noimage.png" style="width:100%">
    </a>
      <a href="#_" class="lightbox" id="img4">
        <img src="images/Noimage.png">
      </a>
      <a href="#img5">
      <img src="images/Noimage.png" style="width:100%">
    </a>
      <a href="#_" class="lightbox" id="img5">
        <img src="images/Noimage.png">
      </a>
      <a href="#img6">
      <img src="images/Noimage.png" style="width:100%">
    </a>
      <a href="#_" class="lightbox" id="img6">
        <img src="images/Noimage.png">
      </a>

     </div>
    <div class="column">
      <a href="#img7">
      <img src="images/Noimage.png" style="width:100%">
    </a>
      <a href="#_" class="lightbox" id="img7">
        <img src="images/Noimage.png">
      </a>
      <a href="#img8">
      <img src="images/Noimage.png" style="width:100%">
    </a>
      <a href="#_" class="lightbox" id="img8">
        <img src="images/Noimage.png">
      </a>
       <a href="#img9">
        <img src="images/Noimage.png" style="width:100%">
      </a>
        <a href="#_" class="lightbox" id="img9">
          <img src="images/Noimage.png">
        </a>  <a href="#img10">
          <img src="images/Noimage.png" style="width:100%">
        </a>
          <a href="#_" class="lightbox" id="img10">
            <img src="images/Noimage.png">
          </a>  <a href="#img11">
            <img src="images/Noimage.png" style="width:100%">
          </a>
            <a href="#_" class="lightbox" id="img11">
              <img src="images/Noimage.png">
            </a>
             <a href="#img12">
              <img src="images/Noimage.png" style="width:100%">
            </a>
              <a href="#_" class="lightbox" id="img12">
                <img src="images/Noimage.png">
              </a>
    </div>
    <div class="column">
      <a href="#img13">
       <img src="images/Noimage.png" style="width:100%">
     </a>
       <a href="#_" class="lightbox" id="img13">
         <img src="images/Noimage.png">
       </a>
       <a href="#img14">
        <img src="images/Noimage.png" style="width:100%">
      </a>
        <a href="#_" class="lightbox" id="img14">
          <img src="images/Noimage.png">
        </a>
        <a href="#img15">
         <img src="images/Noimage.png" style="width:100%">
       </a>
         <a href="#_" class="lightbox" id="img15">
           <img src="images/Noimage.png">
         </a>
         <a href="#img16">
          <img src="images/Noimage.png" style="width:100%">
        </a>
          <a href="#_" class="lightbox" id="img16">
            <img src="images/Noimage.png">
          </a>
          <a href="#img17">
           <img src="images/Noimage.png" style="width:100%">
         </a>
           <a href="#_" class="lightbox" id="img17">
             <img src="images/Noimage.png">
           </a>
           <a href="#img18">
            <img src="images/Noimage.png" style="width:100%">
          </a>
            <a href="#_" class="lightbox" id="img18">
              <img src="images/Noimage.png">
            </a>
     </div>
    </div>
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
