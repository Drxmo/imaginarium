<?php include_once ('/../../Templates/Frontend/head.php') ?>
<?php include_once ('/../../Templates/Frontend/header.php') ?>
<script src="http://maps.google.com/maps/api/js?sensor=true"></script>

<!--<br>
<br>
<br>
<br>
<br>-->
<?php



foreach ($imagenes as $imagen) {


?>

<div class="contenedor-imgX fxX" style="height: 300px">
    <div class="imgback img-contenido" style=" lightcyan;  background-image: url('<?php echo asset("media/img/sitios/".$imagen->img_ruta) ?>');">
          
</div>
</div>
<?php break;}?>
<br>
<br>

<br>
<br>
<br>
<br>
<br>
<br>
  <?php
  //$eee = implode($sitio);
  //$eee2 = implode($sitio->sit_direccion);
  // $sitio = $sitio[0];
  
  
//   foreach ($sitio as $siti) {
//       
//            $new_arr[] = $siti->sit_direccion;
//        }
//        $er = implode($new_arr);
  
 // $sitio1= filter_input_array(INPUT_SESSION)['sitio'];
 // $er = implode($sitio);
  //extract($sitio); 
  ?>
 <?php   foreach ($sitio as $sit) { }?>
   
    
     
    </style>
 <!--<h1><?php// echo $sit->sit_direccion ; ?></h1>-->
 
    <h1>Calcular ruta</h1>
    <form id="calculate-route" name="calculate-route" action="#" method="get">
      <label for="from">From:</label>
      <input type="text" id="from" name="from" required="required" placeholder="An address" size="30" />
      <a id="from-link" href="#">Obtener mi posición</a>
      <br />
      <label for="to">To:</label>
      <input type="text" id="to" name="to" readonly value="<?php echo $sit->sit_direccion ; ?>"  size="30" />
<!--      <a id="to-link" href="#">Get my position</a>-->
      <br />
      <input type="submit" />
      <input type="reset" />
    </form>
    <div id="map"></div>
    <p id="error"></p>
<br>



 <script>
      function calculateRoute(from, to) {
        // Center initialized to Naples, Italy
        var myOptions = {
          zoom: 10,
          center: new google.maps.LatLng(40.84, 14.25),
          mapTypeId: google.maps.MapTypeId.ROADMAP
        };
        // Draw the map
        var mapObject = new google.maps.Map(document.getElementById("map"), myOptions);
        var directionsService = new google.maps.DirectionsService();
        var directionsRequest = {
          origin: from,
          destination: to,
          travelMode: google.maps.DirectionsTravelMode.DRIVING,
          unitSystem: google.maps.UnitSystem.METRIC
        };
        directionsService.route(
          directionsRequest,
          function(response, status)
          {
            if (status == google.maps.DirectionsStatus.OK)
            {
              new google.maps.DirectionsRenderer({
                map: mapObject,
                directions: response
              });
            }
            else
              $("#error").append("Unable to retrieve your route<br />");
          }
        );
      }
      $(document).ready(function() {
        // If the browser supports the Geolocation API
        if (typeof navigator.geolocation == "undefined") {
          $("#error").text("Your browser doesn't support the Geolocation API");
          return;
        }
        $("#from-link, #to-link").click(function(event) {
          event.preventDefault();
          var addressId = this.id.substring(0, this.id.indexOf("-"));
          navigator.geolocation.getCurrentPosition(function(position) {
            var geocoder = new google.maps.Geocoder();
            geocoder.geocode({
              "location": new google.maps.LatLng(position.coords.latitude, position.coords.longitude)
            },
            function(results, status) {
              if (status == google.maps.GeocoderStatus.OK)
                $("#" + addressId).val(results[0].formatted_address);
              else
                $("#error").append("Unable to retrieve your address<br />");
            });
          },
          function(positionError){
            $("#error").append("Error: " + positionError.message + "<br />");
          },
          {
            enableHighAccuracy: true,
            timeout: 10 * 1000 // 10 seconds
          });
        });
        $("#calculate-route").submit(function(event) {
          event.preventDefault();
          calculateRoute($("#from").val(), $("#to").val());
        });
      });
    </script>
 <?php  $Loading = 'Loading...' ?>
<?php include_once ('/../../Templates/Frontend/footer.php') ?>
<?php include_once ('/../../Templates/Frontend/foot.php') ?>

