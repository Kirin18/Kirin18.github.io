<?php
   $connection = mysqli_connect('localhost','root','','clickevent');

   $destination     = "uploads/".$_FILES['image']['name'];
  $filename        = $_FILES['image']['tmp_name'];
$name =  $_POST['Name'];
$role =  $_POST['Role'];
$roleno =  $_POST['roleNo'];
$phone =  $_POST['phone'];
$email =  $_POST['email'];
$venueName =  $_POST['venueName'];
$problem =  $_POST['problem'];
$comment =  $_POST['comment'];
$dateb = $_POST['DateB'];
$dater = $_POST['DateR'];
  if(move_uploaded_file($filename, $destination))
    {
       $sql = "INSERT INTO venuereport (name,role,roleNo,phone,email,venueName,dateB,DateR,problem,image,comment) VALUES ('$name','$role','$roleno','$phone','$email','$venueName','$dateb','$dater','$problem','$destination','$comment');";
   	   mysqli_query($connection,$sql);

}

header('venue-report.php');

?>
