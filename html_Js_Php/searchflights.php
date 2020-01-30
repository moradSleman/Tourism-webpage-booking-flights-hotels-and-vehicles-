<?php
  $func = $_POST['func'];
  $from1 =  $_POST['from1'];
  $flightType=$_POST['flightType1'];
  $to = $_POST['to1'];
  $depdate =  $_POST['depdate1'];
  $retdate =  $_POST['retdate1'];
  $numAdults =  $_POST['numAdults1'];
  $numChilds = $_POST['numChilds1'];

  if($func=="searchFlight") {
      searchFlights($from1,$flightType,$to,$depdate,$retdate,$numAdults,$numChilds);

}
  function searchFlights($from1,$flightType,$to,$depdate,$retdate,$numAdults,$numChilds){
  $host="localhost";
  $user="root";
  $pass="";
  $db="internet_based_project";
  $connect= new mysqli($host,$user,$pass,$db);
  if($connect-> connect_error) {
    die("connection failed;".$connect-> connect_error);
  }
    $sql="SELECT * FROM `flight` WHERE `flightType` LIKE 'return' AND `fromDes` LIKE '$from1' And `toDes` LIKE '$to' AND `departureDate` LIKE
    '$depdate'  And `returnDate` LIKE '$retdate'";

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
  }
 ?>
