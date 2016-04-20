<?php include_once ('/../../Templates/Frontend/head.php') ?>
<div class="absoluteX">
<?php include_once ('/../../Templates/Backend/header.php') ?>
<?php session::put('sit_id', $id) ?>
    </div>
<script src="http://maps.google.com/maps/api/js?sensor=true&language=es"></script>
<link  href="http://code.google.com//apis/maps/documentation/javascript/examples/default.css" rel="stylesheet" type="text/css">
<style>
    #directions-panel {
        position: absolute;
    height: 450px;
    right: 0;
    width: 400px;
    overflow: auto;
    background-color: rgba(0,0,0,.85);
    z-index: 1;

    }
    
     .directions-outpanelc {
        position: absolute;
    height: 450px;
    right: 0;
    width: 400px;
    overflow: auto;
    
    z-index: 1;

    }
    .directions-outpanel {
        float: right;

    }
    #from-link{
        width: 100%;
        position: absolute;
    }

    #map-canvas {
        margin-right: 400px;
    }

    #map-canvas2 {
        margin-right: 400px;
    }
.bigmap{
       height: 450px;
    
    width: 450px !important; 
    }
    .smallmap{
       height: 150px !important;
    
    width: 400px !important; 
    }
/*    #control #from {
       max-width: 370px;
}*/

#control {
       left: 0 !important;
       white-space: nowrap !important;
}
.max-widthX{
     max-width: 330px;
}
    .gmnoprint img { max-width: none !important; }
    label.error {
    position: absolute;
    background-color: transparent;
    right: 5%;
    padding-top: 25px;
    font-size: 16px !important;
    color:red;
}
.gm-style-mtc div{
          top: 20px !important;
    left: -12px !important;
    position: relative !important;
    padding: 4px 4px 4px 4px !important;
    height: 16px;
    background-color: transparent !important;
}
.gm-style-mtc div div {
            top: 0px !important;
    width: 50px;
/*    left: 100px !important;*/
    padding: 0px 0px 0px 15px !important;
    position: absolute !important;
}
.gm-style-mtc div div span label{
    top:0px;
}
.gm-style .gm-style-mtc label{
    color: rgba(0, 0, 0, .6);
}
.gm-style-mtc div div div {
        
     padding: 4px 4px 4px 4px !important;
}
.gm-svpc {
/*    top: -6px !important;*/
}
.gmnoprint.gm-bundled-control.gm-bundled-control-on-bottom {
    top: 40px;
}
/*.gmnoprint {
    top: 30px !important;
}*/
    #control {
        background: #fff;
        padding: 5px;
        font-size: 14px;
        font-family: Arial;
        border: 1px solid #ccc;
        box-shadow: 0 2px 2px rgba(33, 33, 33, 0.4);
        display: none;
        
    }
/*    .gmnoprint{
    top:15px;
    }*/
   

    @media print {
        #map-canvas {
            height: 500px;
            margin: 0;
        }

        #directions-panel {
            float: none;
            width: auto;
        }
    }
</style>

<!--<br>
<br>
<br>
<br>
<br>-->
<?php
foreach ($imagenes as $imagen) {
    ?>

    <!--<div class="contenedor-imgX fxX" style="height: 300px">
        <div class="imgback img-contenido" style=" lightcyan;  background-image: url('<?php echo asset("media/img/sitios/" . $imagen->img_ruta) ?>');">
              
    </div>
    </div>-->
    <?php break;
} ?>

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
<?php foreach ($sitio as $sit) {
    
} ?>



<!--<div id="google_translate_element"></div>
<div class="tradu">


<div class='translator-widget'>

<div class='widget-translator'>
<div id="google_translate_element"></div>
<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'id', layout: google.translate.TranslateElement.InlineLayout.SIMPLE, autoDisplay: false, multilanguagePage: true}, 'google_translate_element');
}
</script>
<script async="async" type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
    <div class='close-translator' title='Close'>&#10006;</div>
 </div>
</div>
</div>-->

<!--<h1><?php // echo $sit->sit_direccion ; ?></h1>-->

<div class="container container-fluid thumbnail col-xs-12 col-sm-12 col-md-12 col-lg-12">

    






    <div1 class=" ">
        <!--    <div class="contenedor-imgAlz">-->
        <!--<div1 class="container container-fluid thumbnail col-xs-12 col-sm-12 col-md-12 col-lg-12">-->




        <div class="contenedor-imgAlz contenedor-imgX fxX container-fluid">
            <h2><?php echo ($sit->sit_nombre) ?></h2>
<div class="contenedor-imgX fxX" style="height: 300px">
            <div class="imgback img-contenido" style=" lightcyan;  background-image: url('<?php echo asset("media/img/sitios/" . $imagen->img_ruta) ?>');">

            </div>
    <div  id="fbshare">
    <div   style="position: absolute" class="fb-like" data-href="http://localhost/imaginarium/public/index.php/sitios/sitios/versitio/19" data-layout="button" data-action="like" data-show-faces="true" data-share="true"></div></div>
            </div>

            <p><?php echo ($sit->sit_descripcion) ?></p><br>
            
            <!--</div1>-->
        </div>     
        <!--        </div>-->
    </div1>
</div>
<div style="clear:both;"></div>
<div style="height: 100px; position:relative; "></div>


<div class="diruti">
<div class='col-xs-3 col-sm-3 col-md-3 col-lg-3 dircont contenedor-imgAl'>
    <h4><strong>Direccion del Sitio:</strong></h4>
    <span style="color:white"><?php echo ($sit->sit_direccion) ?></span>
    <h5><a data-href='javascript:void(0);' expr:onclick='&quot;window.open(\&quot;http://www.facebook.com/sharer.php?u=&quot; + data:post.url + &quot;\&quot;,\&quot;gplusshare\&quot;,\&quot;toolbar=0,status=0,width=548,height=325\&quot;);&quot;' rel='nofollow'><img class='botoni' height='32' src='http://1.bp.blogspot.com/-ru_KTYmbf2w/UhwCP96ijsI/AAAAAAAAAgg/iAY-VBzvg_4/s320/facebook.png' title='Parque El Vergel Buga' width='32'/></a><strong> Dale Me Gusta a Nuestro Facebook:</strong><br>  <?php echo ($sit->sit_facebook) ?></h5>
    <h5><a data-href='javascript:void(0);' expr:onclick='&quot;window.open(\&quot;http://twitter.com/home?status=&quot; + data:post.url + &quot;\&quot;,\&quot;gplusshare\&quot;,\&quot;toolbar=0,status=0,width=548,height=325\&quot;);&quot;' rel='nofollow'><img class='botoni' height='32' src='http://2.bp.blogspot.com/-VUCTk734Vpk/UhwCQVxCH8I/AAAAAAAAAg0/h1JezQbBmX0/s1600/twitter.png' title='SÃƒÂ­guenos en Twitter' width='32'/></a><strong> SÃ­guenos en Nuestro Twitter: </strong><br> <?php echo ($sit->sit_twitter) ?></h5>
    <h5><a data-href='javascript:void(0);' expr:onclick='&quot;window.open(\&quot;https://plus.google.com/share?url=&quot; + data:post.url + &quot;\&quot;,\&quot;gplusshare\&quot;,\&quot;toolbar=0,status=0,width=548,height=325\&quot;);&quot;' rel='nofollow'><img class='botoni' height='32' src='http://1.bp.blogspot.com/-KSoMecJPQRs/UhwFcTpgz0I/AAAAAAAAAhI/-VLTVUCxb6o/s1600/Google%252B%2Balt.png' title='Nuestro google+' width='32'/></a><strong>Encuentranos tambien en Google: </strong> <br><?php echo ($sit->sit_google_plus) ?></h5>

    <table  class="table-hover table-condensed tablx">    
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
    <h4 class="lightcyan"><strong>Calcular ruta</strong></h4>
    <form id="calculate-route" name="calculate-route" action="#" method="get">
<!--        <label for="from" style="color:#00ABEB">Desde:</label>-->
        <!--<input type="text" id="from" name="from" required="required" placeholder="An address" size="30" /><br>-->
        <!--<span>&nbsp<a id="from-link" href="#">Obtener mi posición<span class="glyphicon glyphicon-map-marker"></span></a></span>-->
<!--        <br />-->
        <div style='display: none'>
            <label for="to">To:</label>
            <input type="text" id="to" name="to" readonly value="<?php echo $sit->sit_direccion; ?>"  size="30" />
            <!--      <a id="to-link" href="#">Get my position</a>-->
<!--            <br />-->
        </div>
        
        
    
    <!--    <div id="map" class="invisibleX"></div>-->
    
<!--    <br>-->




    <div id="control">
        <strong>Desde:</strong>
        <!--<select id="start" onchange="calcRoute();">-->
        <input type="text" id="from" name="from" class="max-widthX" style="max-height:20px" required="required" placeholder="Dirección o Ciudad" size="40" onchange="calcRoute();"/><br>
        
    </div>
    
    <a id="from-link" style="width: 100%" href="#">Obtener mi posición<span class="glyphicon glyphicon-map-marker"></span></a><br>
    <select id="routeMode" name="routeMode">
    <option value="DRIVING">Driving</option>
    <option value="WALKING">Caminando</option>
    <option value="BICYCLING">Bicicleta</option>
    <option value="TRANSIT">Trans Publico</option>
</select>
    <input type="submit" id="calculate-route" />
        <input type="reset" id="routeClear" />
      <p id="error"></p>
    
    <div id="outmap-canvas2" style="overflow:hidden;" class="smallmap" >
    <div id="map-canvas2" class="" style="height:450px;width:400px;"></div></div>
    <!--<div style="position:absolute; " >-->
</form>

    <script src="http://www.google-analytics.com/urchin.js" type="text/javascript">
    </script> 
    <script type="text/javascript">
        _uacct = "UA-162157-1";
        urchinTracker();
    </script> 

</div>




<!--   <div style="clear:both;"></div>-->
<div id="" class="directions-outpanel invisibleX col-xs-3 col-sm-3 col-md-3 col-lg-3" >
    <center><h4 class="lightcyan center-block"><strong>Como llegar...</strong></h4></center>
    <div id="directions-panel" class="contenedor-imgAl invisibleX" ></div>
    
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




        
<div style="clear:both;"></div>
<div style="height: 50px;"></div>



<!-----------Comentarios de usuarios-------------->
<!-- Contenedor Principal -->
<div class="comments-container"><hr>
    <div class="fb-comments" data-href="http://localhost/imaginarium/public/index.php/sitios/sitios/versitio/22" data-width="500px" data-numposts="5"></div>
<hr>
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



    <div id="fb-root"></div>
<script>
    $(function() {  
    $(".translator").click(function () { 
    $(".widget-translator").fadeIn(); 
});
    $(".close-translator").click(function() {
    $(".widget-translator").fadeOut();
});
 });
    
    
    (function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.6";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
</script>
<script>
     $(document).ready(function () {
                // validate the comment form when it is submitted
                //$("#feedback_form").validate();
var r5 = 5;
var r10 = 10;
var r2 = 2;

                // validate signup form on keyup and submit
                $("#calculate-route").validate({
                    rules: {
                        from: {
                            required: true
                        }
                    },
                    messages: {
                        from: {
                            required: "Por favor ingrese dirección."
                        }
                    }
                });
                
                 
                  
  
            
               
                
                
                
                
                
                });
</script>
<script>
  var directionsDisplay;
  var directionsService = new google.maps.DirectionsService();

  function initialize() {
      directionsDisplay = new google.maps.DirectionsRenderer();
      var mapOptions = {
          zoom: 12,
          mapTypeId: google.maps.MapTypeId.ROADMAP,
         // center: new google.maps.LatLng(<?php  echo   (empty($sit->sit_latitud)) ? 3.8908926 :($sit->sit_latitud) ;?> , <?php  echo (empty($sit->sit_latitud)) ? -76.2992179 : ($sit->sit_longitud)?>)
        //  center: new google.maps.LatLng(<?php echo $sit->sit_latitud?> , <?php echo $sit->sit_longitud?>)
          center: new google.maps.LatLng( 3.8605801 , -76.2960773)
      };
      var map = new google.maps.Map(document.getElementById('map-canvas2'),
              mapOptions);
      directionsDisplay.setMap(map);
      directionsDisplay.setPanel(document.getElementById('directions-panel'));

      var control = document.getElementById('control');
      control.style.display = 'block';
      map.controls[google.maps.ControlPosition.TOP_CENTER].push(control);
  }

  $(document).ready(function () {
      // If the browser supports the Geolocation API
      if (typeof navigator.geolocation == "undefined") {
          $("#error").text("Your browser doesn't support the Geolocation API");
          return;
      }
//        $("#from").onchange(function(event) { 
//          event.preventDefault();
//          calcRoute();
//      });
      $("#from-link, #to-link").click(function (event) {
          event.preventDefault();
          var addressId = this.id.substring(0, this.id.indexOf("-"));
          navigator.geolocation.getCurrentPosition(function (position) {
              var geocoder = new google.maps.Geocoder();
              geocoder.geocode({
                  "location": new google.maps.LatLng(position.coords.latitude, position.coords.longitude)
              },
              function (results, status) {
                  if (status == google.maps.GeocoderStatus.OK)
                      $("#" + addressId).val(results[0].formatted_address);
                  else
                      $("#error").append("No se puede obtener su direccion<br />");
              });
          },
                  function (positionError) {
                      $("#error").append("Error: " + positionError.message + "<br />");
                  },
                  {
                      enableHighAccuracy: true,
                      timeout: 10 * 1000 // 10 seconds
                  });
          calcRoute();
      });
      $("#calculate-route").submit(function (event) {
          event.preventDefault();
//          calculateRoute($("#from").val(), $("#to").val());
          calcRoute();
      });
      
       $("#routeMode").on("change", function() { calcRoute(); });
      
      
       $("#routeClear").on("click", function() { directionsDisplay.setDirections({ routes: [] }); 
       $('#directions-panel').addClass("invisibleX");
       $('#directions-outpanel').addClass("invisibleX");
       $('#outmap-canvas2').addClass("smallmap");
       $('input#from').addClass("max-widthX");
              $('#outmap-canvas2').removeClass("bigmap");
    });
       
  });



  function calcRoute() {
      var start = document.getElementById('from').value;
      var end = document.getElementById('to').value;
     // var routeMode = google.maps.TravelMode($('#routeMode').value);
      
      var request = {
          origin: start,
          destination: end,
          travelMode: google.maps.TravelMode[$("#routeMode").val()]
      };
      directionsService.route(request, function (response, status) {
          if (status == google.maps.DirectionsStatus.OK) {
              directionsDisplay.setDirections(response);
              $('#map-canvas2').removeClass("invisibleX");
              $('.directions-outpanel').removeClass("invisibleX");
              $('#outmap-canvas2').removeClass("smallmap");
              $('#outmap-canvas2').addClass("bigmap");
              $('#map-canvas2').addClass("bigmap");
              $('#directions-panel').removeClass("invisibleX");
              $('input#from').removeClass("max-widthX");
          }
      });
  }

  google.maps.event.addDomListener(window, 'load', initialize);

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
<?php $Loading = 'Loading...' ?>
<?php include_once ('/../../Templates/Frontend/footer.php') ?>
<?php include_once ('/../../Templates/Frontend/foot.php') ?>

