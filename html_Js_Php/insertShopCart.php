<?php
$flightID1=$_POST['flightID1'];
$email=$_POST['email'];
$host="localhost";
$user="root";
$pass="";
$db="internet_based_project";
$connect= new mysqli($host,$user,$pass,$db);
if($connect-> connect_error) {
  die("connection failed;".$connect-> connect_error);
}
$sql="SELECT * FROM `onflight` WHERE `flightID` LIKE '$flightID1' AND `userEmail` LIKE '$email'";
$result = $connect->query($sql);
$onFlightID=null;
if ($result->num_rows > 0) {
$row = mysqli_fetch_assoc($result);
$onFlightID = $row['onFlightID'];
}

if($onFlightID==null) {
  $sql="insert into shoppingcart (userEmail,flightID,hotelID,carID,flightWithHotelID,shoppingCartID)
   values('$email','$flightID1',null,null,null,'')";
  if( $connect->query($sql)===TRUE){
    echo "new record inserted";
      $connect->close();
  }
  else {
    echo "error: ".$sql. "<br>" .$connect->error;
      $connect->close();
  }
}
else {
  echo "you have order this item";
}
 ?>
