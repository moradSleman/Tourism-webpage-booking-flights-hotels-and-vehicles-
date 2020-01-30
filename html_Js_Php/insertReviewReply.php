<?php
$previewID=$_POST['previewID'];
$textReply=$_POST['textReply'];
$host="localhost";
$user="root";
$pass="";
$db="internet_based_project";
$connect= new mysqli($host,$user,$pass,$db);
if($connect-> connect_error) {
  die("connection failed;".$connect-> connect_error);
}
$sql="insert into previewreply(replyID,previewID,textReply) values('','$previewID','$textReply')";
 if( $connect->query($sql)===TRUE){
   echo "new record inserted";
     $connect->close();
 }
 else {
   echo "error: ".$sql. "<br>" .$connect->error;
     $connect->close();
 }
 ?>
