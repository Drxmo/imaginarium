<?php include_once ('/../../Templates/Backend/head.php') ?>
<?php include_once ('/../../Templates/Backend/header.php') ?>

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
      <form class="form-horizontal" action="<?php echo url("/eventos/eventos/editar") ?>" method="post" enctype="multipart/form-data">
        <div class="form-group">


          <div style="clear:both;"></div>
          
          <input type="hidden"  id="subcatId" value="<?php echo $evento->eve_id ?>" name="evento[eve_id]">
          <input type="hidden"  id="subcatId" value="" name="evento[subcat_id]">
          <input type="hidden"  id="sub_subcatId" value="" name="evento[sub_subcat_id]">
          <div class="catselector" >
            <input type="text" style="visibility:hidden; top:-20px; width: 1px; height: 1px; position:absolute; z-index: 99" name="evento[cat_id]"  id="catId" class="readon readonly" />
          </div>
          <?php include ('/../../Templates/Backend/categoryselector.php') ?>

          <div style="clear:both;"></div>

          <div class="form-group">
            <label Id="" class="control-label labelx col-xs-3">Nombre del evento:</label>
            <div class="col-xs-9">
              <input type="text" class="form-control" value="<?php echo $evento->eve_nombre ?>" name="evento[nombre]">
            </div>
          </div>

          <div class="form-group">
            <label class="control-label col-xs-3">Descripcion:</label>
            <div class="col-xs-9">
              <textarea class="form-control" id="evento[descripcion]" name="evento[descripcion]"></textarea>
            </div>
          </div>
          

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
          </div>

          <div class="form-group" style="display:none">
            <label class="control-label col-xs-3">usuario del Evento:</label>
            <div class="col-xs-6">
              <input type="hidden" class="form-control" value="<?php echo Session::get('user') ?>" name="evento[usu_id]">
            </div>
          </div>

          <div class="form-group">
            <label class="control-label col-xs-3">Fecha y hora:</label>
            <div class="col-xs-6">
              <input type="text" value="<?php echo $evento->eve_fecha_hora ?>" name="evento[fecha_hora]" class="date readonly form-control" placeholder="AAAA/MM/DD"/><br /><br />
            </div>
          </div>

          <div class="form-group">
            <label class="control-label col-xs-3">Direccion:</label>
            <div class="col-xs-6">
              <input type="text" class="form-control" value="<?php echo $evento->eve_direccion ?>" name="evento[direccion]">
            </div>
          </div>

          <div class="form-group">
            <label class="control-label col-xs-3">Nombre del contacto:</label>
            <div class="col-xs-6">
              <input type="text" class="form-control" value="<?php echo $evento->eve_nombre_contacto ?>" name="evento[nombre_contacto]">    
            </div>
          </div>

          <div class="form-group">
            <label class="control-label col-xs-3">Email del contacto:</label>
            <div class="col-xs-6">
              <input type="text" class="form-control" value="<?php echo $evento->eve_correo_contacto ?>" name="evento[correo_contacto]">    
            </div>
          </div>

          <div class="form-group">
            <label class="control-label col-xs-3">Telefono:</label>
            <div class="col-xs-6">
              <input type="text" class="form-control" value="<?php echo $evento->eve_telefono_contacto ?>" name="evento[telefono_contacto]">
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
              <input type="text" class="form-control" value="<?php echo $evento->eve_latitud ?>" name="evento[latitud]">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-xs-3">Longitud:</label>
            <div class="col-xs-6">
              <input type="text" class="form-control" value="<?php echo $evento->eve_longitud ?>" name="evento[longitud]">
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
              <input type="text" value="<?php echo $evento->fecha_inicio_publicacion ?>" name="evento[fecha_inicio_publicacion]" class="date readonly form-control" placeholder="AAAA/MM/DD"/><br /><br />
            </div>
          </div>

          <div class="form-group">
            <label class="control-label col-xs-3">Final del evento:</label>
            <div class="col-xs-6">
              <input type="text" value="<?php echo $evento->fecha_fin_publicacion ?>" name="evento[fecha_fin_publicacion]" class="date readonly form-control" placeholder="AAAA/MM/DD"/><br /><br />
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
              <input type="submit" class="btn btn-default" value="Editar">
              <a href="<?php echo url("/eventos/eventos/listar") ?>" class="btn btn-default btn-cancel" value="Guardar">Cancelar</a>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
</section>



<script>

  $(document).ready(function () {

    document.getElementById("evento[descripcion]").value = "<?php echo $evento->eve_descripcion ?>";


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
                    required: "MEtele algo aki"
                },
        "evento[nombre]": {
          required: " Introduce el nombre del evento ",
          minlength: " minimo " + a1 + " de caracteres ",
          maxlength: " maximo " + a2 + " de caracteres "
        },
        "evento[descripcion]": {
          required: " Introduce una descripcion sobre el evento que deseas crear "
        },
        "evento[fecha_hora]": {
          required: " Intruduce cuando sera el evento "
        },
        "evento[direccion]": {
          required: "Introduce la direccion del evento"
        },
        "evento[nombre_contacto]": {
          required: " Introduce el nombre de la persona a quien contactar ",
          minlength: " minimo " + a1 + " de caracteres ",
          maxlength: " maximo " + a3 + " de caracteres "
        },
        "evento[correo_contacto]": {
          required: " Introduce un email para contactarte ",
          email: " Introduce caracteres '@', '.es', '.com' "
        },
        "evento[telefono_contacto]": {
          required: " Introduce un numero de telefono ",
          number: " Introduce un numero de telefono valido ",
          minlength: " minimo " + a4 + " de caracteres ",
          maxlength: " maximo " + a2 + " de caracteres "
        },
        "evento[valor_boleta]": {
          required: " Introduce el precio de la entrada "

        },
        "evento[fecha_inicio_publicacion]": {
          required: " Introduce la fecha de comienzo del evento "
        },
        "evento[fecha_fin_publicacion]": {
          required: " Introduce la fecha final del evento "

        }

        //agree: "Please accept our terms & condition."
      }
    });
  });

</script>

 <?php  $Loading = 'Loading...' ?>
<?php include_once ('/../../Templates/Backend/footer.php') ?>
<?php include_once ('/../../Templates/Backend/foot.php') ?>