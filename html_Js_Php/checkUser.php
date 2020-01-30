<?php
session_start();

$email=$_POST["email"];
$pwd=$_POST["pwd"];
check($email,$pwd);
function check($x,$y){
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "internet_based_project";

  // Create connection
  $conn = mysqli_connect($servername, $username, $password, $dbname);
  // Check connection

/*
  $pass = $_GET["pwd"];
  $username = $_GET["email"];
*/
  $flag=false;
  if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
  }


  $sql = "SELECT `password` FROM `user` WHERE `email`='$x'";
  $result =   mysqli_query($conn, $sql) or die("Error in Selecting " . mysqli_error($conn));


  //  echo $result;
  if ($result->num_rows > 0) {


  $row =mysqli_fetch_assoc($result);

    if($y==implode(" ",$row)){
      echo "bodsao";
      $_SESSION["email"] =$_POST["email"];
      header('Location:homePage.php');
  }else{
    echo "boo";
  }
}else{
  header('Location:logIn.php');
}
/*
  switch ($x) {
            case "Admin":
            if(( $y=="Admin") ){
                session_start();
                $_SESSION["email"] ="Admin";
                $_SESSION["pwd"] ="Admin";
                header("Location:homePage.php");
              }
              else {
                echo "user or password are not correct if you want to register back to the previus page and then sign in to register!";
              }
            case "marwan":  if(( $y=="keadan")){
                session_start();
                $_SESSION["email"] ="marwan";
                $_SESSION["pwd"] ="keadan";
                header("Location:homePage.php");
              }
              else {
                echo "user or password are not correct if you want to register back to the previus page and then sign in to register!";
              }
            case "morad":   if(( $y=="sleman")){
                session_start();
                $_SESSION["email"] ="morad";
                $_SESSION["pwd"] ="sleman";
                header("Location:homePage.php");
              }
              else {
                echo "user or password are not correct if you want to register back to the previus page and then sign in to register!";
              }
              default:  if(($x!="morad" && $x!="marwan" && $x!="Admin")){
              echo "user or password are not correct if you want to register back to the previus page and then sign in to register!";
            }

}*/

}

?>
