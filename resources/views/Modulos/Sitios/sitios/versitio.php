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

<!--<div class="contenedor-imgX fxX" style="height: 300px">
    <div class="imgback img-contenido" style=" lightcyan;  background-image: url('<?php echo asset("media/img/sitios/".$imagen->img_ruta) ?>');">
          
</div>
</div>-->
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
 
    <div class="container container-fluid thumbnail col-xs-12 col-sm-12 col-md-12 col-lg-12">
    
    <div class="contenedor-imgAlz">
        


        

        <div class="contenedor-imgX fxX container-fluid">
            <div class="container contenedor-imgX container-fluid thumbnail col-xs-12 col-sm-12 col-md-12 col-lg-12">
                
<h2><?php echo ($sit->sit_nombre) ?></h2>

            <div class="imgback img-contenido" style=" lightcyan;  background-image: url('<?php echo asset("media/img/sitios/" . $imagen->img_ruta) ?>');">

            </div>

            <p><?php echo ($sit->sit_descripcion) ?></p><br>
        </div>
            
            
            
            <div class='col-xs-12 col-sm-12 col-md-12 col-lg-12 diruti'>
            <div class='col-xs-3 col-sm-3 col-md-3 col-lg-3 dircont'>
                <h4><strong>Direccion del Sitio:</strong></h4>
                <span style="color:white"><?php echo ($sit->sit_direccion) ?></span>
            <h5><a data-href='javascript:void(0);' expr:onclick='&quot;window.open(\&quot;http://www.facebook.com/sharer.php?u=&quot; + data:post.url + &quot;\&quot;,\&quot;gplusshare\&quot;,\&quot;toolbar=0,status=0,width=548,height=325\&quot;);&quot;' rel='nofollow'><img class='botoni' height='32' src='http://1.bp.blogspot.com/-ru_KTYmbf2w/UhwCP96ijsI/AAAAAAAAAgg/iAY-VBzvg_4/s320/facebook.png' title='Parque El Vergel Buga' width='32'/></a><strong> Dale Me Gusta a Nuestro Facebook:</strong><br>  <?php echo ($sit->sit_facebook) ?></h5>
            <h5><a data-href='javascript:void(0);' expr:onclick='&quot;window.open(\&quot;http://twitter.com/home?status=&quot; + data:post.url + &quot;\&quot;,\&quot;gplusshare\&quot;,\&quot;toolbar=0,status=0,width=548,height=325\&quot;);&quot;' rel='nofollow'><img class='botoni' height='32' src='http://2.bp.blogspot.com/-VUCTk734Vpk/UhwCQVxCH8I/AAAAAAAAAg0/h1JezQbBmX0/s1600/twitter.png' title='SÃ­guenos en Twitter' width='32'/></a><strong> Síguenos en Nuestro Twitter: </strong><br> <?php echo ($sit->sit_twitter) ?></h5>
            <h5><a data-href='javascript:void(0);' expr:onclick='&quot;window.open(\&quot;https://plus.google.com/share?url=&quot; + data:post.url + &quot;\&quot;,\&quot;gplusshare\&quot;,\&quot;toolbar=0,status=0,width=548,height=325\&quot;);&quot;' rel='nofollow'><img class='botoni' height='32' src='http://1.bp.blogspot.com/-KSoMecJPQRs/UhwFcTpgz0I/AAAAAAAAAhI/-VLTVUCxb6o/s1600/Google%252B%2Balt.png' title='Nuestro google+' width='32'/></a><strong>Encuentranos tambien en Google: </strong> <br><?php echo ($sit->sit_google_plus) ?></h5>

            <table  class="table-hover table-condensed">    
                <thead>
                <tr>
                    <th>Latitud</th>
                    <th>Longitud</th>
                </tr>
                </head>
                <tbody>
                    <tr>
                        <td><?php echo ($sit->sit_latitud) ?></td>
                        <td><?php echo ($sit->sit_longitud) ?></td>
                    </tr>
                </tbody>
            </table>
            </div>
            
            <div class="rutacont col-xs-3 col-sm-3 col-md-3 col-lg-3 ">
                <h4><strong>Calcular ruta</strong></h4>
    <form id="calculate-route" name="calculate-route" action="#" method="get">
      <label for="from" style="color:#00ABEB">Desde:</label>
      <input type="text" id="routeFrom" name="routeFrom" required="required" placeholder="An address" size="30" /><br>
      <span>&nbsp<a id="routeFrom-link" href="#">Obtener mi posición<span class="glyphicon glyphicon-map-marker"></span></a></span>
      <br />
      <div style='display: none'>
      <label for="to">To:</label>
      <input type="text" id="routeTo" name="routeTo" readonly value="<?php echo $sit->sit_direccion ; ?>"  size="30" />
<!--      <a id="to-link" href="#">Get my position</a>-->
      <br />
      </div>
      
<!--      <input type="submit" />
      <input type="reset"  />-->
      
<select id="routeMode" name="routeMode">
    <option value="DRIVING">Driving</option>
    <option value="WALKING">Caminando</option>
    <option value="BICYCLING">Bicicleta</option>
    <option value="TRANSIT">Trans Publico</option>
</select>
<label for="routeMode">Mode</label><br />
<div class="textcenter">
    <button id="routeGo">Route</button>
    <button id="routeClear">Clear Route</button>
</div>
    </form>
    <div id="map" class="invisibleX"></div>
    <div id="directions" class="invisibleX"></div>
    <p id="error"></p>
<br>
        </div>
            
            <div class="timeDie col-xs-3 col-sm-3 col-md-3 col-lg-3">
            <div id="cont_40e977bacd6f0abaff05a45b9375eea2"><span id="h_40e977bacd6f0abaff05a45b9375eea2"><a class="LinkWid" href="http://www.tiempo.com/buga.htm" target="_blank" style="font-family:Roboto; font-size:13px; color:#00ABEB; ">Tiempo En Buga</a></span><script type="text/javascript" async src="https://www.tiempo.com/wid_loader/40e977bacd6f0abaff05a45b9375eea2"></script></div>
            </div>
            </div>
            
            
            <div class='col-xs-12 col-sm-12 col-md-3 col-lg-12'>
            <section>


                <div class="imgback img-contenido imgDieg " style=" lightcyan;  background-image: url('<?php echo asset("media/img/sitios/" . $imagen->img_ruta) ?>');">
            </section>


<!--            <section style="position: relative">

                <div class="imgback img-contenido imgDieg3" style=" lightcyan;  background-image: url('<?php echo asset("media/img/sitios/" . $imagen->img_ruta) ?>');">
            </section>    -->



            <section style="position: relative">

                <div class="imgback img-contenido imgDieg3 " style=" lightcyan;  background-image: url('<?php echo asset("media/img/sitios/" . $imagen->img_ruta) ?>');">

            </section>    
</div>


        </div>
    </div>


</div>



<!-----------Comentarios de usuarios-------------->
<!-- Contenedor Principal -->
<div class="comments-container"><hr>
    <h1>Comentarios <a href="http://www.facebook.com">facebook.com</a></h1>

    <ul id="comments-list" class="comments-list">
        <li>
            <div class="comment-main-level">
                <!-- Avatar -->
                <div class="comment-avatar"><img src="http://fotouser.miarroba.st/5e44274e/300/mcbeth.jpg" alt=""></div>
                <!-- Contenedor del Comentario -->
                <div class="comment-box">
                    <div class="comment-head">
                        <h6 class="comment-name by-author"><a href="https://www.facebook.com/drx">Drx</a></h6>
                        <span>hace 20 minutos</span>
                        <i class="fa fa-reply"></i>
                        <i class="fa fa-heart"></i>
                    </div>
                    <div class="comment-content">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit omnis animi et iure laudantium vitae, praesentium optio, sapiente distinctio illo?
                    </div>
                </div>
            </div>
            <!-- Respuestas de los comentarios -->
            <ul class="comments-list reply-list">
                <li>
                    <!-- Avatar -->
                    <div class="comment-avatar"><img src="http://rlv.zcache.es/avatar_del_matrimonio_homosexual_postal-r48ac484a6a9440f684e5e75aec78d1fc_vgbaq_8byvr_324.jpg"></div>
                    <!-- Contenedor del Comentario -->
                    <div class="comment-box">
                        <div class="comment-head">
                            <h6  class="comment-name"><a href="https://www.facebook.com/christian.carvajal.16">Cristian Carvajal</a></h6>
                            <span>hace 10 minutos</span>
                            <i class="fa fa-reply"></i>
                            <i class="fa fa-heart"></i>
                        </div>
                        <div class="comment-content">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit omnis animi et iure laudantium vitae, praesentium optio, sapiente distinctio illo?
                        </div>
                    </div>
                </li>

                <li>
                    <!-- Avatar -->
                    <div class="comment-avatar"><img src="http://fotouser.miarroba.st/5e44274e/300/mcbeth.jpg"></div>
                    <!-- Contenedor del Comentario -->
                    <div class="comment-box">
                        <div class="comment-head">
                            <h6 class="comment-name by-author"><a href="https://www.facebook.com/drx">Drx</a></h6>
                            <span>hace 10 minutos</span>
                            <i class="fa fa-reply"></i>
                            <i class="fa fa-heart"></i>
                        </div>
                        <div class="comment-content">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit omnis animi et iure laudantium vitae, praesentium optio, sapiente distinctio illo?
                        </div>
                    </div>
                </li>
            </ul>
        </li>

        <li>
            <div class="comment-main-level">
                <!-- Avatar -->
                <div class="comment-avatar"><img src="http://orig07.deviantart.net/a1ed/f/2014/206/d/e/james_rodriguez_by_adozil-d7s9wxh.jpg" alt=""></div>
                <!-- Contenedor del Comentario -->
                <div class="comment-box">
                    <div class="comment-head">
                        <h6 class="comment-name"><a href="https://www.facebook.com/diego.a.herrada.9">Diego Alzate</a></h6>
                        <span>hace 10 minutos</span>
                        <i class="fa fa-reply"></i>
                        <i class="fa fa-heart"></i>
                    </div>
                    <div class="comment-content">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit omnis animi et iure laudantium vitae, praesentium optio, sapiente distinctio illo?
                    </div>
                </div>
            </div>
        </li>
    </ul>
</div>
    
    
  
<script>
    

var directionsDisplay = new google.maps.DirectionsRenderer({ draggable: true });
var directionsService = new google.maps.DirectionsService();
var map;

$(window).load(function() {
    var myOptions = {
        zoom: 10,
        mapTypeId: google.maps.MapTypeId.ROADMAP,
        center: new google.maps.LatLng(35.270, -80.837)
    };
    map = new google.maps.Map(document.getElementById("map"), myOptions);
    directionsDisplay.setMap(map);
    directionsDisplay.setPanel(document.getElementById("directions"));
    
    $("#routeMode").on("change", function() { calcRoute(); });
    $("#routeGo").on("click", function() { calcRoute(); });
    $("#routeClear").on("click", function() { directionsDisplay.setDirections({ routes: [] }); 
    $('#map').addClass("invisibleX");
    $('#directions').addClass("invisibleX");
    });
    
});

$("#routeFrom-link, #routeTo-link").click(function(event) {
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
                $("#error").append("No se puede obtener su direccion<br />");
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

function calcRoute() {
    var request = {
        origin: $("#routeFrom").val(),
        destination: $("#routeTo").val(),
        travelMode: google.maps.TravelMode[$("#routeMode").val()]
      
    };
//    if (status == google.maps.GeocoderStatus.OK)
                $('#map').removeClass("invisibleX");
     
    directionsService.route(request, function(response, status) {
        if (status == google.maps.DirectionsStatus.OK) {
            directionsDisplay.setDirections(response);
             $('#directions').removeClass("invisibleX");
        }
    });
}
</script>
    


<!-- <script>
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
          $('#map').removeClass("invisibleX")
        });
      });
    </script>-->
 <?php  $Loading = 'Loading...' ?>
<?php include_once ('/../../Templates/Frontend/footer.php') ?>
<?php include_once ('/../../Templates/Frontend/foot.php') ?>

