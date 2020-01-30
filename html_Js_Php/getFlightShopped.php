<?php
$func=$_POST['func'];
$flightDes=$_POST['flightDes'];
$flightID=$_POST['flightID1'];

if($func=="ById"){
  ById($flightID);
}
if($func=="vueByDes"){
  vueByDes($flightDes);
}
function ById($flightID){
  $host="localhost";
  $user="root";
  $pass="";
  $db="internet_based_project";
  $connect= new mysqli($host,$user,$pass,$db);
  if($connect-> connect_error) {
    die("connection failed;".$connect-> connect_error);
  }
$sql="SELECT * FROM `flight` WHERE `flightID` LIKE '$flightID'";
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
function vueByDes($flightDes){
  $host="localhost";
  $user="root";
  $pass="";
  $db="internet_based_project";
  $connect= new mysqli($host,$user,$pass,$db);
  if($connect-> connect_error) {
    die("connection failed;".$connect-> connect_error);
  }
  $sql1="SELECT * FROM `flight` WHERE `toDes` LIKE '$flightDes'";
  $result1 = $connect->query($sql1);
  if ($result1->num_rows > 0) {
    $arr=array();
  while($row1 =mysqli_fetch_assoc($result1)){
  $arr1[]=$row1;
  }
  echo json_encode($arr1);
  }
  else {
    echo "false";
  }
}
 ?>
