<?php
$cardNumber=$_POST['cardNumber'];
$threeNumbers=$_POST['threeNumbers'];
$expiredDate=$_POST['expiredDate'];
$idNumber=$_POST['idNumber'];
$host="localhost";
$user="root";
$pass="";
$db="internet_based_project";
$connect= new mysqli($host,$user,$pass,$db);
if($connect-> connect_error) {
  die("connection failed;".$connect-> connect_error);
}
$sql="insert into card(number,threeNumbers,expiredDate,ID) values('$cardNumber','$threeNumbers','$expiredDate','$idNumber')";
 if( $connect->query($sql)===TRUE){
   echo "new record inserted";
     $connect->close();
 }
 else {
   echo "error: ".$sql. "<br>" .$connect->error;
     $connect->close();
 }
 ?>
