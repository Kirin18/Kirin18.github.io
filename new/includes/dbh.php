<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="clickevent";
// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection



$destination     = "uploads/".$_FILES['image']['name'];
$filename        = $_FILES['image']['tmp_name'];

$name =  $_POST['Name'];
$role =  $_POST['Role'];
$roleno =  $_POST['roleNo'];
$phone =  $_POST['phone'];
$email =  $_POST['email'];
$venueName =  $_POST['venueName'];
$dateb=  $_POST['dateB'];
//$dater =  $_POST['dateR'];
$problem =  $_POST['problem'];

$comment =  $_POST['comment'];

  if(move_uploaded_file($filename, $destination))
  {
    $sql = "INSERT INTO venuereport (id, name, role, roleNo, phone, email, venueName, dateB, dateR, problem, image, comment)
    VALUES ('', '$name','$role','$roleno','$phone','$email','$venueName','$dateb','$dater','$problem','$destination','$comment');";

      if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
      } else {
          echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }


    }




?>
