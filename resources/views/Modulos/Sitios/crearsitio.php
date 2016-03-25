<?php include_once ('/../../Templates/Backend/head.php') ?>
<?php include_once ('/../../Templates/Backend/header.php') ?>
<style>
    .dropdown-menu>li
    {	position:relative;
      -webkit-user-select: none; /* Chrome/Safari */        
      -moz-user-select: none; /* Firefox */
      -ms-user-select: none; /* IE10+ */
      /* Rules below not implemented in browsers yet */
      -o-user-select: none;
      user-select: none;
      cursor:pointer;
    }
    .dropdown-menu .sub-menu {
        left: 100%;
        position: absolute;
        top: 0;
        display:none;
        margin-top: -1px;
        border-top-left-radius:0;
        border-bottom-left-radius:0;
        border-left-color:#fff;
        box-shadow:none;
    }
    .right-caret:after,.left-caret:after
    {	content:"";
      border-bottom: 5px solid transparent;
      border-top: 5px solid transparent;
      display: inline-block;
      height: 0;
      vertical-align: middle;
      width: 0;
      margin-left:5px;
    }
    .right-caret:after
    {	border-left: 5px solid #ffaf46;
    }
    .left-caret:after
    {	border-right: 5px solid #ffaf46;
    }
</style>
<script>

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
        $(" #catId").val( cats );
        $(" #subcatId").val( subcats );
        $(" #sub_subcatId").val( sub_subcats );
        
                //alert(cats + "  " + subcats + "  " + sub_subcats);
    }
    ;

</script>

<section class="main container regcontainer">
    <div class="row">
        <div class="jumbotron boxuser boxuserX">
            <form class="form-horizontal" action="<?php echo url("/sitios/sitios/indexxx") ?>" method="post">
                <div class="form-group">





                    <div class="form-group">
                        <div class="dropdown" style="position:relative">
                            <a href="#" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">Seleccione Categoria <span class="caret"></span></a>

                            <ul class="dropdown-menu">
                                <?php
                                $cat = 1;
                                $subcat0 = 0;
                                $subcat = 1;
                                $sub_subcat = 1;
                                foreach ($categorias as $categoria) {
                                    ?>
                                    <li>
                                        <a href="#<?php $sitcatId = $cat;
                                    $sitsubcatId = 0;
                                    $sitsubsubcatId = 0; ?>"  onclick="myFunction(<?php echo $cat ?>,<?php echo 0 ?>, <?php echo 0 ?>)" class="trigger right-caret">&nbsp<?php echo $categoria->cat_nombre?><?php //echo 'cat: ' . $cat . ' , subcat: ' . $subcat0 ?>&nbsp</a>
                                       
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
                                                    <a class="trigger right-caret" onclick="myFunction(<?php echo $cat ?>,<?php echo $subcat ?>, <?php echo 0 ?>)">&nbsp<?php echo $subcategoria->subcat_nombre?><?php // . ' , cat: ' . $cat . ' , subcat: ' . $subcat ?>&nbsp</a>

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
                                                                <a class="trigger right-caret" onclick="myFunction(<?php echo $cat ?>,<?php echo $subcat ?>, <?php echo $sub_subcategoria->sub_subcat_id ?>)">&nbsp<?php echo $sub_subcategoria->sub_subcat_nombre?><?php // . ' , cat: ' . $cat . ' , subcat: ' . $subcat . ' , sub_subcat: ' . $sub_subcategoria->sub_subcat_id ?>&nbsp </a>

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
                    </div>

                    <input type="hidden"  id="catId" value="" name="sitio[cat_id]">
                    <input type="hidden"  id="subcatId" value="" name="sitio[subcat_id]">
                    <input type="hidden"  id="sub_subcatId" value="" name="sitio[sub_subcat_id]">

                    <div class="form-group">
                        <label class="control-label col-xs-3">Categoria:</label>
                        <div class="col-xs-2">

                            <label class="radio-inline">
                                <select name="sitio[rol]">
<?php
foreach ($categorias as $categoria) {
    ?>
                                        <option value="<?php echo $categoria->cat_id ?>">&nbsp<?php echo $categoria->cat_nombre ?>&nbsp</option>

<?php } ?>

                                </select>
                            </label>
                        </div>
                    </div>
                    <br>
                    <br>


                    <div class="form-group">
                        <label class="control-label col-xs-3">Nombre Sitio:</label>
                        <div class="col-xs-9">
                            <input type="text" class="form-control" id="nombre" name="sitio[nombre]">
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
                                            <label class="control-label col-xs-3">Estado de Sitio</label>
                                            <div class="col-xs-6">
                                                <input type="text" required lass="form-control" id="direccionSitio" name="sitio[estadoId]">
                                            </div>
                                        </div>-->
                    <div class="form-group">
                        <label class="control-label col-xs-3">usuario de Sitio</label>
                        <div class="col-xs-6">
                            <input type="text" class="form-control" id="usuSitio" name="sitio[usu_id]">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-xs-3">Direccion de Sitio</label>
                        <div class="col-xs-6">
                            <input type="text" class="form-control" id="direccionSitio" name="sitio[direccion]">
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
                            <input type="text" class="form-control" id="latitudSitio" name="sitio[latitud]">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-xs-3">Longitud Sitio</label>
                        <div class="col-xs-6">
                            <input type="text" class="form-control" id="longitudSitio" name="sitio[longitud]">
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


                            <input type="file" id="imgSitio" name="sitio[img]">    
                        </div>

                    </div>

                    <br>
                    <div class="form-group">
                        <div class="col-xs-offset-3 col-xs-9">
                            <input type="submit" class="btn btn-default" value="Registrar">
                            <a href="" class="btn btn-default btn-cancel" value="Guardar">Cancelar</a>
                        </div>
                    </div>

                </div>
            </form>
        </div>
</section>


<?php include_once ('/../../Templates/Backend/foot.php') ?>