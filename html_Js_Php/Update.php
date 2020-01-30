<?php
if(isset($_SESSION['email']))
{
  $email=$_SESSION["email"];
}
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "internet_based_project";
/*
$conn = mysql_connect('localhost','root', '')  or die ('could not connect to database');;

$db=mysql_select_db('mm',$conn) or die ('could not select database');

*/
$connect= mysqli_connect('localhost','root','','mm');
// Check connection
if ($connect->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if(isset($_POST['submitforedit'])){


 /*
$email1="kff@gmail.com";
$fullname="mdamadam";
$address1="mmma";
$profilepic1="mmm";
$birth1="2000-11-11";
$password1="mmm";
$country1="mmm";
$city1="mmm";

$phone1="0507312555";
*/
$email=$_POST["email"];
$fullname=$_POST['Fullname'];
$address=$_POST['Address'];
$profilepic="mmm";
$birth=$_POST['Birth'];
$password=$_POST['Password'];
$country=$_POST['Contry'];
$city=$_POST['City'];
$phone=$_POST['PhoneNumber'];

/*
$update="UPDATE user SET fullName='$fullname1' where email='$email1'";
mysql_query($update)or die('madhdhsja');
$update1="UPDATE user SET address='$address1' where email='$email1'";
mysql_query($update1)or die('madhdhsja');
//$update2="UPDATE user SET city='$city1' where email='$email1'";
//mysql_query($update2)or die('madhdhsja');
$update3="UPDATE user SET phone='$phone1' where email='$email1'";
mysql_query($update3)or die('madhdhsja');
*/
$update="UPDATE user SET email='$email',fullName='$fullname',profilepic='$profilepic',birth='$birth',
password='$password',city='$city',phone='$phone',country='$country',address='$address' WHERE email='$email'
 LIKE '%$user%'";
}
header('Location:personalinfo.php');

/*
echo $email1;
$update="UPDATE user SET email='$email1',fullName='$fullname1',profilepic='$profilepic1',phone='$phone1',
password='$password1',country=$country1,city='$city1',address='$address1' where email='$email1'";
mysql_query($update)or die('madhdhsja');

/*
$update="UPDATE user SET fullName='$fullname1' where email='$email1'";
mysql_query($update)or die('madhdhsja');

//  echo $result;
/*
mysql_query("UPDATE user SET email='$email1',fullName='$fullname1',profilepic='$profilepic1',phone='$phone1',birth='$birth1',
password='$password1',country=$country1,city='$city1',address='$address1' where email='$email1'");
*/



 ?>
