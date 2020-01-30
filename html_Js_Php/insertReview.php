<?php
$flightID=$_POST['flightID'];
$email=$_POST['email'];
$previewStras=$_POST['previewStras'];
$previewDetails=$_POST['previewDetails'];
$host="localhost";
$user="root";
$pass="";
$db="internet_based_project";
$connect= new mysqli($host,$user,$pass,$db);
if($connect-> connect_error) {
  die("connection failed;".$connect-> connect_error);
}
$sql="SELECT * FROM `onflight` WHERE `flightID` LIKE '$flightID' AND `userEmail` LIKE '$email'";
$result = $connect->query($sql);
$onFlightID=null;
if ($result->num_rows > 0) {
$row = mysqli_fetch_assoc($result);
$onFlightID = $row['onFlightID'];
}

if($onFlightID!=null) {
  $sql="insert into preview (previewID,onFlightID,onHotelID,onCarID,onFlightWithHotelID,previewOn,previewStras,previewDetails,previewImg)
   values('','$flightID',null,null,null,'flight','$previewStras','$previewDetails',null)";
  if( $connect->query($sql)===TRUE){
    echo "new record inserted";
      $connect->close();
  }
  else {
    echo "error: ".$sql. "<br>" .$connect->error;
      $connect->close();
  }
}else {
  echo ("you have not gone to this flight");
    $connect->close();
}
 ?>
