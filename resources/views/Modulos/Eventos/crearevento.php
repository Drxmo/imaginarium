<?php include_once ('/../../Templates/Backend/head.php') ?>
<?php include_once ('/../../Templates/Backend/header.php') ?>





<section class="main container regcontainer">
    <main class="container" role="main">
        <article class="">                        
            <header class="title-head">
                <h3><span>Crear Evento</span></h3>
            </header>




        </article>
    </main>
    <div style="clear:both;"></div>
    <div class="row">
        <div class="boxuserX">
            <form class="form-horizontal" id="formvalidate" novalidate action="<?php echo url("/eventos/eventos/indexxx") ?>" method="post" enctype="multipart/form-data">
                <div class="form-group">


                    <div style="clear:both;"></div>


                    <!--          <div class="form-group">
                                <div class="dropdown" style="position:relative">
                                  <a href="#" class="btn  btn-category dropdown-toggle" data-toggle="dropdown">Seleccione Categoria <span class="caret"></span></a>
                    
                                  <ul class="dropdown-menu">
                    <?php
                    $cat = 1;
                    $subcat0 = 0;
                    $subcat = 1;
                    $sub_subcat = 1;
                    foreach ($categorias as $categoria) {
                        ?>
                                          <li>
                                            <a href="#<?php
                        $sitcatId = $cat;
                        $sitsubcatId = 0;
                        $sitsubsubcatId = 0;
                        ?>"  onclick="myFunction(<?php echo $cat ?>,<?php echo 0 ?>, <?php echo 0 ?>)" class="trigger right-caret">&nbsp<?php echo $categoria->cat_nombre ?><?php //echo 'cat: ' . $cat . ' , subcat: ' . $subcat0  ?>&nbsp</a>
                        
                                            <ul class="dropdown-menu sub-menu">
                        <?php
                        $subcategorias0 = DB::select("SELECT * FROM bdp_subcategoria WHERE cat_id IS NULL");


                        foreach ($subcategorias0 as $subcategoria) {
                            ?>
                                                    <li>
                                                      <a  class="trigger right-caret" >&nbsp<?php echo $subcategoria->subcat_nombre ?>&nbsp</a>
                                                    </li>
                            
                            <?php
                        }
                        $subcategorias = DB::select("SELECT * FROM bdp_subcategoria WHERE cat_id=? ORDER BY subcat_id ASC", array($cat));



                        foreach ($subcategorias as $subcategoria) {
                            ?>
                                                    <li>
                                                      <a class="trigger right-caret" onclick="myFunction(<?php echo $cat ?>,<?php echo $subcat ?>, <?php echo 0 ?>)">&nbsp<?php echo $subcategoria->subcat_nombre ?><?php // . ' , cat: ' . $cat . ' , subcat: ' . $subcat        ?>&nbsp</a>
                            
                            <?php //$subcat = $subcat + 1;  ?>
                                                      <ul class="dropdown-menu sub-menu">
                            <?php
                            $sub_subcategorias0 = DB::select("SELECT * FROM bdp_sub_subcategoria WHERE cat_id IS NULL");


                            foreach ($sub_subcategorias0 as $sub_subcategoria0) {
                                ?>
                                                              <li>
                                                                <a class="trigger right-caret" >&nbsp<?php echo $sub_subcategoria0->sub_subcat_nombre ?>&nbsp</a>
                                                              </li>
                                
                                <?php
                            }

                            //$subcat= $subcat + 1;
                            $sub_subcategorias = DB::select("SELECT * FROM bdp_sub_subcategoria WHERE cat_id = ? AND subcat_id=?", array($cat, $subcat));

                            foreach ($sub_subcategorias as $sub_subcategoria) {
                                //if (is_null($sub_subcategoria->subcat_id)): $high = 1  ;else: 
                                ?>
                                
                                                              <li>
                                                                <a class="trigger right-caret" onclick="myFunction(<?php echo $cat ?>,<?php echo $subcat ?>, <?php echo $sub_subcategoria->sub_subcat_id ?>)">&nbsp<?php echo $sub_subcategoria->sub_subcat_nombre ?><?php // . ' , cat: ' . $cat . ' , subcat: ' . $subcat . ' , sub_subcat: ' . $sub_subcategoria->sub_subcat_id         ?>&nbsp </a>
                                
                                                              </li>
                                <?php
                                //endif;
                                //$subcat = $subcat + 1;
                            }
                            $subcat = $subcat + 1;
                            //$subcat = $subcat++;
                            //$subcat = $subcat++;
                            //$cat= $cat++;
                            ?>
                                                      </ul>
                                                    </li>
                            <?php
                        }
                        $cat = $cat + 1;
                        //$cat = $cat++;
                        ?>
                                            </ul>
                                          </li>
                    <?php }
                    ?>
                                  </ul>
                                  </select>
                                </div>
                              </div>-->

                    <input type="hidden"  id="catId" value="" name="evento[cat_id]">
                    <input type="hidden"  id="subcatId" value="" name="evento[subcat_id]">
                    <input type="hidden"  id="sub_subcatId" value="" name="evento[sub_subcat_id]">

                    <div class="catselector" >
                        <input type="text" style="visibility:hidden; top:-20px; width: 1px; height: 1px; position:absolute; z-index: 99" name="evento[cat_id]"  id="catId" class="readon readonly" />
                    </div>


                    <?php include ('/../../Templates/Backend/categoryselector.php') ?>

                    <div style="clear:both;"></div>

<!--          <input type="hidden"  id="catId" value="" name="evento[cat_id]">
          <input type="hidden"  id="subcatId" value="" name="evento[subcat_id]">
          <input type="hidden"  id="sub_subcatId" value="" name="evento[sub_subcat_id]">-->


                    <!--                    <div class="form-group">
                                            <label class="control-label col-xs-3">Categoria:</label>
                                            <div class="col-xs-2">
                    
                                                <label class="radio-inline">
                                                    <select name="evento[rol]">
                    <?php
//foreach ($categorias as $categoria) {
                    ?>
                                                            <option value="<?php //echo $categoria->cat_id        ?>">&nbsp<?php //echo $categoria->cat_nombre        ?>&nbsp</option>
                    
                    <?php //}  ?>
                    
                                                    </select>
                                                </label>
                                            </div>
                                        </div>
                                        <br>
                                        <br>-->


                    <div class="form-group">
                        <label Id="" class="control-label labelx col-xs-3 lightcyan">Nombre del evento:</label>
                        <div class="col-xs-9">
                            <input type="text" class="form-control" name="evento[nombre]">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3 lightcyan">Descripcion:</label>
                        <div class="col-xs-9">
                            <textarea class="form-control" name="evento[descripcion]"></textarea>
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
                    </div>

                    <div class="form-group" style="display:none">
                        <label class="control-label col-xs-3 lightcyan">Usuario del evento:</label>
                        <div class="col-xs-6">
                            <input type="hidden" class="form-control" value="<?php echo Session::get('user') ?>" name="evento[usu_id]">
                        </div>
                    </div>



                    <div class="form-group">
                        <label class="control-label col-xs-3 lightcyan">Fecha y hora:</label>
                        <div class="col-xs-6">
                            <input type="text" name="evento[fecha_hora]" class="date readonly form-control" placeholder="AAAA/MM/DD" /><br /><br />
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3 lightcyan">Direccion:</label>
                        <div class="col-xs-6">
                            <input type="text" class="form-control" name="evento[direccion]">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3 lightcyan">Nombre del contacto:</label>
                        <div class="col-xs-6">

                            <input type="text" class="form-control" name="evento[nombre_contacto]">    
                        </div>

                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3 lightcyan">Email del contacto:</label>
                        <div class="col-xs-6">

                            <input type="text" class="form-control" name="evento[correo_contacto]">    
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
                            <input type="number" class="form-control" name="evento[telefono_contacto]">
                        </div>
                    </div>


                    <div class="form-group">
                        <label class="control-label col-xs-3">Precio de la entrada:</label>
                        <div class="col-xs-6">

                            <input type="text" class="form-control" name="evento[valor_boleta]">    
                        </div>

                    </div>
                    <div class="form-group">
                        <label class="control-label col-xs-3">Latitud:</label>
                        <div class="col-xs-6">
                            <input type="text" class="form-control" name="evento[latitud]">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-xs-3">Longitud:</label>
                        <div class="col-xs-6">
                            <input type="text" class="form-control" name="evento[longitud]">
                        </div>
                    </div>   


                    <div class="form-group">
                        <label class="control-label col-xs-3">Facebook del evento:</label>
                        <div class="col-xs-6">

                            <input type="text" class="form-control" name="evento[facebook]">    
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3">Inicio del evento:</label>
                        <div class="col-xs-6">
                            <input type="text" name="evento[fecha_inicio_publicacion]" class="date readonly form-control" placeholder="YYYY/MM/DD" /><br /><br />
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3">Final del evento:</label>
                        <div class="col-xs-6">
                            <input type="text" name="evento[fecha_fin_publicacion]" class="date readonly form-control" placeholder="YYYY/MM/DD" /><br /><br />
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
 <?php  $Loading = 'Loading...' ?>
<?php include_once ('/../../Templates/Backend/foot.php') ?>
<?php include_once ('/../../Templates/Backend/footer.php') ?>