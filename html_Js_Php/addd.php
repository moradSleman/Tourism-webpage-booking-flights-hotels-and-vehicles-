
<?php
$logged = "fdfd";
$postValue = "rdt";
$passwordd = "d";
$passwordr = "s";


// Create connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "internet_based_project";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname)or die ('could not select database');
$sql="INSERT  INTO  'bnnn' ('d','s') VALUES ('$passwordd','$passwordd')";
mysql_query($squery) ;
echo "Posted";
/*
$sql = "INSERT INTO `bnnn`($passwordd, $passwordr) VALUES ('$_POST[Email]','$_POST[password]')";

//$squery=    "INSERT INTO  'bnnn' (d,s) VALUES ( 'lama','maa')";
mysql_query($sql) ;


if ($conn->query($sql) === TRUE) {
               ob_end_clean();
                 echo "Posted";
                 $flag=true;
        }


$conn = mysql_connect('localhost','root', '')  or die ('could not connect to database');;
$db=mysql_select_db('css',$conn) or die ('could not select database');
$sql = "INSERT INTO `bnnn`($password, $passwordr) VALUES ('$logged','$postValue')";

//$squery=    "INSERT INTO  'bnnn' (d,s) VALUES ( 'lama','maa')";
mysql_query($sql) ;

*/
/*
$select="SELECT * FROM `bnnn` WHERE `d` LIKE '%fdfd%' ";
//$select=" SELECT $passwordd FROM `bnnn` WHERE  $passwordd ";
$result =mysql_query($select) ;
while( $row= mysql_fetch_array($result)){
  echo $row[$passwordd].": ";
}
*/
/*
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql="INSERT INTO  'bnnn'(d, s) VALUES ('GG','maa')";
  mysql_query( $sql);
$sql = "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('John', 'Doe', 'john@example.com')";
*/
/*if ($conn->query($sql) === TRUE) {
echo "New record created successfully";
} else {
echo "Error: " . $sql . "<br>" . $conn->error;
}
mysqli_query( $sql);

$conn->close();

  // Check connection
/*  if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
  }

 $sql="INSERT INTO `car`(`carID`, `between25And70`, `location`, `city`, `country`, `fromDateTime`, `toDateTime`)
 VALUES ('55555','29', 'vdfdf', 'dsds',' Md','20-05-2005', '20-05-2015')";
         $sql = "INSERT INTO 'car' ('CarID',' between25And70'	, 'location',' city',
             'country', 'fromDateTime', 'toDateTime')
         VALUES ('55555', '29', 'vdfdf', 'dsds'
         ,' Md', '22-08-2002', '25-10-2006')";*/
  /*  $sql = "INSERT INTO 'user' (email,
      fullName	, phone, birth,
       gender, password, postCode, country, cit  , address)
   VALUES ('mmm@gmail.com', 'mmm', '0200555555', '2000-05-25'
   ,' M', '55555', '22', 'hauda' , 'mm', 'mm')";
    $sql = "INSERT INTO user(email,
          fullName	, phone, birth,
           gender, password, postCode, country, city, address)
       VALUES ('$_POST[Email]', '$_POST[Fullname]', '$_POST[PhoneNumber]', '$_POST[Birth]'
       , ma, '$_POST[Password]', '$_POST[Postcode]', haifa
     , '$_POST[City]', '$_POST[Address]')";

  /*
  */  /*     if ($conn->query($sql) === TRUE) {
             echo "New record created successfully";
             $sql1 = "SELECT * FROM `user` WHERE `accountName`='$_POST[accountName]'";
            mysql_query( $sql);
}
*/
/*

             $json = file_get_contents('data/users2.json');

             //Decode JSON
             $json_data = json_decode($json,true);

             while($row =mysqli_fetch_assoc($result)) {
               $json_data[] = $row;
             }

             $fp = fopen('data/users2.json', 'w');
           fwrite($fp, json_encode($json_data));
           fclose($fp);

             echo "Thank you for registering";
              header('location: http://localhost/second/index.php');
         } else {
             echo "Error: " . $sql . "<br>" . $conn->error;
             header('location: http://localhost/second/index.php');
         }
*/

 ?>
