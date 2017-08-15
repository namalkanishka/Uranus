<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-8">
    <title>
      Responsive Header Demo
    </title>
      <link rel="stylesheet" href="styleNew.css">

    
      <meta name="viewport" content="width=device-width, initial-scale=1">
   
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      <style>
      #map
	   {
        width: 100%;
        height: 400px;
        background-color: grey;
       }
      </style>
  </head>
  <body>
  <div>
    <!--header-->
    <header id="header">
      <div class="container">
      <div id="logo"> <img src="Sky-Viper-M200-Nano-Drone-300x244.png" width="60" height="60"></div>
        <h1>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Drone controllers
        </h1>
        <nav id="nav">
          <ul>
            <li>
              <a href="#">Home</a>
            </li>
            <li>
              <a href="#">Add Drone</a>
            </li>
            <li>
              <a href="#">Add delivery</a>
            </li>
            <li>
              <a href="#">Select Drone</a>
            </li>
            <li>
              <a href="#">Login</a>
            </li>
          </ul>
        </nav>
      </div>
    </header>
    
    <br>
    <br>
    <br>
    <br>
    
    
    

  <?php
  $p=$_GET['name'];
  echo($_GET['name']);

  ?>
  <form id="test">
  <input type="hidden" name="name" value="<?php echo $p; ?>">
  </form>

  <!--Drone logo-->
  <div>
  <img src="tnc_92768748_preview_cropped-1260x708.jpg" style="width:100%;height:600px" >
  </div>



    <br>
    <br>
    <br>

 
    
     <!-- Drone Readings-->
  <div class="container ">
    <div id="imageHeader" style="background:white">
      &nbsp;&nbsp;&nbsp<br><br><br>
      <p style="color:#000;margin-top:-40px;text-align:center;font-family:'Comic Sans MS', 
      cursive;font-weight:bold">&nbsp;&nbsp;&nbsp;&nbsp; Drone readings </p>
      <p style="margin-top:20px">&nbsp;&nbsp;&nbsp;&nbsp Maximum Tilt</p>
      <p>&nbsp;&nbsp;&nbsp;&nbsp15</p>
      <p id="speed">&nbsp;&nbsp;&nbsp;&nbspVertical speed</p>
      <p>&nbsp;&nbsp;&nbsp;&nbsp0.8m/s</p>
      <p id="dis">&nbsp;&nbsp;&nbsp;&nbspMax speed</p>
      <p>&nbsp;&nbsp;&nbsp;&nbsp0.7m/s</p>
      <p>&nbsp;&nbsp;&nbsp;&nbspmaximum Attitude</p>
      <p>&nbsp;&nbsp;&nbsp;&nbsp2m</p>
      <p>&nbsp;&nbsp;&nbsp;&nbspSignal</p>
      <p>&nbsp;&nbsp;&nbsp;&nbsp64%</p>     
    </div>
    
    <!-- Monitor flodded area-->
    <div id="AddVideos" style="background:white; margin-left:30px;padding-left:10px">
        <p style="color:#000;margin-top:20px;text-align:center;font-family:'Comic Sans MS', 
           cursive;font-weight:bold"> Monitor flooded area </p>
        <img src="video-play-3-512.png" style="margin-top:8px;margin-left:120px" width="100" height="100">
    </div>
    
    
      <!-- Add location-->
      <div id="textinputs" style="background:white">
        <br><br><br>
        <form action="" method="get">
          <p style="color:#000;margin-top:-40px;text-align:center;font-family:'Comic Sans MS', 
           cursive;font-weight:bold">&nbsp;&nbsp;&nbsp;&nbsp; Add Location </p>
      
          <label style="color:#000;font-family:'Times New Roman', Times, serif;margin-top:20px">
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp Latitude </label>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp
          <input style="color:#000;font-family:'Times New Roman', Times, serif" name="lati" type="text"><br><br>
      
          <label style="color:#000;font-family:'Times New Roman', Times, serif">
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp Longitude </label>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp
          <input style="color:#000;font-family:'Times New Roman', Times, serif" name="long" type="text"><br>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp
      
          <input style=" -moz-border-radius:5px;-webkit-border-radius:5px;width:197px;margin-left:91px;background-color:#99F"
          name="btnSave" type="button" value="Save">
        </form>
      </div>
      
       
     
     
      <!-- Map-->
     <div id="selectmap" style="background:white;color:#000">
       <div id="map">
       </div>    
    </div>
     <div id="imageHeader1" style="background:white">
      &nbsp;&nbsp;&nbsp<br><br><br>
      <p style="color:#000;margin-top:-40px;text-align:center;font-family:'Comic Sans MS', 
      cursive;font-weight:bold">&nbsp;&nbsp;&nbsp;&nbsp; places </p>
      <p style="margin-top:20px">&nbsp;&nbsp;&nbsp;</p>
      <div class="row">
        <div class="col-md-6">
          <p>&nbsp;&nbsp;lat</p>
          <p id ="i">&nbsp;&nbsp;</p>
        </div>
        <div class="col-md-6">
          <p>&nbsp;&nbsp;Long</p>
          <p id ="ie">&nbsp;&nbsp;</p>
        </div>
      </div>
    </div>
    
 </div>
     
     
     <br> <br><br><br><br>
   
     
     <!--footer-->
     <div class="container" id="footer" style="max-width:100%">
        <p>CopyRight@2017 Drone Controllers.</p>
     </div>
     
     <script>
      function initMap() {
        var lat = [];
        var lon=[];   
        var uluru = {lat: 6.900336, lng: 79.926441};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 8,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
        google.maps.event.addListener(map, 'click', function(event) {
          alert("Latitude: " + event.latLng.lat() + " " + ", longitude: " + event.latLng.lng());
          placeMarker(event.latLng);
        var a= event.latLng.lat();
        var b=event.latLng.lng();
        var c='<br>';
        lat.push(a);
        lat.push(c);
        lon.push(b);
        lon.push(c);
        document.getElementById("i").innerHTML = lat;
        document.getElementById("ie").innerHTML = lon;
        function placeMarker(location) {
    var marker = new google.maps.Marker({
        position: location, 
        map: map
    });
}
        
  });



      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?callback=initMap">
    </script>
    
  </div> 
  </body>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>



</html>
