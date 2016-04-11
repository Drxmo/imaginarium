<?php include_once ('/../../Templates/Backend/head.php') ?>
<?php include_once ('/../../Templates/Backend/header.php') ?>
<script src="<?php echo asset('js/jquery/places.js') ?>"></script>




<section class="main container regcontainer">
    <main class="container" role="main">
        <article class="">                        
            <header class="title-head">
                <h3><span>Editar Evento</span></h3>
            </header>




        </article>
    </main>
    <div style="clear:both;"></div>
    <div class="row">
        <div class="boxuserX">
            <form class="form-horizontal" id="formvalidate" novalidate action="<?php echo url("/eventos/eventos/editar") ?>" method="post" enctype="multipart/form-data">
                <div class="form-group">


                    <div style="clear:both;"></div>



                    <input type="hidden"   value="<?php echo $evento->eve_id ?>" name="evento[eve_id]">
                    <input type="hidden"  id="subcatId" value="" name="evento[subcat_id]">
                    <input type="hidden"   id="sub_subcatId" value="" name="evento[sub_subcat_id]">
                    <div class="catselector" >
                        <input type="text" style="visibility:hidden; top:-20px; width: 1px; height: 1px; position:absolute; z-index: 99" name="evento[cat_id]"  id="catId" class="readon readonly" />
                    </div>


                    <?php include ('/../../Templates/Backend/categoryselector.php') ?>

                    <div style="clear:both;"></div>







                    <div class="form-group">
                        <label Id="" class="control-label labelx col-xs-3 lightcyan">Nombre del evento:</label>
                        <div class="col-xs-9">
                            <input type="text" class="form-control" value="<?php echo $evento->eve_nombre ?>" name="evento[nombre]">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3 lightcyan">Descripcion:</label>
                        <div class="col-xs-9">
                            <textarea class="form-control"  id="descripcionevento"  name="evento[descripcion]"></textarea>
                        </div>
                    </div>
                    <!--                    <div class="form-group">
                                            <label class="control-label col-xs-3">Categoria de evento</label>
                                            <div class="col-xs-6">
                                                <input type="text" required class="form-control" id="direccionevento" name="evento[catId]">
                                            </div>
                                        </div> -->

                    <div class="form-group ">

                        <label class="control-label col-xs-3">Estado:</label>
                        <div class="col-xs-2">
                            <label class="radio-inline">
                                <input type="radio" name="evento[activado]" value="1" checked> Activado<br>
                            </label>
                        </div>
                        <div class="col-xs-2">
                            <label class="radio-inline">
                                <input type="radio" name="evento[activado]" value="0"> Desactivado<br>
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
                                <label  style="top:-15px;"><span class="lightcyan">Usuario de evento:</span> 
                                    <select name="evento[usu_id]" >
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
                    <input type="hidden" class="form-control" id="usuevento" value="<?php echo Session::get('user') ?>" name="evento[usu_id]">
                <?php endif; ?>

                <div class="form-group">
                    <label class="control-label col-xs-3 lightcyan">Fecha y hora:</label>
                    <div class="col-xs-6">
                        <input type="text" name="evento[fecha_hora]" value="<?php echo $evento->eve_fecha_hora ?>" class="date readonly form-control" placeholder="AAAA/MM/DD" /><br /><br />
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-xs-3 lightcyan">Direccion:</label>
                    <div class="col-xs-6">
                        <input type="text" class="form-control" id="autocomplete" name="evento[direccion]" value="<?php echo $evento->eve_direccion ?>">
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-xs-3 lightcyan">Nombre del contacto:</label>
                    <div class="col-xs-6">

                        <input type="text" class="form-control" value="<?php echo $evento->eve_nombre_contacto ?>" name="evento[nombre_contacto]">    
                    </div>

                </div>

                <div class="form-group">
                    <label class="control-label col-xs-3 lightcyan">Email del contacto:</label>
                    <div class="col-xs-6">

                        <input type="text" class="form-control" value="<?php echo $evento->eve_correo_contacto ?>" name="evento[correo_contacto]">    
                    </div>
                </div>

                <!--                    <div class="form-group">
                                        <label class="control-label col-xs-3">Estado de evento</label>
                                        <div class="col-xs-6">
                                            <input type="text" required lass="form-control" id="direccionevento" name="evento[estadoId]">
                                        </div>
                                    </div>-->

                <div class="form-group">
                    <label class="control-label col-xs-3">Telefono:</label>
                    <div class="col-xs-6">
                        <input type="number" class="form-control" value="<?php echo $evento->eve_telefono_contacto ?>" name="evento[telefono_contacto]">
                    </div>
                </div>


                <div class="form-group">
                    <label class="control-label col-xs-3">Precio de la entrada:</label>
                    <div class="col-xs-6">

                        <input type="text" class="form-control" value="<?php echo $evento->eve_valor_boleta ?>" name="evento[valor_boleta]">    
                    </div>

                </div>
                <div class="form-group">
                    <label class="control-label col-xs-3">Latitud:</label>
                    <div class="col-xs-6">
                        <input type="text" class="form-control" id="latitude" value="<?php echo $evento->eve_latitud ?>" name="evento[latitud]">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-xs-3">Longitud:</label>
                    <div class="col-xs-6">
                        <input type="text" class="form-control" id="longitude" value="<?php echo $evento->eve_longitud ?>" name="evento[longitud]">
                    </div>
                </div>   


                <div class="form-group">
                    <label class="control-label col-xs-3">Facebook del evento:</label>
                    <div class="col-xs-6">

                        <input type="text" class="form-control" value="<?php echo $evento->eve_facebook ?>" name="evento[facebook]">    
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-xs-3">Inicio del evento:</label>
                    <div class="col-xs-6">
                        <input type="text" name="evento[fecha_inicio_publicacion]" value="<?php echo $evento->fecha_inicio_publicacion ?>" class="date readonly form-control" placeholder="YYYY/MM/DD" /><br /><br />
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-xs-3">Final del evento:</label>
                    <div class="col-xs-6">
                        <input type="text" name="evento[fecha_fin_publicacion]" value="<?php echo $evento->fecha_fin_publicacion ?>" class="date readonly form-control" placeholder="YYYY/MM/DD" /><br /><br />
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
                        <input type="submit" class="btn btn-default" value="Registrar">
                        <a href="<?php echo url("/eventos/eventos/listar") ?>" class="btn btn-default btn-cancel" value="Guardar">Cancelar</a>
                    </div>
                </div>


        </div>
        </form>

    </div>
</div>
</section>


<?php /*
  <script>

  $(document).ready(function () {
  // validate the comment form when it is submitted
  //$("#feedback_form").validate();
  var a1 = 2;
  var a2 = 20;
  var a3 = 30;
  var a4 = 6;

  // validate signup form on keyup and submit
  $("#formvalidate").validate({
  rules: {
  "sitio[cat_id]": {
  required: true
  },
  "evento[nombre]": {
  required: true,
  minlength: a1,
  maxlength: a2
  },
  "evento[descripcion]": {
  required: true
  },
  "evento[fecha_hora]": {
  required: true
  },
  "evento[direccion]": {
  required: true
  },
  "evento[nombre_contacto]": {
  required: true,
  minlength: a1,
  maxlength: a3
  },
  "evento[correo_contacto]": {
  required: true,
  email: true
  },
  "evento[telefono_contacto]": {
  required: true,
  number: true,
  minlength: a4,
  maxlength: a2
  },
  "evento[valor_boleta]": {
  required: true
  },
  "evento[fecha_inicio_publicacion]": {
  required: true
  },
  "evento[fecha_fin_publicacion]": {
  required: true
  }

  //agree: "required"
  }, messages: {
  "sitio[cat_id]": {
  required: "Seleccione Categoria para publicar Sitio."
  },
  "evento[nombre]": {
  required: " Introduce el nombre del evento ",
  minlength: " mínimo " + a1 + " de caracteres ",
  maxlength: " máximo " + a2 + " de caracteres "
  },
  "evento[descripcion]": {
  required: " Introduce una descripción sobre el evento que deseas crear "
  },
  "evento[fecha_hora]": {
  required: " Introduce aa/mm/dd del evento "
  },
  "evento[direccion]": {
  required: "Introduce la direccion del evento"
  },
  "evento[nombre_contacto]": {
  required: " Introduce el nombre de la persona a quien contactar ",
  minlength: " mínimo " + a1 + " de caracteres ",
  maxlength: " máximo " + a3 + " de caracteres "
  },
  "evento[correo_contacto]": {
  required: " Introduce un email para contactarte ",
  email: " Introduce caracteres '@', '.es', '.com' "
  },
  "evento[telefono_contacto]": {
  required: " Introduce un número de teléfono ",
  number: " Introduce un número de teléfono válido ",
  minlength: " mínimo " + a4 + " de carácteres ",
  maxlength: " máximo " + a2 + " de carácteres "
  },
  "evento[valor_boleta]": {
  required: " Introduce el precio de la entrada "

  },
  "evento[fecha_inicio_publicacion]": {
  required: " Introduce aa/mm/dd de comienzo del evento "
  },
  "evento[fecha_fin_publicacion]": {
  required: " Introduce aa/mm/dd de final del evento "

  }

  //agree: "Please accept our terms & condition."
  }
  });
  });




  $(".readonly").keydown(function (e) {
  e.preventDefault();
  });

  // To user jQuery DatePicker
  $(function () {
  $(".date").datepicker({
  dateFormat: 'yy/mm/dd',
  buttonImageOnly: true,
  buttonText: "Select date"
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

  function myFunction(firstParameter, secondParameter, thirdParameter) {
  var cats = firstParameter;
  var subcats = secondParameter;
  var sub_subcats = thirdParameter;
  $(" #catId").val(cats);
  $(" #subcatId").val(subcats);
  $(" #sub_subcatId").val(sub_subcats);

  //alert(cats + "  " + subcats + "  " + sub_subcats);
  }
  ;

  </script>
 */ ?>

<script>

    $(document).ready(function () {
        var valdesc = ("<?php echo $evento->eve_descripcion ?>");

        document.getElementById("descripcionevento").value = valdesc;
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
        var a1 = 2;
        var a2 = 20;
        var a3 = 30;
        var a4 = 6;

        // validate signup form on keyup and submit
        $("#formvalidate").validate({
            rules: {
                "evento[cat_id]": {
                    required: true
                },
                "evento[nombre]": {
                    required: true,
                    minlength: a1,
                    maxlength: a2
                },
                "evento[descripcion]": {
                    required: true
                },
                "evento[fecha_hora]": {
                    required: true
                },
                "evento[direccion]": {
                    required: true
                },
                "evento[nombre_contacto]": {
                    required: true,
                    minlength: a1,
                    maxlength: a3
                },
                "evento[correo_contacto]": {
                    required: true,
                    email: true
                },
                "evento[telefono_contacto]": {
                    required: true,
                    number: true,
                    minlength: a4,
                    maxlength: a2
                },
                "evento[valor_boleta]": {
                    required: true
                },
                "evento[fecha_inicio_publicacion]": {
                    required: true
                },
                "evento[fecha_fin_publicacion]": {
                    required: true
                }

                //agree: "required"
            }, messages: {
                "evento[cat_id]": {
                    required: "Seleccione Categoria para publicar."
                },
                "evento[nombre]": {
                    required: " Introduce el nombre del evento ",
                    minlength: " mínimo " + a1 + " de caracteres ",
                    maxlength: " máximo " + a2 + " de caracteres "
                },
                "evento[descripcion]": {
                    required: " Introduce una descripción sobre el evento que deseas crear "
                },
                "evento[fecha_hora]": {
                    required: " Introduce aa/mm/dd del evento "
                },
                "evento[direccion]": {
                    required: "Introduce la direccion del evento"
                },
                "evento[nombre_contacto]": {
                    required: " Introduce el nombre de la persona a quien contactar ",
                    minlength: " mínimo " + a1 + " de caracteres ",
                    maxlength: " máximo " + a3 + " de caracteres "
                },
                "evento[correo_contacto]": {
                    required: " Introduce un email para contactarte ",
                    email: " Introduce caracteres '@', '.es', '.com' "
                },
                "evento[telefono_contacto]": {
                    required: " Introduce un número de teléfono ",
                    number: " Introduce un número de teléfono válido ",
                    minlength: " mínimo " + a4 + " de carácteres ",
                    maxlength: " máximo " + a2 + " de carácteres "
                },
                "evento[valor_boleta]": {
                    required: " Introduce el precio de la entrada "

                },
                "evento[fecha_inicio_publicacion]": {
                    required: " Introduce aa/mm/dd de comienzo del evento "
                },
                "evento[fecha_fin_publicacion]": {
                    required: " Introduce aa/mm/dd de final del evento "

                }

                //agree: "Please accept our terms & condition."
            }
        });
    });




    $(".readonly").keydown(function (e) {
        e.preventDefault();
    });

// To user jQuery DatePicker 
    $(function () {
        $(".date").datepicker({
            dateFormat: 'yy/mm/dd',
            buttonImageOnly: true,
            buttonText: "Select date"
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

    function myFunction(firstParameter, secondParameter, thirdParameter) {
        var cats = firstParameter;
        var subcats = secondParameter;
        var sub_subcats = thirdParameter;
        $(" #catId").val(cats);
        $(" #subcatId").val(subcats);
        $(" #sub_subcatId").val(sub_subcats);

        //alert(cats + "  " + subcats + "  " + sub_subcats);
    }
    ;

</script>
<?php $Loading = 'Loading...' ?>
<?php include_once ('/../../Templates/Backend/foot.php') ?>
<?php include_once ('/../../Templates/Backend/footer.php') ?>