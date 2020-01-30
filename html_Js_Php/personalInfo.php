<html lang="en">
<?php
session_start();
if((!$_SESSION["email"])){
  header("Location: login.php");
}
if(isset($_POST['logoutt'])){
  session_destroy();
  header('Location: login.php');
}
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mm";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname)or die("Error in Selecting " . mysqli_error($conn));
if(isset($_SESSION['email']))
{
  $email=$_SESSION["email"];
  $sql="SELECT * FROM user where email LIKE '%$email%'";
  $result=$conn->query($sql);
  if($result->num_rows > 0){
    while($row=$result->fetch_assoc()){
      $address=$row["address"];
      $email=$row["email"];
      $fullname=$row["fullName"];
      $password=$row["password"];
      $birth=$row["birth"];
      $phone=$row["phone"];
      $country=$row["country"];
      $city=$row["city"];
      $address=$row["address"];
    }}
  }

/*$sql = "SELECT * FROM user where  ";

$result =   mysqli_query($conn, $sql) or die("Error in Selecting " . mysqli_error($conn));


while($row = mysqli_fetch_array($result))
{
echo $row[email] . " " . $row[fullname];
echo "<br />";
}
*/
?>

<head>

  <meta charset="UT F-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      <title></title>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

      <script type="text/javascript">
      var userSessionname="<?php echo $_SESSION['email']; ?>";
      $(document).ready(function() {
        $("#showAll").click(function(){
            $.getJSON('participants1.json', function(data) {
              $.each(data, function(i, user){
                if(user.Email==userSessionname){
                for(j in user.hotels){
                $('#hotelsFromJson').append('</hr></br><div style="background-color:green; color:white ; size:23px ;">hotel number:' +(j) +'</br>dateCheckIn:' + user.hotels[j].dateCheckIn + '&nbsp&nbsp&nbspdateCheckOut :'+ user.hotels[j].dateCheckOut + '  childNum:'
                + user.hotels[j].childNum + '&nbsp&nbsp&nbspadultsNum:'+ user.hotels[j].adultsNum + '&nbsp&nbsp&nbsproomsNum:' +user.hotels[j].roomsNum + '&nbsp&nbsp&nbspinfo :'+ user.hotels[j].info +'</br></br> </hr> </div> ');
              }

              for(j in user.cars){
              $('#carsFromJson').append('</hr></br><div style="background-color:green; color:white ; size:23px ;">car number :'+j+'</br> fromDateTime:' + user.cars[j].fromDateTime + '&nbsp&nbsp&nbsptoDateTime :'+ user.cars[j].toDateTime + '  country:'
              + user.cars[j].country + '&nbsp&nbsp&nbspcity:'+ user.cars[j].adultsNum + '&nbsp&nbsp&nbsplocation:' +user.cars[j].roomsNum + '&nbsp&nbsp&nbspbetween25And70 :'+ user.cars[j].between25And70 +'</br></br> </hr> </div> ');
            }
            for(j in user.flights){
            $('#flightsFromJson').append('</hr></br><div style="background-color:green; color:white ; size:23px ;">flight number :'+j+'</br> from:' + user.flights[j].from + '&nbsp&nbsp&nbspto :'+ user.flights[j].to + '  departureDate:'
            + user.flights[j].departureDate + '&nbsp&nbsp&nbspreturnDate:'+ user.flights[j].returnDate + '&nbsp&nbsp&nbspnumAdults:' +user.flights[j].numAdults + '&nbsp&nbsp&nbspnumChilds :'+ user.flights[j].numChilds + '&nbsp&nbsp&nbspflightType :'+ user.flights[j].flightType +'</br></br> </hr> </div> ');
          }
        }
               });
                });
          });
        });

      </script>  <style>
  label{
    color:white;
  }
  button {
  background-color: #0000CC;
  border: none;
  color: white;
  padding: 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  border-radius: 50px;
  }

.h1{
  font-family:sans-serif; color:white;
}

  .container{
    background:rgba(0,0,0,0.3);
    box-shadow: 5px, 4px, 43px #000;
    padding-right: 700px;

  }
  .footer {

   left: 0;
   bottom: 0;
   width: 100%;
   background-color: #D15834;
   color: white;
   text-align: center;
}
  * {
    box-sizing: border-box;
  }

  .row > .column {
    padding: 0 8px;
  }

  .row:after {
    content: "";
    display: table;
    clear: both;
  }

  .column {
    float: left;
    width: 25%;
  }

  /* The Modal (background) */
  .modal {
    display: none;
    position: fixed;
    z-index: 1;
    padding-top: 100px;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto;
    background-color: black;
  }

  /* Modal Content */
  .modal-content {
    position: relative;
    background-color: #fefefe;
    margin: auto;
    padding: 0;
    width: 90%;
    max-width: 1200px;
  }

  /* The Close Button */
  .close {
    color: white;
    position: absolute;
    top: 10px;
    right: 25px;
    font-size: 35px;
    font-weight: bold;
  }

  .close:hover,
  .close:focus {
    color: #999;
    text-decoration: none;
    cursor: pointer;
  }

  .mySlides {
    display: none;
  }

  .cursor {
    cursor: pointer;
  }

  /* Next & previous buttons */
  .prev,
  .next {
    cursor: pointer;
    position: absolute;
    top: 50%;
    width: auto;
    padding: 16px;
    margin-top: -50px;
    color: white;
    font-weight: bold;
    font-size: 20px;
    transition: 0.6s ease;
    border-radius: 0 3px 3px 0;
    user-select: none;
    -webkit-user-select: none;
  }

  /* Position the "next button" to the right */
  .next {
    right: 0;
    border-radius: 3px 0 0 3px;
  }

  /* On hover, add a black background color with a little bit see-through */
  .prev:hover,
  .next:hover {
    background-color: rgba(0, 0, 0, 0.8);
  }

  /* Number text (1/3 etc) */
  .numbertext {
    color: #f2f2f2;
    font-size: 12px;
    padding: 8px 12px;
    position: absolute;
    top: 0;
  }

  img {
    margin-bottom: -4px;
  }

  .caption-container {
    text-align: center;
    background-color: black;
    padding: 2px 16px;
    color: white;
  }

  .demo {
    opacity: 0.6;
  }

  .active,
  .demo:hover {
    opacity: 1;
  }

  img.hover-shadow {
    transition: 0.3s;
  }

  .hover-shadow:hover {
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  }

  *{
    margin: 0;
    padding: 0;
  }
  .wrapper{
    width: 1170px;
    margin: auto;
  }
  body{ background-image:url("https://cdn.hipwallpaper.com/i/89/88/1rdliL.jpg"); }

  .nav-area{
    float: right;
    list-style: none;
    margin-top: 30px;
  }
  .nav-area li{
    display:inline-block;
  }
  .nav-area li a{
    color:#fff;
    text-decoration: none;
    padding: 5px 20px;
    font-family: Georgia;
    font-size:18px;
  }
  .nav-area li a:hover{
    background: #fff;
    color: #333;
  }
  .logo img{
    width: 100px;
    float:left;
    height:auto;
    border-radius: 50%;
  }
  h3{
    color: white;
  }


  a{
    color:white;
  }
  h6, h1,h3,h4{
      color: white;
    }
  body{ background-image:url("https://cdn.hipwallpaper.com/i/89/88/1rdliL.jpg"); }


  button {
  background-color: #0000CC;
  border: none;
  color: white;
  padding: 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  border-radius: 50px;
  }


    </style>

     </head>
     <body>
      <a href="homePage.php"> <img src="TRAVIL1.png " width=100% height=100></a>
       <!--list of home page-->
            <div >


           <ul style="font-size:25px" class="nav nav-tabs">
                <li><a href="homePage.php">Home</a></li>
                <li><a href="personalinfo.php" >Account <?php  echo " : $_SESSION[email]" ; ?></a></li>
                <li class="dropdown">
                  <a class="dropdown-toggle" data-toggle="dropdown" href="#">Currency<span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="#">3.4 USD </a></li>
                    <li><a href="#">4.5 EUR </a></li>
                    <li><a href="#">4.7 GBP </a></li>
                    <li><a href="#">3.2 JPY </a></li>
                  </ul>
                </li>
                <li><a href="account.php" id="logoutt" class="aClass1" >Log out</a></li>
            </ul>

       </div>
       <div id="profilepic">
         <img  	src="TRAVIL1.png"  id="toreplace" style='border: 1px solid #ddd; border-radius: 4px; padding: 5px; width: 150px;' >
<br>
      <h1>   <?php  echo " : $_SESSION[email]" ; ?><h1>
       </div>
         &nbsp&nbsp&nbsp&nbsp&nbsp
       <input type="file" name="pic" accept="image/*" id="photo">
       <button id="edit"> edit </button>

       <h1 >Traveller details</h1>
       <h4 >Main info</h4>
<hr>

       <form class="form-inline" onsubmit="return validateForm() "name="Form" action="Update.php" method="POST" >

<div>
          <label for="focusedInput">Full Name</label>
           <input class="form-control" name="Fullname" id="fullname" type="text" value="<?php echo $fullname; ?>"  style="width:15%" disabled>
           <label id="error1" style="color:red";></label>
</div>

<div>
           <label for="focusedInput">Birth</label>
         &nbsp&nbsp        &nbsp&nbsp    <input class="form-control" id="birth" type="Date" name="Birth" value="<?php echo $birth; ?>" style="width:15%" disabled>
           <label id="error2" style="color:red";></label>
</div>



    <div>
           <label for="focusedInput">Email </label>
       &nbsp&nbsp       &nbsp&nbsp       <input class="form-control" id="email" type="text" name="Email" value="<?php echo $email; ?>" style="width:15%" disabled>
           <label id="error3" style="color:red";></label>
  </div>

           <div><label for="focusedInput">Password </label>
         &nbsp&nbsp       <input class="form-control" id="password" type="password" name="Password" value="<?php echo $password; ?>" style="width:15%" disabled>
           <label id="error4" style="color:red";></label>
</div>
  <div>         <label for="focusedInput">Phone number </label>
       &nbsp         <input class="form-control" id="phoneNumber" type="text" name="PhoneNumber" value="<?php echo $phone; ?>" style="width:15%" disabled>
           <label id="error5" style="color:red";></label>
</div>           <h3> Contact Info </h3>
           <hr>
    <div>       <label for="focusedInput">Address </label>
           <input class="form-control" id="address" type="text" name="Address" value="<?php echo $address; ?>" style="width:15%" disabled>
           <label id="error6" style="color:red";></label>
</div>
<div>
           <label for="focusedInput">City</label>
           <input class="form-control" id="city" type="text" name="City" value="<?php echo $city; ?>" style="width:15%" disabled>
           <label id="error7" style="color:red";></label>
  </div>
  <div>         <label for="focusedInput">Contry </label>
       &nbsp         <input class="form-control" id="contry" type="text" name="Contry" value="<?php echo $country; ?>" style="width:15%" disabled>
           <label id="error8" style="color:red";></label>
</div>

<br>

           <button class="button button5" id="edit2" name="data" type="button">Edit </button>
           <button class="button button5" id="save" name="data" type="button" onclick="vForm()" >Save </button>
           <button class="button button5" id="showAll" name="data" type="button">show all orders </button>
           <button class="button button5" id="showFlights" name="flights" type="button" onclick="inserFlights()">insert flights </button>
           <button class="button button5" id="showCars" name="cars" type="button" onclick="inserCars()">insert cars </button>
           <button class="button button5" id="showhotels" name="hotels" type="button" onclick="inserHotels()">insert hotels </button>
           <button class="button button5" id="showhotelsWithFlights" name="hotelsWithFlights" type="button" onclick="inserFlightWithHotel()">insert hotelsWithFlights </button>

           <input type="submit" value="Submit" name="submit">

        </form>
        <!-- ajax request to insert data from json from php file -->
        <script>
          function inserFlights() {
          $.ajax({
            url:"insert_Jsons.php", //the page containing php script
            type: "post", //request type,
           data: "func=flights",
            success:function(result){

             alert(result);
           }
         });
     }
           function inserHotels() {
           $.ajax({
             url:"insert_Jsons.php", //the page containing php script
             type: "post", //request type,
            data: "func=hotel",
             success:function(result){

                alert(result);
            }
          });
      }
      function inserCars() {
      $.ajax({
        url:"insert_Jsons.php", //the page containing php script
        type: "post", //request type,
       data: "func=car",
        success:function(result){

         alert(result);
       }
      });
    }
      function inserFlightWithHotel() {
      $.ajax({
        url:"insert_Jsons.php", //the page containing php script
        type: "post", //request type,
       data: "func=flightAndHotel",
        success:function(result){

         alert(result);
       }
      });
      }
     </script>
        <!-- show buttons if user session is Admin else hide buttons -->
        <script type="text/javascript">
        var userSessionname="<?php echo $_SESSION['email']; ?>";
                if(userSessionname=="Admin"){
                   $("#showFlights").show();
                   $("#showCars").show();
                   $("#showhotels").show();
                   $("#showhotelsWithFlights").show();
                }
                else {
                  $("#showFlights").hide();
                  $("#showCars").hide();
                  $("#showhotels").hide();
                  $("#showhotelsWithFlights").hide();
                }
        </script>

      </br>
     </hr>
     </br>
        <div id="hotelsFromJson"> </br> </div> </br></hr>
        <div id="carsFromJson">  </br>  </div></br></hr>
        <div id="flightsFromJson">  </br>  </div></br></hr>

       <div id="team" class="container-fluid bg-b ">
         <div class="row">
           <div class="col-sm-4">
           </div>
           <div class="col-sm-4">
             <nav class="navbar1 navbar-expand-sm bg-light ">
                 <strong>
       		    <p >
       			  <table class="table table-striped">
       				<thead>
       				  <tr>
       				  <th class="txt2" >Group Names

                 </th>
       				  </tr></thead>
       				  <tbody>

       					 <tr>
       					  <td class="txt1">  Marwan Keadan
       					   </td>
                 </tr>
                 <tr>
                    <td class="txt1">  Morad Sleman
                     </td>
                  </tr>

       			  </p>
               <footer>
       <p>כל הזכויות שמורות Ⓒ</p>
       </footer>

                 </strong>
             </nav>
           </div>
       </div>
         </div>


 </body>
 <script>
   var flag=true;0
   var x = document.forms["Form"]["Fullname"].value;
   var y=document.forms["Form"]["Birth"].value;
   var z = document.forms["Form"]["Email"].value;
   var a = document.forms["Form"]["Password"].value;
   var b =document.forms["Form"]["PhoneNumber"].value;
   var c =document.forms["Form"]["Address"].value;
   var d =document.forms["Form"]["City"].value;
   var e =document.forms["Form"]["Contry"].value;

 $ ( document ).ready(function() {
   $("#edit").on('click',function(){

     if(document.getElementById("photo").files.length!=0){
       var filePath=document.getElementById("photo").files[0].name;
       console.log(filePath);
       // $("#profilepic").remove();
       // $("#profilepic").append("<img src="+filePath+" style='border: 1px solid #ddd; border-radius: 4px; padding: 5px; width: 150px;height: 150px;'>");
      $("#toreplace").prop("src",filePath);
     }
   })
   $("#edit2").on('click',function(){
     $( "#fullname" ).prop( "disabled", false );
     $( "#birth" ).prop( "disabled", false );
     $( "#email" ).prop( "disabled", false );
     $( "#password" ).prop( "disabled",false );

     $( "#phoneNumber" ).prop( "disabled", false );
     $( "#address" ).prop( "disabled", false );
     $( "#city" ).prop( "disabled", false );
     $( "#contry" ).prop( "disabled", false );

   })
   })
   function vForm(){

     console.log("entered vForm");
     empty();
     console.log(flag);
       if(flag)
       {
         var x = document.forms["Form"]["Fullname"].value;
         var y=document.forms["Form"]["Birth"].value;
         var z = document.forms["Form"]["Email"].value;
         var a = document.forms["Form"]["Password"].value;
         var b =document.forms["Form"]["PhoneNumber"].value;
         var c =document.forms["Form"]["Address"].value;
         var d =document.forms["Form"]["City"].value;
         var e =document.forms["Form"]["Contry"].value;
           $( "#fullname" ).prop( "value", x );
           $( "#birth" ).prop( "value", y );
           $( "#email" ).prop( "value", z );
           $( "#password" ).prop( "value", a );

           $( "#phoneNumber" ).prop( "value", b );
           $( "#address" ).prop( "value", c );
           $( "#city" ).prop( "value",d);
           $( "#contry" ).prop( "value", e );

           $( "#fullname" ).prop( "disabled", true );
           $( "#birth" ).prop( "disabled", true );
           $( "#email" ).prop( "disabled", true );
           $( "#password" ).prop( "disabled",true );

           $( "#phoneNumber" ).prop( "disabled", true );
           $( "#address" ).prop( "disabled", true );
           $( "#city" ).prop( "disabled", true );
           $( "#contry" ).prop( "disabled", true );

             document.getElementById("error1").innerHTML="";
             document.getElementById("error2").innerHTML="";
             document.getElementById("error3").innerHTML="";
             document.getElementById("error4").innerHTML="";
             document.getElementById("error5").innerHTML="";
             document.getElementById("error6").innerHTML="";
             document.getElementById("error7").innerHTML="";
             document.getElementById("error8").innerHTML="";


           window.alert("You informations was edited successfully!");
       }
   }

 function empty()
 {
   flag=true;
   var alphaExp = /^[a-zA-Z]+$/;
   console.log(x);
   var x = document.forms["Form"]["Fullname"].value;
   if (x == null || x == "") {
   document.getElementById("error1").innerHTML="*Please enter name";
 flag=false;
   }

     if (!(x.match(alphaExp))){
     document.getElementById("error1").innerHTML="*Wrong name input";
     flag=false;
     }

       var y=document.forms["Form"]["Birth"].value;
   if(y==null||y==""){
           document.getElementById("error2").innerHTML="*Please put Your Birthday Date";
           flag=false;
         }

         var z = document.forms["Form"]["Email"].value;
   if(z==null || z==""){
    document.getElementById("error3").innerHTML="*Please enter email";
    flag=false;
   }

    a = document.forms["Form"]["Password"].value;
   if(a==null || a==""){
    document.getElementById("error4").innerHTML="*Please enter password";
    flag=false;
   }
 b =document.forms["Form"]["PhoneNumber"].value;
   if(b==null || b==""){
  document.getElementById("error4").innerHTML="*please enter your phoneNumber";
  flag=false;
 }

   console.log(b);

   if(!(b.match(/^[0-9]{10}$/)))
         {
          document.getElementById("error5").innerHTML="*please enter A Correct PhoneNumber";
        flag=false;
         }
         var c=document.forms["Form"]["Address"].value;
       if(c==null||c==""){
               document.getElementById("error6").innerHTML="*Please put Your Address";
               flag=false;
             }
             d = document.forms["Form"]["City"].value;
            if (d == null || d == "") {
            document.getElementById("error7").innerHTML="*Please enter name";
          flag=false;
            }
            e = document.forms["Form"]["Contry"].value;
           if (e == null || e == "") {
           document.getElementById("error8").innerHTML="*Please enter code";
         flag=false;
           }

 }
   </script>


    </html>
