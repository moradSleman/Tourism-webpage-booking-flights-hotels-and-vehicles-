<!DOCTYPE html>

<html>
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
              <li><a href="myItems.php" id="shopCart" class="aClass1" >my items</a></li>
              <li><a href="account.php" id="logout" class="aClass1" >Log out</a></li>
          </ul>

     </div>






     <div class="container-fluid">
    	<div class="row">
     <ul class="nav nav-tabs" id="tabs">
       <li><a href="#flightlist" data-toggle="tab">flight</a></li>
         <li><a href="#hotelform" data-toggle="tab">Hotel</a></li>
         <li><a href="#carsHotelsform" data-toggle="tab">Flights+Hotels</a></li>
       <li><a href="#carform" data-toggle="tab">Car</a></li>

     </ul>

<div class="tab-content">

<!-- form of flights + hotels -->
<div class="tab-pane" id="carsHotelsform">
          <form class="form-inline" action="/action_page.php">
            &nbsp;&nbsp;&nbsp;


                <div class="form-group"> &nbsp;&nbsp;&nbsp;
                <H4>Departure:</H4>
                  <input type="text"  value="   " size="20">

              </div>
              &nbsp;&nbsp;&nbsp;

                <div class="form-group"> &nbsp;&nbsp;&nbsp;
                <H4>Return:</H4>
                  <input type="text"  value="   " size="20">

              </div>
            </form>

            <form class="form-inline" action="/action_page.php">
              &nbsp;&nbsp;&nbsp;
              <div class="form-group"> &nbsp;&nbsp;&nbsp;
              <H4>from:</H4>
                <input type="text"  value="   " size="30">

            </div>
             &nbsp;&nbsp;&nbsp;
              <div class="form-group"> &nbsp;&nbsp;&nbsp;
              <H4>to</H4>
                <input type="text"  value="   " size="30">

            </div>


     </form>

  <form class="form-inline" action="/action_page.php">
     <div class="form-group" style="font-size:23px" > &nbsp;&nbsp;
       <select>
           <option value="" style="font-size:20px">1 adult</option>
           <option value=" ">2 adult</option>
           <option value=" ">3 adult</option>

           <option value=" ">4 adult</option>
           <option value=" ">4 adult</option>


           </select>
</div>
&nbsp;&nbsp;&nbsp;
</form>
<div>
<button type="button" class="btn btn-info">search flights</button>

<button><img src="hamlatsot3.png" width="150" heigh="20"></button>


</div>

      </div>


<!--form of flight-->
<!--flight list menu-->
<div id="flightlist" class="tab-pane active" margin-right:"45%">
<div class="container-fluid">
<div class="row">
  <ul class="nav nav-tabs" id="tabs">
   <li><a href="#flightReturnform" data-toggle="tab">return</a></li>
   <li><a href="#flightOneWayForm" data-toggle="tab">one way</a></li>
   <li><a href="#flightMultiCityForm" data-toggle="tab">multi city</a></li>
</ul>

<div class="tab-content">
<!--flight return form-->
<div   id="flightReturnform" class="tab-pane" margin-right:"45%" >

<label>flight info:</label>
</br>
<form class="form-inline" role="from">
<div class="form-group">
  <input id="from1" placeholder="from">&nbsp
<input id="to1" placeholder="To">
</br>
</br>
<label>departure date</label>
<input id="depDate1" type="date">&nbsp
<label>return date</label>
<input id="retDate1"  type="date">
</br>  </br>
<input id="numAdults1" placeholder="number of adults">&nbsp
<input id="numChilds1" placeholder="number of childs">
</div>
</form>
<script src="https://cdn.jsdelivr.net/npm/vue"></script>
<body>

  <div id="flights">
  </div>
<script>
function appendFlights(result) {
  var i=-100;
  var i2=-8;
  var i3=-16;
  var i4=22;
  $.each(result, function( key, value ) {
    var node = document.createElement('div');
    node.innerHTML = '<form class="form-inline" role="from">'
    +'</br><div style="background: red;" id="'+i+'" class="form-group">'
  +'<label>flightType:</label>&nbsp&nbsp<label>'+value.flightType+'</label></br></br>'
  +'<label>from des:</label>&nbsp&nbsp<label>'+value.fromDes+'</label>&nbsp&nbsp&nbsp&nbsp<label>to des:</label>&nbsp&nbsp<label>'
  +value.toDes+'</label></br></br><label>departure date</label>&nbsp&nbsp<label>'+value.departureDate+'</label>&nbsp&nbsp&nbsp<label>return date'
  +'</label>&nbsp&nbsp&nbsp<label>numChilds:</label>&nbsp&nbsp<label>'+value.numChilds+'</label>&nbsp&nbsp&nbsp&nbsp<label>numAdults</label>&nbsp&nbsp<label>'
  +value.numAduldts+'</label></div></form></br>'
  +'<button type="button" class="btn btn-info" onclick="insertShoppingCart('+value.flightID+')">add to shopping Cart</button>'
  +'<details><summary class="astext" style="color:green">click to add review</summary></br></hr>'+
  '<div style="form=class-inline"><label>text :</label></br><textarea id="'+i4+'" class="form-inline" rows="4" cols="50"></textarea></br></br>'
  +'<label class="form-inline">choose an image</label><input id="'+i2+'" class="form-inline" type="file" name="pic" accept="image/*">'+
  '</br><div style="form=class-inline"><label>rating:</label>&nbsp&nbsp<input id="'+i3+'" placeholder="rating from 1-5">'+
  '</br><button type="button" class="btn btn-info" onclick="insertReview('+value.flightID+','+i4+','+i2+','+i3+');">insert Review</button>'
  +'</details></br></div>';
    document.getElementById('flights').appendChild(node);
    serchReview(value.flightID,i);
    i++;
});
}
function insertShoppingCart(flightID){
  var flightID1=flightID;
  $.ajax({
    url:"insertShopCart.php", //the page containing php script
    type: "post", //request type,
   data: "flightID1="+encodeURIComponent(flightID1)+"&email=<?php echo $_SESSION['email'];?>",
    success:function(result){
    alert(result);
  }
  });
  }
function insertReview(flightID,i4,i2,i3){
  var text=document.getElementById(i4.toString()).value;
  var rating=$("#"+i3.toString()).val();
  $.ajax({
    url:"insertReview.php", //the page containing php script
    type: "post", //request type,
   data: "flightID="+encodeURIComponent(flightID)+"&email=<?php echo $_SESSION['email'];?>&previewStras="+encodeURIComponent(rating)+"&previewDetails="+encodeURIComponent(text),
    success:function(result){
    alert(result);
}
});
}
function serchReview(flightID,i){
  var x=i;
  $.ajax({
    url:"searchReviews.php", //the page containing php script
    type: "post", //request type,
   data: "onFlightID="+encodeURIComponent(flightID)+"&onHotelID= &onCarID= &onFlightWithHotelID= ",
    success:function(result){
      if(result!="false"){
        var res=result;
        var obj = JSON.parse(res);
        appendReviews(obj,x);
      }
}
});
}
function appendReviews(obj,i){
  var j=30;
  var k=200;
  var count=1;
  $.each(obj, function( key, value ) {
    var node = document.createElement('div');
    node.innerHTML ='</br><div style="margin-left: 35px; background: green;" id="'+j+'"><label>Reply:'+count+'</label></br><label>number of stars rating:</label>&nbsp&nbsp<label>'
    +value.previewStras+'</label></br><label>reply Text:</label>&nbsp&nbsp<label>'+value.previewDetails+'</br></div>'+
    '<details><summary class="astext" style="color:white">click to add reply</summary></br></hr>'+
    '<div style="form=class-inline"><label>text :</label></br><textarea id="'+k+'" class="form-inline" rows="4" cols="50"></textarea></br>'+
    '<button type="button" class="btn btn-info" onclick="insertReviewReply('+value.previewID+','+k+')">insert Review</button></details></br>';
    document.getElementById(i).appendChild(node);
    searchReviewReply(value.previewID,j);
    j++;
    count++;
});
}
function insertReviewReply(previewID,k){
  var text=document.getElementById(k.toString()).value;
  $.ajax({
    url:"insertReviewReply.php", //the page containing php script
    type: "post", //request type,
   data: "previewID="+encodeURIComponent(previewID)+"&textReply="+encodeURIComponent(text),
    success:function(result){
    alert(result);
}
});
}
function appendReviewReplies(obj,j){
  $.each(obj, function( key, value ) {
    var node = document.createElement('div');
    node.innerHTML ='<div style="margin-left: 50px; background: yellow;">'+value.textReply+'</div>';
    document.getElementById(j).appendChild(node);
});
}
function searchReviewReply(reviewID,j){
  $.ajax({
    url:"searchReviewReplies.php", //the page containing php script
    type: "post", //request type,
   data: "previewID="+encodeURIComponent(reviewID),
    success:function(result){
      if(result!="false"){
        var res=result;
        var obj = JSON.parse(res);
        appendReviewReplies(obj,j);
      }
}
});
}
function serchReturnFlight(flightType1) {
  var x1=document.getElementById("from1").value;
  var x2=document.getElementById("to1").value;
  var x3=document.getElementById("depDate1").value;
  var x4=document.getElementById("retDate1").value;
  var x6=document.getElementById("numAdults1").value;
  var x7=document.getElementById("numChilds1").value;
  var x8=flightType1;
  search(x8,x1,x2,x3,x4,x6,x7);

}
function search(flightType,from,to,depdate,retdate,numAdults,numChilds) {
  var valueReturned;
$.ajax({
  url:"searchflights.php", //the page containing php script
  type: "post", //request type,
 data: "func=searchFlight"+"&flightType1="+encodeURIComponent(flightType) + "&from1="+encodeURIComponent(from) + "&to1="+encodeURIComponent(to)+
 "&depdate1="+encodeURIComponent(depdate)+"&retdate1="+encodeURIComponent(retdate)+"&numAdults1="+encodeURIComponent(numAdults)
 +"&numChilds1="+encodeURIComponent(numChilds),
  success:function(result){
    if(result!="false"){
      var res=result;
      var obj = JSON.parse(res);
      appendFlights(obj);
    }
    else {
      alert (res);
    }
 }
});
}
</script>


<div>
<button type="button" class="btn btn-info" onclick="serchReturnFlight('return')">search flights</button>
<button><img src="hamlatsot1.png" width="150" heigh="20"></button>

</div>
</br>
</br>
</div>

<!--fligh one way form for one flight-->
<div   id="flightOneWayForm" class="tab-pane" margin-right:"45%" >

<label>flight info:</label>
</br>
<form class="form-inline" role="from">
<div class="form-group">
<input placeholder="from">&nbsp
<input placeholder="To">
</br>
</br>
<label>departure date</label>
<input type="date">
</br>
<details>
<summary class="astext" style="color:green">
click to add review
</summary>
</br>
</hr>
<label class="form-inline">text :</label></br>
<textarea class="form-inline" rows="4" cols="50"></textarea>
</br>
</br>
<label class="form-inline">choose an image</label>
<input class="form-inline" type="file" name="pic" accept="image/*">
</br><div style="form=class-inline">
<label>rating:</label></br>
<fieldset class="rating">
<input type="radio" id="star5" name="rating" value="5" /><label for="star5" title="Rocks!">5 stars</label>
<input type="radio" id="star4" name="rating" value="4" /><label for="star4" title="Pretty good">4 stars</label>
<input type="radio" id="star3" name="rating" value="3" /><label for="star3" title="Meh">3 stars</label>
<input type="radio" id="star2" name="rating" value="2" /><label for="star2" title="Kinda bad">2 stars</label>
<input type="radio" id="star1" name="rating" value="1" /><label for="star1" title="Sucks big time">1 star</label>
</fieldset></div></br></br>
</details>

<details>
<summary class="astext" style="color:#0000FF">
click to add flight
</summary>
</br>
</hr>
<label>Fight 2</label>
</br>
<form class="form-inline" role="from">
<div class="form-group">
<input placeholder="from">&nbsp
<input placeholder="To">
</br>
</br>
<label>departure date</label>
<input type="date">
</br>
<details>
<summary class="astext" style="color:green">
click to add review
</summary>
</br>
</hr>
<label class="form-inline">text :</label></br>
<textarea class="form-inline" rows="4" cols="50"></textarea>
</br>
</br>
<label class="form-inline">choose an image</label>
<input class="form-inline" type="file" name="pic" accept="image/*">
</br><div style="form=class-inline">
<label>rating:</label></br>
<fieldset class="rating">
<input type="radio" id="star5" name="rating" value="5" /><label for="star5" title="Rocks!">5 stars</label>
<input type="radio" id="star4" name="rating" value="4" /><label for="star4" title="Pretty good">4 stars</label>
<input type="radio" id="star3" name="rating" value="3" /><label for="star3" title="Meh">3 stars</label>
<input type="radio" id="star2" name="rating" value="2" /><label for="star2" title="Kinda bad">2 stars</label>
<input type="radio" id="star1" name="rating" value="1" /><label for="star1" title="Sucks big time">1 star</label>
</fieldset></div></br></br>
</details>

<details>
<summary class="astext" style="color:#0000FF">
click to add flight
</summary>
</br>
<hr>
<label>Fight 3</label>
</br>
<form class="form-inline" role="from">
<div class="form-group">
<input placeholder="from">&nbsp
<input placeholder="To">
</br>
</br>
<label>departure date</label>
<input type="date">
</br>
<details>
<summary class="astext" style="color:green">
click to add review
</summary>
</br>
</hr>
<label class="form-inline">text :</label></br>
<textarea class="form-inline" rows="4" cols="50"></textarea>
</br>
</br>
<label class="form-inline">choose an image</label>
<input class="form-inline" type="file" name="pic" accept="image/*">
</br><div style="form=class-inline">
<label>rating:</label></br>
<fieldset class="rating">
<input type="radio" id="star5" name="rating" value="5" /><label for="star5" title="Rocks!">5 stars</label>
<input type="radio" id="star4" name="rating" value="4" /><label for="star4" title="Pretty good">4 stars</label>
<input type="radio" id="star3" name="rating" value="3" /><label for="star3" title="Meh">3 stars</label>
<input type="radio" id="star2" name="rating" value="2" /><label for="star2" title="Kinda bad">2 stars</label>
<input type="radio" id="star1" name="rating" value="1" /><label for="star1" title="Sucks big time">1 star</label>
</fieldset></div></br></br>
</details>

</details>
</details>
</br>  </br> <hr>
<input placeholder="number of adults">&nbsp
<input placeholder="number of childs">
</div>
</form>
</br>
<div>
<button type="button" class="btn btn-info">search flights</button>

<button><img src="hamlatsot1.png" width="150" heigh="20"></button>

</div>
</br>
</br>
</div>


<!--multy-city flight form-->
<div   id="flightMultiCityForm" class="tab-pane" margin-right:"45%" >
<label>flight info:</label>
</br>
<form class="form-inline" role="from">
<div class="form-group">
<input placeholder="from">&nbsp
<input placeholder="To">
<label>departure date</label>
<input type="date">
</br>
<input placeholder="from">&nbsp
<input placeholder="To">
<label>departure date</label>
<input type="date">
</br>
<details>
<summary class="astext" style="color:green">
click to add review
</summary>
</br>
</hr>
<label class="form-inline">text :</label></br>
<textarea class="form-inline" rows="4" cols="50"></textarea>
</br>
</br>
<label class="form-inline">choose an image</label>
<input class="form-inline" type="file" name="pic" accept="image/*">
</br><div style="form=class-inline">
<label>rating:</label></br>
<fieldset class="rating">
<input type="radio" id="star5" name="rating" value="5" /><label for="star5" title="Rocks!">5 stars</label>
<input type="radio" id="star4" name="rating" value="4" /><label for="star4" title="Pretty good">4 stars</label>
<input type="radio" id="star3" name="rating" value="3" /><label for="star3" title="Meh">3 stars</label>
<input type="radio" id="star2" name="rating" value="2" /><label for="star2" title="Kinda bad">2 stars</label>
<input type="radio" id="star1" name="rating" value="1" /><label for="star1" title="Sucks big time">1 star</label>
</fieldset></div></br></br>
</details>
<details>
<summary class="astext" style="color:#0000FF">
click to add flight
</summary>
</br>
</hr>
<label>Fight 2</label>
</br>
<form class="form-inline" role="from">
<div class="form-group">
<input placeholder="from">&nbsp
<input placeholder="To">
<label>departure date</label>
<input type="date">
</br>
</br>
<label>departure date</label>
<input type="date">
</br>
<details>
<summary class="astext" style="color:green">
click to add review
</summary>
</br>
</hr>
<label class="form-inline">text :</label></br>
<textarea class="form-inline" rows="4" cols="50"></textarea>
</br>
</br>
<label class="form-inline">choose an image</label>
<input class="form-inline" type="file" name="pic" accept="image/*">
</br><div style="form=class-inline">
<label>rating:</label></br>
<fieldset class="rating">
<input type="radio" id="star5" name="rating" value="5" /><label for="star5" title="Rocks!">5 stars</label>
<input type="radio" id="star4" name="rating" value="4" /><label for="star4" title="Pretty good">4 stars</label>
<input type="radio" id="star3" name="rating" value="3" /><label for="star3" title="Meh">3 stars</label>
<input type="radio" id="star2" name="rating" value="2" /><label for="star2" title="Kinda bad">2 stars</label>
<input type="radio" id="star1" name="rating" value="1" /><label for="star1" title="Sucks big time">1 star</label>
</fieldset></div></br></br>
</details>

<details>
<summary class="astext" style="color:#0000FF">
click to add flight
</summary>
</br>
<hr>
<label>Fight 3</label>
</br>
<form class="form-inline" role="from">
<div class="form-group">
<input placeholder="from">&nbsp
<input placeholder="To">
<label>departure date</label>
<input type="date">
</br>
<details>
<summary class="astext" style="color:green">
click to add review
</summary>
</br>
</hr>
<label class="form-inline">text :</label></br>
<textarea class="form-inline" rows="4" cols="50"></textarea>
</br>
</br>
<label class="form-inline">choose an image</label>
<input class="form-inline" type="file" name="pic" accept="image/*">
</br><div style="form=class-inline">
<label>rating:</label></br>
<fieldset class="rating">
<input type="radio" id="star5" name="rating" value="5" /><label for="star5" title="Rocks!">5 stars</label>
<input type="radio" id="star4" name="rating" value="4" /><label for="star4" title="Pretty good">4 stars</label>
<input type="radio" id="star3" name="rating" value="3" /><label for="star3" title="Meh">3 stars</label>
<input type="radio" id="star2" name="rating" value="2" /><label for="star2" title="Kinda bad">2 stars</label>
<input type="radio" id="star1" name="rating" value="1" /><label for="star1" title="Sucks big time">1 star</label>
</fieldset></div></br></br>
</details>

</details>
</details>

</br>  </br> <hr>
<input placeholder="number of adults">&nbsp
<input placeholder="number of childs">
</div>
</form>
</br>
<div>
<button type="button" class="btn btn-info">search flights</button>

<button><img src="hamlatsot1.png" width="150" heigh="20"></button>


</div>
</br>
</br>
</div>
</div>
</div>
</div>
</div>

<!--form of hotel-->
<div  id="hotelform" class="tab-pane" style="margin-right:45%" >
<label>hotel info :</label>
</br>
<form class="form-inline" role="from">
<div class="form-group">
 <input placeholder="e.g. countre,city,district or landmark">
</br></br>
<label>date check-in</label>
<input type="date">&nbsp
<label>date check-out</label>
<input type="date" >
</br></br>
<input placeholder="rooms number">&nbsp
<input placeholder="adults number">&nbsp
<input placeholder="childs number">
</div>
</form>
</br>
<details>
<summary class="astext" style="color:green">
click to add review
</summary>
</br>
</hr>
<label class="form-inline">text :</label></br>
<textarea class="form-inline" rows="4" cols="50"></textarea>
</br>
</br>
<label class="form-inline">choose an image</label>
<input class="form-inline" type="file" name="pic" accept="image/*">
</br><div style="form=class-inline">
<label>rating:</label></br>
<fieldset class="rating">
<input type="radio" id="star5" name="rating" value="5" /><label for="star5" title="Rocks!">5 stars</label>
<input type="radio" id="star4" name="rating" value="4" /><label for="star4" title="Pretty good">4 stars</label>
<input type="radio" id="star3" name="rating" value="3" /><label for="star3" title="Meh">3 stars</label>
<input type="radio" id="star2" name="rating" value="2" /><label for="star2" title="Kinda bad">2 stars</label>
<input type="radio" id="star1" name="rating" value="1" /><label for="star1" title="Sucks big time">1 star</label>
</fieldset></div></br></br>
</details>

<button id="show" type="button" class="btn btn-info" style="margin-top:18px;" >
        show all hotels searches</button>
<div id="hotelsFromJson"> </div>

</br>
<button type="button" class="btn btn-info">search hotels</button>
<button><img src="hamlatsot2.jpg" width="150" heigh="20"></button>
&nbsp&nbsp&nbsp

</br></br>
</div>

<!--car form-->

<div  id="carform" class="tab-pane" style="margin-right:45%">
<div class="radio">
<label>
<input type="radio" name="optionsRadio" id="optionsRadio1" vlue="option1" checked>
Pick Off
</label>
<label>
<input type="radio" name="optionsRadio" id="optionsRadio1" vlue="option1" checked>
Drop off
</label>
</div>
<label>car info</label>
</br>
<form class="form-inline" role="form">
<div class="form-group">
<button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">select country
<span class="caret"></span></button>
<ul class="dropdown-menu">
</ul>
<button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">select city
 <span class="caret"></span></button>
 <ul class="dropdown-menu">
 </ul>
 <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">select location
   <span class="caret"></span></button>
   <ul class="dropdown-menu">
   </ul>
 </br></br>
 <label>date</label>
   <input type="date" placeholder="pick up date">&nbsp
   <label>Time:</label>
   <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">hour
     <span class="caret"></span></button>
     <ul class="dropdown-menu">
     </ul>
     <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">minute
       <span class="caret"></span></button>
       <ul class="dropdown-menu">
       </ul>&nbsp
     </label>date</label>
       <input type="date" placeholder="pick up date">&nbsp
       <label>Time:</label>
       <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">hour
         <span class="caret"></span></button>
         <ul class="dropdown-menu">
         </ul>
         <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">minute
           <span class="caret"></span></button>
           <ul class="dropdown-menu">
           </ul>
         </br></br>
         <div class="checkbox">
           <label>
             <input  type="checkbox" value="value">
             drivar age between 25 and 70
           </label>
         </div>
       </br>
       <details>
       <summary class="astext" style="color:green">
       click to add review
       </summary>
       </br>
       </hr>
       <label class="form-inline">text :</label></br>
       <textarea class="form-inline" rows="4" cols="50"></textarea>
       </br>
       </br>
       <label class="form-inline">choose an image</label>
       <input class="form-inline" type="file" name="pic" accept="image/*">
       </br><div style="form=class-inline">
         <label>rating:</label></br>
       <fieldset class="rating">
           <input type="radio" id="star5" name="rating" value="5" /><label for="star5" title="Rocks!">5 stars</label>
           <input type="radio" id="star4" name="rating" value="4" /><label for="star4" title="Pretty good">4 stars</label>
           <input type="radio" id="star3" name="rating" value="3" /><label for="star3" title="Meh">3 stars</label>
           <input type="radio" id="star2" name="rating" value="2" /><label for="star2" title="Kinda bad">2 stars</label>
           <input type="radio" id="star1" name="rating" value="1" /><label for="star1" title="Sucks big time">1 star</label>
       </fieldset></div></br></br>
       </details>

       </br></br>
         <button type="button" class="btn btn-info">search</button>
         <button><img src="hamlatsot4.jpg" width="150" heigh="20"></button>
</div>
</form>
</div>
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
     </html>
