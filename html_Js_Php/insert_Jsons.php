<?php
      $func = $_POST['func'];
      if($func=="flights") {
        inserFlights();
      }
      if($func=="hotel") {
        insertHotels();
      }
      if($func=="car") {
        insertCars();
      }
      if($func=="flightAndHotel") {
        insertHotelsAndFlights();
      }
      function inserFlights() {
      $host="localhost";
      $user="root";
      $pass="";
      $db="internet_based_project";
      $connect= new mysqli($host,$user,$pass,$db);
      if($connect-> connect_error) {
        die("connection failed;".$connect-> connect_error);
      }
      $fo=fopen("web_hw3_jsons/flights.json","r");
      $fr=fread($fo,filesize("web_hw3_jsons/flights.json"));
      $array=json_decode($fr,true);
      $elementCount  = count($array);
      for($i=0; $i<$elementCount; $i++){
        $value=$array[$i];
        $timedep = strtotime($value['departureDate']);
        $departureDate = date('Y-m-d',$timedep);
        $timereturn = strtotime($value['returnDate']);
        $returnDate = date('Y-m-d',$timereturn);
      $sql="insert into flight (flightID,flightType,secondFlight,fromDes,toDes,numChilds,numAduldts,departureDate,returnDate)
       values('$value[flightID]','$value[flightType]',null,'$value[from]','$value[to]',
      '$value[numChilds]','$value[numAdults]','$departureDate','$returnDate')";
     if( $connect->query($sql)===TRUE){
       echo "new record inserted";
     }
     else {
       echo"error: ".$sql. "<br>" .$connect->error;
     }

    }
    $connect->close();
  }


    function insertHotels() {
      $host="localhost";
      $user="root";
      $pass="";
      $db="internet_based_project";
      $connect= new mysqli($host,$user,$pass,$db);
      if($connect-> connect_error) {
        die("connection failed;".$connect-> connect_error);
      }
      $fo=fopen("web_hw3_jsons/hotels.json","r");
      $fr=fread($fo,filesize("web_hw3_jsons/hotels.json"));
      $array=json_decode($fr,true);
      $elementCount  = count($array);
      for($i=0; $i<$elementCount; $i++){
        $value=$array[$i];
        $timecheckin = strtotime($value['dateCheckIn']);
        $checkedIn = date('Y-m-d',$timecheckin);
        $timecheckout = strtotime($value['dateCheckOut']);
        $checkedOut = date('Y-m-d',$timecheckout);

      $sql="insert into hotel (hotelID,info,childsNum,adultsNum,roomsNum,dateCheckedOut,dateCheckedIn)
       values('$value[hotelID]','$value[info]','$value[childNum]','$value[adultsNum]','$value[roomsNum]',
      '$checkedOut','$checkedIn')";
     if( $connect->query($sql)===TRUE){
       echo "new record inserted";
     }
     else {
       echo"error: ".$sql. "<br>" .$connect->error;
     }

    }
    $connect->close();
}


  function insertCars() {
      $host="localhost";
      $user="root";
      $pass="";
      $db="internet_based_project";
      $connect= new mysqli($host,$user,$pass,$db);
      if($connect-> connect_error) {
        die("connection failed;".$connect-> connect_error);
      }
      $fo=fopen("web_hw3_jsons/cars.json","r");
      $fr=fread($fo,filesize("web_hw3_jsons/cars.json"));
      $array=json_decode($fr,true);
      $elementCount  = count($array);
      for($i=0; $i<$elementCount; $i++){
        $value=$array[$i];
        $fromTime = strtotime($value['fromDateTime']);
        $fromDateTime = date('Y-m-d H:i:s',$fromTime);
        $toTime = strtotime($value['toDateTime']);
        $toDateTime = date('Y-m-d H:i:s',$toTime);
      $sql="insert into car (carID,between25And70,location,city,country,fromDateTime,toDateTime)
       values('$value[carID]','$value[between25And70]','$value[location]','$value[city]','$value[country]',
      '$fromDateTime','$toDateTime')";
     if( $connect->query($sql)===TRUE){
       echo "new record inserted";
     }
     else {
       echo"error: ".$sql. "<br>" .$connect->error;
     }

    }
    $connect->close();
  }




 function insertHotelsAndFlights() {
      $host="localhost";
      $user="root";
      $pass="";
      $db="internet_based_project";
      $connect= new mysqli($host,$user,$pass,$db);
      if($connect-> connect_error) {
        die("connection failed;".$connect-> connect_error);
      }
      $fo=fopen("web_hw3_jsons/flightsWithHotels.json","r");
      $fr=fread($fo,filesize("web_hw3_jsons/flightsWithHotels.json"));
      $array=json_decode($fr,true);
      $elementCount  = count($array);
      for($i=0; $i<$elementCount; $i++){
        $value=$array[$i];
      $sql="insert into flightwithhotel(flightID,hotelID,flightWithHotelID)
       values('$value[flightWithHotelID]','$value[hotelID]','$value[flightID]')";
     if( $connect->query($sql)===TRUE){
       echo "new record inserted";
     }
     else {
       echo"error: ".$sql. "<br>" .$connect->error;
     }

    }
    $connect->close();
}
?>
