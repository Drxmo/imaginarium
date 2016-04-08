<?php include_once ('/../../Templates/Frontend/head.php') ?>
<?php include_once ('/../../Templates/Frontend/header.php') ?>

<!--Activar Boton navbar-->
<script>
//    Reemplazar '.contInicioX' 
//    por '.sitiosX' si es para Sitios
//    por '.eventosX' si es para Eventos
    $(document).ready(function () {
        console.log("document loaded");
        $('.sitiosX').addClass('active');
        $('.columnaX').addClass('col-xs-12 col-sm-4 col-md-4 col-lg-4');
        $('parrafoX').addClass('limit');

    });

    $(window).load(function () {
        console.log("window loaded");
        $('.sitiosX').addClass('active');
        $('.columnaX').addClass('col-xs-12 col-sm-4 col-md-4 col-lg-4');
        $('.parrafoX').addClass('limit');
    });

    $(document).ready(function () {
    $(".mCustomScrollbar").mCustomScrollbar({axis: "x"})
            ;</script>

<!--CONTADOR DE VISITAS-->

<a href="http://www.contadorvisitasgratis.com" target="_Blank" title="contador de visitas para mi pagina web">contador de visitas para mi pagina web</a><br>
<script type="text/javascript" src="http://counter10.freecounter.ovh/private/countertab.js?c=c391a8bcbfac2c06d9720047502b2ff2"></script>
<a href="http://www.contadorvisitasgratis.com" title="contador de visitas para mi pagina web"><img src="http://counter10.freecounter.ovh/private/contadorvisitasgratis.php?c=c391a8bcbfac2c06d9720047502b2ff2" border="0" title="contador de visitas para mi pagina web" alt="contador de visitas para mi pagina web"></a>

<!--CONTADOR DE VISITAS-->

<!--
<div>
  <img class="imgarticleX" id="tamaÃ±oCDAP" src="<?php echo asset('img/buguita4.jpg') ?>" alt="Imagen">
</div>-->



<div class="contenedor-imgX fxX"> 
    <div class="imgback img-contenido" style=" lightcyan;  background-image: url('<?php echo asset('img/buguita4.jpg') ?>');">
    </div>
</div>

<section class="container container-fluid main">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <hr class="lineaCDAP">

            <!--CARRUSEL MEJORADO-->

            <article class="descriptionCDAP">
                <h1 id="tituCDAP">EVENTOS</h1>
            </article>


            <div id="wowslider-containerCDAP">
                <div class="ws_imagesCDAP"><ul>
                        <li><img src="<?php echo asset('img/buguita.jpg') ?>" alt="buguita" title="Fe" id="wows2_0"/></li>
                        <li><img src="<?php echo asset('img/buguita2.jpg') ?>" alt="buguita2" title="Cielo" id="wows2_1"/></li>
                        <li><img src="<?php echo asset('img/buguita3.jpg') ?>" alt="buguita3" title="Buga" id="wows2_2"/></a></li>
                        <li><img src="<?php echo asset('img/buguita4.jpg') ?>" alt="buguita4" title="Arte" id="wows2_3"/></li>
                    </ul></div>
                <div class="ws_bulletsCDAP"><div>
                    </div></div><div class="ws_script" style="position:absolute;left:-99%"></div>
                <div class="ws_shadow"></div>
            </div>	
            <script type="text/javascript" src="<?php echo asset('js/wowsliderCDAP.js') ?>"></script>
            <script type="text/javascript" src="<?php echo asset('js/scriptCDAP.js') ?>"></script>
            <script type="text/javascript" src="<?php echo asset('js/jqueryCDAP.js') ?>"></script>
            <section class="wrapper style">
                <div class="innerCDAP">
                    <article class="descriptionCDAP">
                        <div class="content descriptionCDAP">
                            <h1 id="tituCDAP"><?php echo $welcome->wel_title ?></h1>
                            <p class="texCDAP"><?php echo $welcome->wel_content ?>
                            </p>
                            <ul>
                                <li class="litransCDAP">
                                </li>
                            </ul>
                        </div>
                    </article>
                </div>
            </section>

            <div>
                <hr class="lineaCDAP">

                <hr class="lineaCDAP">
            </div>


            <!--CARRUSEL TERMANIDO-->

            <!--IMÃ�GENES CON EFECTO HOVER-->

            <h1 id="tituCDAP">LOS EVENTOS DE LA CIUDAD</h1>

            <center><hr class="lineaCDAP"><div id="allCDAP">
                    <?php
                    $count = 0;
                    foreach ($eventos as $evento):
                        if ($count++ == 6)
                            break;
                        ?>
                        <div class="viewCDAP view-first">
                            <img src="<?php echo asset("media/img/eventos/" . $evento->img_ruta) ?>" />
                            <div class="maskCDAP">
                                <a href="<?php echo url("/eventos/eventos/eventodetalle/" . $evento->eve_id); ?>" ><h2><?php echo ($evento->eve_nombre) ?></h2></a>
                                <p><?php echo ((strlen($evento->eve_descripcion) > 100) ? substr(($evento->eve_descripcion), 0, 200) . " ..." : ($evento->eve_descripcion)) ?></p>
                                <a href="<?php echo url("eventos/eventos/eventodetalle/" . $evento->eve_id) ?>" class="infoCDAP">Ver</a>
                            </div>
                        </div>
<?php endforeach; ?>

                </div></center>

            <!--IMÃ�GENES CON EFECTO HOVER TERMINADO-->


            <!--EVENTO DETALLE-->



            <!--EVENTO DETALLE-->


        </div>
    </div>
</div>
</section>

 <?php  $Loading = 'Cargando Eventos...' ?>

<?php include_once ('/../../Templates/Frontend/foot.php') ?>
<?php include_once ('/../../Templates/Frontend/footer.php') ?>