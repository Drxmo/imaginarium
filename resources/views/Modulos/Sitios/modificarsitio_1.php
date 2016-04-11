<?php include_once ('/../../Templates/Backend/head.php') ?>
<?php include_once ('/../../Templates/Backend/header.php') ?>
<script src="<?php echo asset('js/jquery/places.js') ?>"></script>



<section class="main container regcontainer">
    <div class="row">
        <main class="container" role="main">
            <article class="">                        
                <header class="sitio-head">
                    <h3><span>Editar Sitio</span></h3>
                </header>

            </article>
        </main>
        <div style="clear:both;"></div>
        <div class="row">
            <div class="boxuserX">
                <form id="myform" class="form-horizontal" action="<?php echo url("/sitios/sitios/update") ?>" method="post" enctype="multipart/form-data">
                <div class="form-group">




                        <input type="hidden"  id="subcatId" value="" name="sitio[subcat_id]">
                        <input type="text"  disabled="" id="sub_subcatId" value="" name="sitio[sub_subcat_id]">
                        <div class="catselector" >
                            <input type="text" style="visibility:hidden; top:-20px; width: 1px; height: 1px; position:absolute; z-index: 99" name="sitio[cat_id]"  id="catId" class="readon readonly" />
                        </div>
                        <?php include ('/../../Templates/Backend/categoryselector.php') ?>

                    <input type="hidden" name="sitio[id]"   value="<?php echo $sitio->sit_id ?>">
                   

                    <!--                    <div class="form-group">
                                            <label class="control-label col-xs-3">Categoria:</label>
                                            <div class="col-xs-2">
                    
                                                <label class="radio-inline">
                                                    <select name="sitio[rol]">
                    <?php
//foreach ($categorias as $categoria) {
                    ?>
                                                            <option value="<?php //echo $categoria->cat_id ?>">&nbsp<?php //echo $categoria->cat_nombre ?>&nbsp</option>
                    
<?php //}  ?>
                    
                                                    </select>
                                                </label>
                                            </div>
                                        </div>
                                        <br>
                                        <br>-->


                    <div class="form-group">
                        <label class="control-label col-xs-3">Nombre Sitio:</label>
                        <div class="col-xs-9">
                            <input type="text" class="form-control" value="<?php echo $sitio->sit_nombre ?>" id="nombre" name="sitio[nombre]">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3">Descripcion Sitio</label>
                        <div class="col-xs-9">
                            <textarea class="form-control" id="descripcionSitio" name="sitio[descripcion]"></textarea>
                        </div>
                    </div>
                    <!--                    <div class="form-group">
                                            <label class="control-label col-xs-3">Categoria de Sitio</label>
                                            <div class="col-xs-6">
                                                <input type="text" required class="form-control" id="direccionSitio" name="sitio[catId]">
                                            </div>
                                        </div> -->

                    <div class="form-group ">
                        <label class="control-label col-xs-3">Estado:</label>
                        <div class="col-xs-2">

                            <label class="radio-inline">
                                <input type="radio" name="sitio[activado]" value="1" checked> Activado<br>
                            </label>
                        </div>
                        <div class="col-xs-2">

                            <label class="radio-inline">
                                <input type="radio" name="sitio[activado]" value="0"> Desactivado<br>
                            </label>
                        </div>
                    </div>
                    
<!--                    <div class="form-group">
                        <label class="control-label col-xs-3">usuario de Sitio</label>
                        <div class="col-xs-6">
                            <input type="text" name="date" class="date readonly" placeholder="DD/MM/YYYY" required /><br /><br />
                      </div>
                    </div>-->
                        <!--                    <div class="form-group">
                                            <label class="control-label col-xs-3">Estado de Sitio</label>
                                            <div class="col-xs-6">
                                                <input type="text" required lass="form-control" id="direccionSitio" name="sitio[estadoId]">
                                            </div>
                                        </div>-->
                        <?php   if(Session::has('super') === true):       ?>
                    <div class="form-group">
                        <label class="control-label col-xs-3">usuario de Sitio</label>
                        <div class="col-xs-6">
                            <input type="text" class="form-control" id="usuSitio" name="sitio[usu_id]">
                        </div>
                    </div>
                    <?php   endif;       ?>    
                        
                    <div class="form-group">
                        <label class="control-label col-xs-3">Direccion de Sitio</label>
                        <div class="col-xs-6">
                            <input type="text" class="form-control"  id="autocomplete" name="sitio[direccion]">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-xs-3">Telefono Sitio</label>
                        <div class="col-xs-6">
                            <input type="text" class="form-control" id="telefonoSitio" name="sitio[telefono]">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-xs-3">Latitud Sitio</label>
                        <div class="col-xs-6">
                            <input type="text" class="form-control" id="latitude" name="sitio[latitud]">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-xs-3">Longitud Sitio</label>
                        <div class="col-xs-6">
                            <input type="text" class="form-control" id="longitude" name="sitio[longitud]">
                        </div>
                    </div>                             
                    <div class="form-group">
                        <label class="control-label col-xs-3">Facebook Sitio</label>
                        <div class="col-xs-6">

                            <input type="text" class="form-control" id="facebookSitio" name="sitio[facebook]">    
                        </div>

                    </div>
                    <div class="form-group">
                        <label class="control-label col-xs-3">Twitter Sitio</label>
                        <div class="col-xs-6">

                            <input type="text" class="form-control" id="twitterSitio" name="sitio[twitter]">    
                        </div>

                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3">Google Sitio</label>
                        <div class="col-xs-6">

                            <input type="text" class="form-control" id="googleSitio" name="sitio[google]">    
                        </div>

                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3">Cargar Imagen</label>
                        <div class="col-xs-6">


                            <input type="file" name="fileToUpload" id="fileToUpload">    
                        </div>

                    </div>

                    <br>
                    <div class="form-group">
                        <div class="col-xs-offset-3 col-xs-9">
                            <input type="submit" class="btn btn-default" value="Modificar">
                            <a href="<?php echo url("/seguridad/panelcontrol") ?>" class="btn btn-default btn-cancel" value="Guardar">Cancelar</a>
                        </div>
                    </div>

                </div>
            </form>
        </div>
    </div>
    </div>
</section>
<script>
    
    $(document).ready(function () {

    document.getElementById("descripcionsitio").value = "<?php echo $sitio->sit_descripcion ?>";


  });

    
// To make field readonly
$(".readonly").keydown(function(e){
        e.preventDefault();
    });

// To user jQuery DatePicker 
$(function() {
    $( ".date" ).datepicker({
      dateFormat : 'dd/mm/yy',
      buttonImageOnly: true,
      buttonText: "Select date"
    }); 
}); 


$(function() {
    $( ".readon" ).datepicker({
      
      
    }); 
}); 

    $(function () {
        $(".dropdown-menu > li > a.trigger").on("mouseover", function (e) {
            var current = $(this).next();
            var grandparent = $(this).parent().parent();
            if ($(this).hasClass('left-caret') || $(this).hasClass('right-caret'))
                $(this).toggleClass('right-caret left-caret');
            grandparent.find('.left-caret').not(this).toggleClass('right-caret left-caret');
            grandparent.find(".sub-menu:visible").not(current).hide();
            current.toggle();
            e.stopPropagation();
        });
        $(".dropdown-menu > li > a:not(.trigger)").on("mouseover", function () {
            var root = $(this).closest('.dropdown');

            root.find('.left-caret').toggleClass('right-caret left-caret');
            root.find('.sub-menu:visible').hide();


        });



    });
//    
//if (typeof cats != 'undefined'){alert("Seleccione categoria"); }
    function myFunction(firstParameter, secondParameter, thirdParameter, fourthParameter) {
        var cats = firstParameter;
        var subcats = secondParameter;
        var sub_subcats = thirdParameter;
        var catsname = fourthParameter;
        //alert(cats + "  " + subcats + "  " + sub_subcats);
        alert(firstParameter + "  " + subcats + "  " + sub_subcats);
        $(" #catId").val(cats);
        $(" #subcatId").val(subcats);
        $(" #sub_subcatId").val(sub_subcats);
        $(" #catsname").val(catsname);

        
    };
    
//     $(".readonly").keydown(function(e){
//        e.preventDefault();
//    });
//    document.getElementById('readonly').readOnly=true

 
// This example displays an address form, using the autocomplete feature
// of the Google Places API to help users fill in the information.

$("#autocomplete").on('focus', function () {
    geolocate();
});

var placeSearch, autocomplete;
var componentForm = {
    street_number: 'short_name',
    route: 'long_name',
    locality: 'long_name',
    administrative_area_level_1: 'short_name',
    country: 'long_name',
    postal_code: 'short_name'
};

function initialize() {
    // Create the autocomplete object, restricting the search
    // to geographical location types.
    autocomplete = new google.maps.places.Autocomplete(
    /** @type {HTMLInputElement} */ (document.getElementById('autocomplete')), {
        types: ['geocode']
    });
    // When the user selects an address from the dropdown,
    // populate the address fields in the form.
    google.maps.event.addListener(autocomplete, 'place_changed', function () {
        fillInAddress();
    });
}

// [START region_fillform]
function fillInAddress() {
    // Get the place details from the autocomplete object.
    var place = autocomplete.getPlace();

    document.getElementById("latitude").value = place.geometry.location.lat();
    document.getElementById("longitude").value = place.geometry.location.lng();

    for (var component in componentForm) {
        document.getElementById(component).value = '';
        document.getElementById(component).disabled = false;
    }

    // Get each component of the address from the place details
    // and fill the corresponding field on the form.
    for (var i = 0; i < place.address_components.length; i++) {
        var addressType = place.address_components[i].types[0];
        if (componentForm[addressType]) {
            var val = place.address_components[i][componentForm[addressType]];
            document.getElementById(addressType).value = val;
        }
    }
}
// [END region_fillform]

// [START region_geolocation]
// Bias the autocomplete object to the user's geographical location,
// as supplied by the browser's 'navigator.geolocation' object.
function geolocate() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(function (position) {
            var geolocation = new google.maps.LatLng(
            position.coords.latitude, position.coords.longitude);

            var latitude = position.coords.latitude;
            var longitude = position.coords.longitude;
            document.getElementById("latitude").value = latitude;
            document.getElementById("longitude").value = longitude;

            autocomplete.setBounds(new google.maps.LatLngBounds(geolocation, geolocation));
        });
    }

}

initialize();
// [END region_geolocation]

  

</script>
 <?php  $Loading = 'Loading...' ?>
<?php include_once ('/../../Templates/Backend/footer.php') ?>
<?php include_once ('/../../Templates/Backend/foot.php') ?>