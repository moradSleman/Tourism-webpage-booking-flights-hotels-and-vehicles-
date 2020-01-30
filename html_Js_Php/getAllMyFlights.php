<?php
$userEmail = $_POST['userEmail'];
$host="localhost";
$user="root";
$pass="";
$db="internet_based_project";
$connect= new mysqli($host,$user,$pass,$db);
if($connect-> connect_error) {
  die("connection failed;".$connect-> connect_error);
}
  $sql="SELECT * FROM `onflight` WHERE `userEmail` LIKE '$userEmail'";
   $result = $connect->query($sql);
   if ($result->num_rows > 0) {
     $arr=array();
   while($row =mysqli_fetch_assoc($result)){
   $arr[]=$row;
   }
   echo json_encode($arr);
   }
   else {
     echo "error: ".$sql. "<br>" .$connect->error;
       $connect->close();
   }
 ?>
