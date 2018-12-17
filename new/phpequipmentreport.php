<?php
   $connection = mysqli_connect('localhost','root','','clickevent');

   $destination     = "equipmentreports/".$_FILES['image']['name'];
  $filename        = $_FILES['image']['tmp_name'];
$name =  $_POST['Name'];
$role =  $_POST['Role'];
$roleno =  $_POST['roleNo'];
$phone =  $_POST['phone'];
$email =  $_POST['email'];
$equipmentName =  $_POST['equipmentName'];
$equipmentNo =  $_POST['equipmentNo'];
$equipmentfaultyNo =  $_POST['equipmentfaultyNo'];
$problem =  $_POST['problem'];
$comment =  $_POST['comment'];
$dateb = $_POST['DateB'];
$dater = $_POST['DateR'];
  if(move_uploaded_file($filename, $destination))
    {
       $sql = "INSERT INTO equipmentsreport (name,role,roleNo,phone,email,equipmentName,equipmentNo,equipmentfaultyNo,dateB,DateR,problem,image,comment)
        VALUES ('$name','$role','$roleno','$phone','$email','$equipmentName','$equipmentNo','$equipmentfaultyNo','$dateb','$dater','$problem','$destination','$comment');";
       mysqli_query($connection,$sql);
       $done=true;

}

if($done)
{
header("Location: http://localhost/new/equipments-report.php");
exit;
}
?>
