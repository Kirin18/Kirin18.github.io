<?php
   $connection = mysqli_connect('localhost','root','','clickevent');

   $destination     = "bookequipments/".$_FILES['image']['name'];
  $filename        = $_FILES['image']['tmp_name'];
$name =  $_POST['Name'];
$role =  $_POST['Role'];
$roleno =  $_POST['roleNo'];
$phone =  $_POST['phone'];
$email =  $_POST['email'];
$equipmentName1 =  $_POST['equipmentName1'];
$equipmentName2 =  $_POST['equipmentName2'];
$equipmentName3 =  $_POST['equipmentName3'];
$equipmentNo1 =  $_POST['equipmentNo1'];
$equipmentNo2 =  $_POST['equipmentNo2'];
$equipmentNo3 =  $_POST['equipmentNo3'];
$comment =  $_POST['comment'];
$dateb = $_POST['DateB'];
$dater = $_POST['DateR'];
  if(move_uploaded_file($filename, $destination))
    {
       $sql = "INSERT INTO bookequipments (name,role,roleNo,phone,email,equipmentName1,equipmentName2,equipmentName3,equipmentNo1,equipmentNo2,equipmentNo3,dateB,DateR,image,comment)
       VALUES ('$name','$role','$roleno','$phone','$email','$equipmentName1','$equipmentName2','$equipmentName3','$equipmentNo1','$equipmentNo2','$equipmentNo3','$dateb','$dater','$destination','$comment');";

       mysqli_query($connection,$sql);
       $done=true;

}

if($done)
{
header("Location: http://localhost/new/book-equipments.php");
exit;
}
?>
