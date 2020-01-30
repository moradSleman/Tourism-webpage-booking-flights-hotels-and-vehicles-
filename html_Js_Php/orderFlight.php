<?php
$userEmail=$_POST['email'];
$flightID=$_POST['flightID'];
$cardNumber=$_POST['cardNumber'];
$host="localhost";
$user="root";
$pass="";
$db="internet_based_project";
$connect= new mysqli($host,$user,$pass,$db);
if($connect-> connect_error) {
  die("connection failed;".$connect-> connect_error);
}
  $sql="insert into onflight (flightID,userEmail,onFlightID,cardNumber)
   values('$flightID','$userEmail','','$cardNumber')";
  if( $connect->query($sql)===TRUE){
    $sql1="delete from `shoppingcart` where `flightID` like '$flightID' AND `userEmail` like '$userEmail'";
   if($connect->query($sql1)===TRUE)
    {
      echo "new record inserted";
        $connect->close();
    }
    else {
      echo "error: ".$sql. "<br>" .$connect->error;
        $connect->close();
    }
  }
  else {
    echo "error: ".$sql. "<br>" .$connect->error;
      $connect->close();
  }
 ?>
