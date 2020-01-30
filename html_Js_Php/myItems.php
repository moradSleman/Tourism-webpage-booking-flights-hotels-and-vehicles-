<!DOCTYPE html>
<html lang="en" dir="ltr">
<?php
session_start();
if((!$_SESSION["email"])){
  header("Location: login.php");
}
if(isset($_POST['logout'])){
  session_destroy();
  header('Location: login.php');
}
?>
    <head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/vue"></script>
  <script type="text/javascript" language="javascript" src="hotels.json"></script>
  <script type="text/javascript">
    var username="<?php echo $_SESSION['email']; ?>";
  $(document).ready(function() {
    $("#show").click(function(){
      if(username=='Admin'){
        $.getJSON('hotels.json', function(data) {
            $.each(data, function(i, result){
              $('#hotelsFromJson').append('</hr></br><div style="background-color:green; color:white ; size:23px ;"> dateCheckIn:' + result.dateCheckIn + '&nbsp&nbsp&nbspdateCheckOut :'+ result.dateCheckOut + '  childNum:'
              + result.childNum + '&nbsp&nbsp&nbspadultsNum:'+ result.adultsNum + '&nbsp&nbsp&nbsproomsNum:' +result.roomsNum + '&nbsp&nbsp&nbspinfo :'+ result.info +'</br></br> </hr> </div> ');
              });
            });
          }
      });
    });

  </script>
<style>
.rating {
    float:left;
}

/* :not(:checked) is a filter, so that browsers that don’t support :checked don’t
   follow these rules. Every browser that supports :checked also supports :not(), so
   it doesn’t make the test unnecessarily selective */
.rating:not(:checked) > input {
    position:absolute;
    top:-9999px;
    clip:rect(0,0,0,0);
}

.rating:not(:checked) > label {
    float:right;
    width:1em;
    padding:0 .1em;
    overflow:hidden;
    white-space:nowrap;
    cursor:pointer;
    font-size:200%;
    line-height:1.2;
    color:#ddd;
    text-shadow:1px 1px #bbb, 2px 2px #666, .1em .1em .2em rgba(0,0,0,.5);
}

.rating:not(:checked) > label:before {
    content: '★ ';
}

.rating > input:checked ~ label {
    color: #f70;
    text-shadow:1px 1px #c60, 2px 2px #940, .1em .1em .2em rgba(0,0,0,.5);
}

.rating:not(:checked) > label:hover,
.rating:not(:checked) > label:hover ~ label {
    color: gold;
    text-shadow:1px 1px goldenrod, 2px 2px #B57340, .1em .1em .2em rgba(0,0,0,.5);
}

.rating > input:checked + label:hover,
.rating > input:checked + label:hover ~ label,
.rating > input:checked ~ label:hover,
.rating > input:checked ~ label:hover ~ label,
.rating > label:hover ~ input:checked ~ label {
    color: #ea0;
    text-shadow:1px 1px goldenrod, 2px 2px #B57340, .1em .1em .2em rgba(0,0,0,.5);
}

.rating > label:active {
    position:relative;
    top:2px;
    left:2px;
}


a{
  color:white;
}
h6, h1,h3,h4{
    color: white;
  }
body{ background-image:url("https://cdn.hipwallpaper.com/i/89/88/1rdliL.jpg"); }

input[type="text"] {
    width: 150px;
    display: block;
    margin-bottom: 10px;
    background-color: white;
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
              <li><a href="shoppingCart.php" id="shopCart" class="aClass1" >shopping Cart</a></li>
              <li><a href="shoppingCart.php" id="shopCart" class="aClass1" >my items</a></li>
              <li><a href="account.php" id="logout" class="aClass1" >Log out</a></li>
          </ul>
     </div>
     <div>
       <button type="button" class="btn btn-info" onclick="searchSh('ById')">get all my items</button> </br>
        </div>
   </br>
<div id="vueSelection">
<form class="form-inline" role="from">
</br><div style="background: red;" id="'+i+'" class="form-group">
<input id="searchF" placeholder="input flight destination"></input>&nbsp&nbsp
<button type="button" class="btn btn-info" onclick="searchSh('vueByDes')">search flight</button><div id="hideen"> </br></br>
<label>flightType:</label>&nbsp&nbsp<label>{{flightType}}</label></br></br>
<label>from des:</label>&nbsp&nbsp<label>{{fromDes}}</label>&nbsp&nbsp&nbsp&nbsp<label>to des:</label>&nbsp&nbsp<label>
{{toDes}}</label></br></br><label>departure date</label>&nbsp&nbsp<label>{{departureDate}}</label>&nbsp&nbsp&nbsp<label>return date
</label><label>{{returnDate}}</label>&nbsp&nbsp&nbsp<label>numChilds:</label>&nbsp&nbsp<label>{{numChilds}}</label>&nbsp&nbsp&nbsp&nbsp
<label>numAdults</label>&nbsp&nbsp<label>{{numAduldts}}</label></div></form></br></br>
</div>
</div>
 </br>
     <div id="flightsCarts">

     </div>
<script type="text/javascript">
$("#hideen").hide();
var myObject = new Vue({
    el: '#vueSelection',
    data: {flightType: '',fromDes: '',toDes: '',departureDate: '',returnDate: '',numChilds: '',numAduldts: ''}
});

function appendVueFlight(obj){
  $("#hideen").show();
  myObject.flightType = obj[0].flightType;
  myObject.fromDes = obj[0].fromDes;
  myObject.toDes = obj[0].toDes;
  myObject.departureDate = obj[0].departureDate;
  myObject.returnDate = obj[0].returnDate;
  myObject.numChilds = obj[0].numChilds;
  myObject.numAduldts = obj[0].numAduldts;

}
function appendFlights(result) {
  var i=-5
  var i2=-8;
  var i3=-16;
  var i4=22;
  var a=1000;
  $.each(result, function( key, value ) {
    var node = document.createElement('div');
    node.innerHTML = '<form class="form-inline" role="from">'
    +'</br><div style="background: red;" id="'+i+'" class="form-group">'
  +'<label>flightType:</label>&nbsp&nbsp<label>'+value.flightType+'</label></br></br>'
  +'<label>from des:</label>&nbsp&nbsp<label>'+value.fromDes+'</label>&nbsp&nbsp&nbsp&nbsp<label>to des:</label>&nbsp&nbsp<label>'
  +value.toDes+'</label></br></br><label>departure date</label>&nbsp&nbsp<label>'+value.departureDate+'</label>&nbsp&nbsp&nbsp<label>return date'
  +'</label>&nbsp&nbsp&nbsp<label>numChilds:</label>&nbsp&nbsp<label>'+value.numChilds+'</label>&nbsp&nbsp&nbsp&nbsp<label>numAdults</label>&nbsp&nbsp<label>'
  +value.numAduldts+'</label></div></form></br></br></div>';
   document.getElementById('flightsCarts').appendChild(node);
});
}
function searchSh(desOrId) {
  var userEmail="<?php echo $_SESSION['email'];?>";
var v=desOrId;
$.ajax({
  url:"getAllMyFlights.php", //the page containing php script
  type: "post", //request type,
 data:"&userEmail="+encodeURIComponent(userEmail) ,
  success:function(result){
    if(result!="false"){
      var obj = JSON.parse(result);
      searchFlightsShoped(obj,v);
    }
    else {
      alert("no flights was ordered");
    }
 }
});
}

function searchFlightsShoped(result,byDesOrById) {
  var bY=byDesOrById;
  var res=result;
  var des=document.getElementById("searchF").value;
  if(bY=='ById'){
   $.each(res, function( key, value ) {
     var flighId=value.flightID;
     $.ajax({
       url:"getFlightShopped.php", //the page containing php script
       type: "post", //request type,
      data:"func=ById"+"&flightID1=" + encodeURIComponent(flighId) + "&flightDes= ",
       success:function(result){
         if(result!="false"){
           var obj = JSON.parse(result);
           appendFlights(obj);
         }
         else {
           alert("select flights doesnot success");
         }
      }
     });
   });
 }
 if(bY=='vueByDes'){
   $.ajax({
     url:"getFlightShopped.php", //the page containing php script
     type: "post", //request type,
    data:"func=vueByDes"+"&flightDes="+encodeURIComponent(des)+"&flightID1= ",
     success:function(result){
       if(result!="false"){
         var res=result;
         var obj = JSON.parse(res);
         appendVueFlight(obj);
       }
       else {
         alert("select flights doesnot success");
       }
    }
   });
 }
}
</script>

</body>
</html>
