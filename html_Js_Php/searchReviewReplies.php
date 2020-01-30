<?php
$previewID = $_POST['previewID'];
$host="localhost";
$user="root";
$pass="";
$db="internet_based_project";
$connect= new mysqli($host,$user,$pass,$db);
if($connect-> connect_error) {
  die("connection failed;".$connect-> connect_error);
}
$sql="SELECT * FROM `previewreply` WHERE `previewID` LIKE '$previewID'";
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
