<?php
$onFlightID = $_POST['onFlightID'];
$onHotelID = $_POST['onHotelID'];
$onCarID = $_POST['onCarID'];
$onFlightWithHotelID = $_POST['onFlightWithHotelID'];
$host="localhost";
$user="root";
$pass="";
$db="internet_based_project";
$connect= new mysqli($host,$user,$pass,$db);
if($connect-> connect_error) {
  die("connection failed;".$connect-> connect_error);
}
  $sql="SELECT * FROM `preview` WHERE `onFlightID` LIKE '$onFlightID' OR `onHotelID` LIKE '$onHotelID' OR `onCarID` LIKE '$onCarID' OR
   `onFlightWithHotelID` LIKE '$onFlightWithHotelID'";

   $result = $connect->query($sql);
   if ($result->num_rows > 0) {
     $arr=array();
   while($row =mysqli_fetch_assoc($result)){
   $arr[]=$row;
   }
   echo json_encode($arr);
   }
   else {
     echo "false";
   }
?>
