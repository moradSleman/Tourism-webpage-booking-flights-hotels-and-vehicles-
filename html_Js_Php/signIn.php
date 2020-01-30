<!DOCTYPE html>
<html lang="en" dir="ltr">

  <head>
    <meta charset="utf-8">
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title></title>

  </head>
  <body>
    <img src='img1.jpg' style='position:fixed;top:0px;left:0px;width:100%;height:100%;z-index:-1;'>
    <div class="container" style="width:400px; margin:0 auto;">
      <form  id="myForm" onsubmit="return validateForm()"action="addaccount.php" method="post" >
      <div  style='margin-top:30px'>
        <label style="color:white">full name : </label>
        <input type="text" class="form-control" id="fullname" name="Fullname" >
        <label style="color:red;" id="error1"></label>
        </div>
        <div style='margin-top:30px'>
          <label style="color:white">birthdate :</label>
            <input type="date" class="form-control" id="birth"  name="Birth">
          <label style="color:red;" id="error2"></label>
          </div>
          <div  style='margin-top:30px'>
            <label style="color:white">email : </label>
            <input type="email" class="form-control" id="email" name="Email" >
            <label style="color:red;" id="error3"></label>
            </div>
            <div style='margin-top:30px'>
              <label style="color:white">password :</label>
              <input type="password" class="form-control" id="password" name="Password">
              <label style="color:red;" id="error4"></label>
              </div>
              <div style='margin-top:30px'>
                <label style="color:white">passwordd :</label>
                <input type="password" class="form-control" id="passwordd" name="Passwordd" >
                <label style="color:red;" id="error9"></label>
                </div>
              <div style='margin-top:30px'>
                <label style="color:white">phone number :</label>
                <input type="phone" class="form-control" id="phone" name="PhoneNumber" >
                <label style="color:red;" id="error5"></label>
                </div>
                <div id="profilepic">
                  <img  	src="TRAVIL1.pn"  id="toreplace"  name="Profilepic" style='border: 1px solid #ddd; border-radius: 4px; padding: 5px; width: 150px;' >
                </div>
                <input type="file" name="pic" accept="image/*" id="photo">
                <button id="edit"> edit </button>
            <div style='margin-top:30px'>
                       <label style="color:white">Country</label>
                       <input class="form-control" id="country" type="text" name="Country"  >
                       <label id="error8" style="color:red";></label>
              </div>

            <div style='margin-top:30px'>
                       <label style="color:white">City</label>
                       <input class="form-control" id="city" type="text" name="City"   >
                       <label id="error7" style="color:red";></label>
              </div>
              <div style='margin-top:30px' >       <label style="color:white">Address </label>
                     <input class="form-control" id="address" type="text" name="Address"  >
                     <label id="error6" style="color:red";></label>
          </div>

            &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp




            <input type="submit" value="Submit" name="submit">
</form>
     </div>


    <script type="text/javascript">
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
      })
    function validateForm() {
    var x = document.forms["myForm"]["fullname"].value;
    var y = document.forms["myForm"]["birth"].value;
    var z = document.forms["myForm"]["email"].value;
    var a = document.forms["myForm"]["password"].value;
    var b = document.forms["myForm"]["phone"].value;
    var f = document.forms["myForm"]["passwordd"].value;
    var e = document.forms["Form"]["Country"].value;
    var d = document.forms["Form"]["City"].value;
    var c=document.forms["Form"]["Address"].value;


}
function empty()
{
  var ppassword=/^[a-zA-Z0-9]+.?/;

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
        if (z == null || z == "") {
          document.getElementById("error3").innerHTML = "&nbsp enter your <b>e-mail!</b>";
          flag1=false;
        }
        else {
          var atpos = z.indexOf("@");
          var dotpos = z.lastIndexOf(".");
          if (atpos<1 || dotpos<atpos+2 || dotpos+2>=z.length) {
            document.getElementById("error3").innerHTML = "&nbspe-mail <b>is not valid </b>!";
          }
        }


   a = document.forms["Form"]["Password"].value;
  if (!(a.match(alphaExp))){
   document.getElementById("error4").innerHTML="*Please enter password";
   flag=false;
  }
  f = document.forms["Form"]["Password"].value;
 if (!(f.match(alphaExp))){
  document.getElementById("error4").innerHTML="*Please enter password";
  flag=false;
 }
 if(a!=f){
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
           e = document.forms["Form"]["Country"].value;
          if (e == null || e == "") {
          document.getElementById("error8").innerHTML="*Please enter code";
        flag=false;
          }

}
</script>

  </body>

</html>
