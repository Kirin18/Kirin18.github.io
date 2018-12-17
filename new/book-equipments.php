<!DOCTYPE html>
<html><head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Report</title>
<link rel="stylesheet" href="defectreport.css">
<link rel="stylesheet" href="nav.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


<link href="https://fonts.googleapis.com/css?family=Permanent+Marker|Teko" rel="stylesheet">
<link href="jquery-ui.css" rel="stylesheet">
<style>
body,h1,h2,h3,h4,h5,h6,label,div {font-family: 'Teko', sans-serif;
margin:0;}

</style>



</head>
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
  <script>


  </script>

<form id="theForm" action="phpbookequipments.php" method="post" target="_self" onSubmit="mySubmit()" enctype="multipart/form-data">

<div class="panel padding-16 opacity card">
  <div class="form-all">
    <ul style=" padding-left: 15px;padding-right:15px;">
<!-- header -->
      <div class="form-header-group ">


             <h1 style="text-align:Left;font-size:35px;font-weight:normal">Book Equipments</h1>
            <h4 style="text-align:Left;font-size:25px;font-weight:normal" class="form-subHeader">
              To book equipments, please provide the following information below...
            </h4>
            <div>
              <div class="form-line">
                <span class="form-required">
                  *
                </span>
                Indicates required feild.
              </div>
<!-- Name -->

      <div class="form-line">
        <label class="form-label" id="label_3" for="input_3">
          Name:
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_3" class=" ">
          <input type="text" name="Name" id="input_3"  data-type="input-textbox" class="form-textbox " size="30" value="" placeholder=" " data-component="textbox" required="required" />
        </div>
      </div>
<!-- I am a -->
      <div class=" form-line">
        <label class="form-label " id="label_19" for="input_19">
          I am a
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_19" >
          <select  id="input_19" name="Role" style="width:150px" data-component="dropdown" required="">
           <option value="IIUM Student"> IIUM Student </option>
            <option value="IIUM Staff"> IIUM Staff </option>
          </select>
        </div>
      </div>
<!-- Matric no-->
      <div class="form-line"  id="id_22">
        <label class="form-label " id="label_22" for="input_22">
          Staff/Matric No
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_22" class="form-input ">
          <input type="tel" name="roleNo" id="input_22" data-type="input-number" class="  form-textbox " style="width:100px" size="10" value="" placeholder="ex: 1234567" data-component="number" required="" />
        </div>
      </div>

    <!--  Phone Number-->

      <div class="form-line" data-type="" id="id_20">
        <label class="form-label " id="label_20" for="input_20">
          Phone Number
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_20" class="form-input ">
          <input name="phone" type="tel" id="input_20"  data-type="input-number" class="  form-textbox " style="width:180px" size="20" value="" placeholder="ex: 0123456789" data-component="number" required="" pattern="^(\+?6?01)[0-46-9]-*[0-9]{7,8}$" />
        </div>
      </div>
<!--  Email-->
      <div class="form-line "  id="id_6">
        <label class="form-label " id="label_6" for="input_6">
          Email
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_6" class="form-input ">
          <input name="email" type="email" id="input_6" data-type="input-textbox" class="form-textbox" size="20" value="" placeholder=" " data-component="textbox" required="" />
        </div>
      </div>
      <!-- Equipment Details-->
      <div class="form-line" data-type="control_text" id="id_13">
        <div id="cid_13" class="form-input-wide">
          <div id="text_13" class="form-html" data-component="text">
          <hr width="100%">
            <h3 style="text-align:Left;font-size:25px;font-weight:normal">Equipment Details</h3>
            Type of Equipments that you wish to borrow
          </div>
        </div>
      </div>
      <!-- Type of Equipment-->
      <div class="form-line " id="id_23">
        <label class="form-label " id="label_23" for="input_23">
      Equipment 1:
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_23" class="form-input ">
          <select  id="input_23" name="equipmentName1" style="width:150px" data-component="dropdown" required="">
            <option value="Chairs"> Chairs </option>
            <option value="Tables"> Tables </option>
            <option value="Speakers"> Speaker </option>
            <option value="Projectors"> Projectors </option>
            <option value="Broom/Mop"> Broom/Mop </option>
          </select>
        </div>
      </div>
      <div class="form-line " id="id_23">
        <label class="form-label " id="label_23" for="input_23">
      Equipment 2:
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_23" class="form-input ">
          <select  id="input_23" name="equipmentName2" style="width:150px" data-component="dropdown" required="">
            <option value="Chairs"> Chairs </option>
            <option value="Tables"> Tables </option>
            <option value="Speakers"> Speaker </option>
            <option value="Projectors"> Projectors </option>
            <option value="Broom/Mop"> Broom/Mop </option>
          </select>
        </div>
      </div>
      <div class="form-line " id="id_23">
        <label class="form-label " id="label_23" for="input_23">
      Equipment 3:
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_23" class="form-input ">
          <select  id="input_23" name="equipmentName3" style="width:150px" data-component="dropdown" required="">
            <option value="Chairs"> Chairs </option>
            <option value="Tables"> Tables </option>
            <option value="Speakers"> Speaker </option>
            <option value="Projectors"> Projectors </option>
            <option value="Broom/Mop"> Broom/Mop </option>
          </select>
        </div>
      </div>

      <!-- number of Equipment-->
      <div class="form-line"  id="id_15">
        <label class="form-label " id="label_15" for="input_15"> Total number of Equipment 1 to be borrowed </label>
        <div id="cid_15" class="form-input">
          <input type="number" id="input_15" name="equipmentNo1" data-type="input-number" class="  form-textbox " style="width:60px" size="5" value="" placeholder="ex: 23" data-component="number" />
        </div>
      </div>
      <!-- number of Equipment-->
      <div class="form-line"  id="id_15">
        <label class="form-label " id="label_15" for="input_15"> Total number of Equipment 2 to be borrowed </label>
        <div id="cid_15" class="form-input">
          <input type="number" id="input_15" name="equipmentNo2" data-type="input-number" class="  form-textbox " style="width:60px" size="5" value="" placeholder="ex: 23" data-component="number" />
        </div>
      </div><!-- number of Equipment-->
      <div class="form-line"  id="id_15">
        <label class="form-label " id="label_15" for="input_15"> Total number of Equipment 3 to be borrowed </label>
        <div id="cid_15" class="form-input">
          <input type="number" id="input_15" name="equipmentNo3" data-type="input-number" class="  form-textbox " style="width:60px" size="5" value="" placeholder="ex: 23" data-component="number" />
        </div>
      </div>



      <!-- Date Borrowed-->
      <div class="form-line "  id="id_10">
        <label class="form-label " id="label_10" for="month_10">
          Date to be borrowed
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_10" class="form-input ">


          <input type="text" id="datepicker2"  name="DateB" class="form-textbox"   style="width:100px " value="" required="" >

        </div>
      </div>

      <!--  Date Returned-->

      <div class="form-line"  id="id_24">
        <label class="form-label " id="label_24" for="lite_mode_24">
          Date to be returned
          <span class="form-required">
            *
          </span>
        </label>

        <div id="cid_24" class="form-input ">

                <input type="text" id="datepicker" name="DateR" class="form-textbox "  style="width:100px"   value="" required="" />

        </div>
      </div>


<!-- file upload -->

      <div class="form-line" data-type="control_fileupload" id="id_17">
        <label class="form-label " id="label_17" for="input_17"> Please insert a photo of a approval letter from the University  </label>
        <span class="form-required">
          *
        </span>
        <div id="cid_17" class="form-input">
          <div data-wrapper-react="true">
            <div data-wrapper-react="true">
              <div style="color: #f44336" class="Text-value">
                Upload a File
              </div>
              <input  type="file" id="input_17" name="image" required="" multiple=""  data-imagevalidate="yes" data-file-accept="pdf, doc, docx, xls, csv, txt, rtf, html, zip, mp3, wma, mpg, flv, avi, jpg, jpeg, png, gif" data-file-maxsize="10240" data-file-minsize="0" data-file-limit="0" data-component="fileupload" />
            </div>
          </div>
        </div>
      </div>

     <!-- additional message-->
      <div class="form-line" data-type="control_textarea" id="id_18">
        <label class="form-label " id="label_18" for="input_18"> Any additional message or comments? </label>
        <div id="cid_18" class="form-input">
          <textarea id="input_18"  name="comment" class="form-textarea"  cols="70" rows="6" data-component="textarea"></textarea>
        </div>
      </div>

      <div class="form-line" data-type="control_button" id="id_2">
        <div id="cid_2" class="form-input-wide">
          <div style="text-align:center" class="form-buttons-wrapper">
            <button onclick="ReportFunction()" id="input_2" type="submit" class="form-submit-button " data-component="button">
              Submit Now!
            </button>
          </div>
        </div>
      </div>


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
            alert("The booking request was successfully submitted! Thank You!");
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


</ul>
  </div>
</form>
  <body></div>
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
    <html>
