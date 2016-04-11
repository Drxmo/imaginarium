<?php include_once ('/../../Templates/Backend/head.php') ?>
<?php include_once ('/../../Templates/Backend/header.php') ?>


<script src="<?php echo asset('js/jquery/places.js') ?>"></script>
<style>
    .ui-datepicker-header a{
        background-color: black
    }
    /*    .ui-datepicker .ui-datepicker-prev {
            background-color: black !important
        }*/

    .ui-datepicker .ui-datepicker-prev,
    .ui-datepicker .ui-datepicker-next {
        position: absolute;
        top: 2px;
        width: 1.8em;
        height: 1.8em;
        background-color: rgba(247,247,247,0.5);
    }

    .error{
        color:red;
    }
    /*.genero .error{
        position: absolute;
        top:100px;
    }*/

    .errorX{
        color: blue;
        position: absolute;
        top:300px;
    }

    li label.error{
        position: absolute;
        top:30px;
    }


</style>


<section class="main container regcontainer">
    <div class="row">
        <main class="container" role="main">
            <article class="">                        
                <header class="title-head">
                    <h3><span>Editar Sitio</span></h3>
                </header>

            </article>
        </main>
        <div style="clear:both;"></div>
        <div class="row">
            <div class="boxuserX">
                <form id="formvalidate" novalidate class="form-horizontal" action="<?php echo url("/sitios/sitios/update") ?>" method="post" enctype="multipart/form-data">
                    <div class="form-group">

                        <input type="hidden"  value="<?php echo $sitio->sit_id?>"  name="sitio[sit_id]">
                        <input type="hidden"  id="subcatId"  name="sitio[subcat_id]">
                        <input type="hidden" id="sub_subcatId"  name="sitio[sub_subcat_id]">
                        <div class="catselector" >
                            <input type="text" style="visibility:hidden; top:-20px; width: 1px; height: 1px; position:absolute; z-index: 99" name="sitio[cat_id]"  id="catId" class="readon readonly" />
                        </div>
                        <?php include ('/../../Templates/Backend/categoryselector.php') ?>



<!--                    <input type="hidden" class="readonly" disabled style="width:16px" onclick="myFunction(<?php echo $cat ?>)"  id="catId" value="" required>

 <input type="hidden" style="visibility:hidden; width: 1px; height: 1px; position:absolute" readonly id="catsname" value="" name="sitio[cat_name]">-->


                        <!--                    <div class="form-group">
                                                <label class="control-label col-xs-3">Categoria:</label>
                                                <div class="col-xs-2">
                        
                                                    <label class="radio-inline">
                                                        <select name="sitio[rol]">
                        <?php
//foreach ($categorias as $categoria) {
                        ?>
                                                                <option value="<?php //echo $categoria->cat_id   ?>">&nbsp<?php //echo $categoria->cat_nombre   ?>&nbsp</option>
                        
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
                                <input type="text" class="form-control" id="nombre" value="<?php echo $sitio->sit_nombre ?>" name="sitio[nombre]">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-xs-3">Descripcion Sitio</label>
                            <div class="col-xs-9">
                                <textarea class="form-control" id="descripcionsitio" name="sitio[descripcion]"></textarea>
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

                            <!--                        </div>-->

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
                            <?php if (Session::has('super') === true): ?>


                                <!--                        <div class="form-group" >
                                                            <label class="control-label col-xs-3">usuario de Sitio</label>
                                                            <div class="col-xs-6">
                                                                <input type="number" style="width:50px" class="form-control" id="usuSitio" value="<?php echo Session::get('user') ?>" name="sitio[usu_id]">
                                                            </div>
                                                        </div>-->
                                <!--                        <div class="form-group" >
                                                        <div class="col-xs-2 ">-->

                                <div class="col-xs-2">
                                    <label  style="top:-15px;"><span class="lightcyan">Usuario de Sitio:</span> 
                                        <select name="sitio[usu_id]" >
                                            <option></option>
                                            <?php
                                            foreach ($usuarios as $usuario) {
                                                ?>
                                                <option style="font-family: BankGothicMdBT" value="<?php echo $usuario->usu_id ?>">&nbsp<?php echo $usuario->usu_id . ' - ' . $usuario->usu_usuario ?>&nbsp</option>

                                            <?php } ?>

                                        </select>
                                    </label>
                                </div>
                            </div>




    <!--                <label class="radio-inline" style="top:-15px;"><span class="lightcyan">Usuario de Sitio:</span> 
                        <select name="sitio[usu_id]" >
                            <option></option>
                            <?php
                            foreach ($usuarios as $usuario) {
                                ?>
                                    <option class="control-label col-xs-3" style="font-family: BankGothicMdBT" value="<?php echo $usuario->usu_id ?>">&nbsp<?php echo $usuario->usu_id . ' - ' . $usuario->usu_usuario ?>&nbsp</option>

                            <?php } ?>

                        </select>
                    </label>-->
                            <!--            </div>
                                        </div>-->


                        <?php else: ?>

                        </div>
                        <input type="hidden" class="form-control" id="usuSitio" value="<?php echo Session::get('user') ?>" name="sitio[usu_id]">
                    <?php endif; ?>
                    <div class="form-group">
                        <label class="control-label col-xs-3">Direccion de Sitio</label>
                        <div class="col-xs-6">
                            <input type="text" class="form-control"  id="autocomplete" value="<?php echo $sitio->sit_direccion ?>" name="sitio[direccion]">

                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-xs-3">Telefono Sitio</label>
                        <div class="col-xs-6">
                            <input type="text" class="form-control" id="telefonoSitio" value="<?php echo $sitio->sit_telefono ?>" name="sitio[telefono]">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-xs-3">Latitud Sitio</label>
                        <div class="col-xs-6">
                            <input type="text" class="form-control" id="latitude"  value="<?php echo $sitio->sit_latitud ?>" name="sitio[latitud]">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-xs-3">Longitud Sitio</label>
                        <div class="col-xs-6">
                            <input type="text" class="form-control" id="longitude" value="<?php echo $sitio->sit_longitud ?>" name="sitio[longitud]">
                        </div>
                    </div>                             
                    <div class="form-group">
                        <label class="control-label col-xs-3">Facebook Sitio</label>
                        <div class="col-xs-6">

                            <input type="text" class="form-control" id="facebookSitio" value="<?php echo $sitio->sit_facebook ?>" name="sitio[facebook]">    
                        </div>

                    </div>
                    <div class="form-group">
                        <label class="control-label col-xs-3">Twitter Sitio</label>
                        <div class="col-xs-6">

                            <input type="text" class="form-control" id="twitterSitio" value="<?php echo $sitio->sit_twitter ?>" name="sitio[twitter]">    
                        </div>

                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3">Google Sitio</label>
                        <div class="col-xs-6">

                            <input type="text" class="form-control" id="googleSitio" value="<?php echo $sitio->sit_google_plus ?>" name="sitio[google]">    
                        </div>

                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3">Cargar Imagen</label>
                        <div class="col-xs-6">


                            <input type="file" name="fileToUpload" id="fileToUpload" style="width:125px" placeholder="subir">    
                        </div>

                    </div>

                    <br>
                    <div class="form-group">
                        <div class="col-xs-offset-3 col-xs-9">
                            <input type="submit" class="btn btn-default" value="Publicar">
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
        var valdesc = ("<?php echo $sitio->sit_descripcion ?>");

        document.getElementById("descripcionsitio").value = valdesc;
    });
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


    $(document).ready(function () {
        // validate the comment form when it is submitted
        //$("#feedback_form").validate();
        var r5 = 5;
        var r30 = 30;
        var r3 = 3;
        var r1 = 1;
//$.validator.setDefaults({ 
//    ignore: []
//});

        // validate signup form on keyup and submit
        $("#formvalidate").validate({
//                    ignore: [],
//                        ignore: ":hidden:not(.my_item)"
            rules: {
                "sitio[cat_id]": {
                    required: true
                },
                "sitio[nombre]": {
                    required: true
                },
                "sitio[descripcion]": {
                    required: true
                },
                "sitio[estado]": {
                    required: true
                },
                "sitio[usu_id]": {
                    required: true
                },
                "sitio[direccion]": {
                    required: true
                },
                "sitio[telefono]": {
                    required: true
                },
                "sitio[latitud]": {
                    required: true
                },
                "sitio[longitud]": {
                    required: true
                },
                "sitio[facebook]": {
                    required: true
                },
                "sitio[twitter]": {
                    required: true
                },
                "sitio[google]": {
                    required: true
                }

            },
            messages: {
                "sitio[cat_id]": {
                    required: "Seleccione Categoria para publicar Sitio."
                },
                "sitio[nombre]": {
                    required: "Ingrese Nombre del Sitio."
                },
                "sitio[descripcion]": {
                    required: "Ingrese Descripcion del Sitio."
                },
                "sitio[estado]": {
                    required: "Ingrese Estado del Sitio."
                },
                "sitio[usu_id]": {
                    required: "Ingrese Usuario del Sitio"
                },
                "sitio[direccion]": {
                    required: "Ingrese Direccion del Sitio"
                },
                "sitio[telefono]": {
                    required: "Ingrese Telefono del Sitio"
                },
                "sitio[latitud]": {
                    required: "Ingrese Latitud del Sitio"
                },
                "sitio[longitud]": {
                    required: "Ingrese Longitud del Sitio"
                },
                "sitio[facebook]": {
                    required: "Ingrese Facebook del Sitio"
                },
                "sitio[twitter]": {
                    required: "Ingrese Twitter del Sitio"
                },
                "sitio[google]": {
                    required: "Ingrese Google del Sitio"
                }
            }
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
        //alert(firstParameter + "  " + subcats + "  " + sub_subcats);
        $(" #catId").val(cats);
        $(" #subcatId").val(subcats);
        $(" #sub_subcatId").val(sub_subcats);
        
    };
    
     $(document).ready(function () {
          $(" #catId").val(<?php echo $sitio->cat_id ?>);
        $(" #subcatId").val(<?php echo $sitio->subcat_id ?>);
        $(" #sub_subcatId").val(<?php echo $sitio->sub_subcat_id ?>);
        $(" #catsname").val(catsname);
    });
     

//    $(document).ready(function () {
//
// document.getElementById("descripcionSitio").value = "<?php // echo $evento->eve_descripcion  ?>";
// 
// 
//});

//     $(".readonly").keydown(function(e){
//        e.preventDefault();
//    });
//    document.getElementById('readonly').readOnly=true



</script>
<?php $Loading = 'Loading...' ?>
<?php include_once ('/../../Templates/Backend/footer.php') ?>
<?php include_once ('/../../Templates/Backend/foot.php') ?>