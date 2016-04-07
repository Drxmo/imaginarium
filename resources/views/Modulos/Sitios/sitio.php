<?php include_once ('/../../Templates/Frontend/head.php') ?>
<?php include_once ('/../../Templates/Frontend/header.php') ?>

<!--Activar Boton navbar-->


<div>
<!--     <img class="imgarticleX" src="<?php //echo asset('img/i3.jpg') ?>" alt="Imagen">-->
     <img class="imgarticleX" src="<?php echo asset('img/Hguadalajara.jpg') ?>" alt="Imagen">
     
</div>

<section class="container container-fluid main">
    <div class="row">
<!--        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <section class="sitio-header">
                <main class="container" role="main">
                    <article class="articulo">                        
                        <div class="">
                            <img class="imgarticle" src="#" alt="Imagen">
                        </div>
                </main>
            </section>
        </div>-->
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <section class="sitio-contenido">
                <main class="container" role="main">
                    <article class="">                        
                        <header class="sitio-head">
                            <h3><span>Sitios</span></h3>
                        </header>
                        <hr class="lineaCDAP">
                    </article>
                </main>
                
                
                
 
<section class="container container-fluid main">
    <div class="row">
        
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <section class="sitio-contenido">
               
<!--                <div class="container">
                    <div class="row contenido">-->
                        
                        </section>
        </div>
    </div>
</section>
                <div class="container-fluid">
                    <div class="row contenido">
                         <?php
                        $count = 0;
                        foreach ($sitios as $sitio):
                            if ($count++ == 12)
                                break;
                            ?>
                        <figure class="col-xs-12 col-sm-6 col-md-4">
                            <div class="contenedor-imgX fxX">
                                <div class="imgback img-contenido" style=" background-image: url('<?php echo asset("media/img/sitios/".$sitio->img_ruta) ?>');">   
                                <div class="mascara">
                                    <h2><?php echo ($sitio->sit_nombre) ?></h2>
                                    <p><?php echo ((strlen($sitio->sit_descripcion) > 100) ? substr(($sitio->sit_descripcion), 0, 200) . " ..." : ($sitio->sit_descripcion)) ?></p>
                                    <a class="link" href="<?php echo url("sitios/sitios/versitio/" . $sitio->sit_id) ?>">Leer mas</a>
                                </div>
                            </div>
                        </figure>
                         <?php endforeach; ?>
                        
                        
                        
                    </div>
                </div>
            
            </section>
        </div>
    </div>
</section>
<center><a href="<?php echo url("/sitios/sitdetalles") ?>">Todos Los Sitios</a></center>

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

</script>

<?php include_once ('/../../Templates/Frontend/footer.php') ?>
<?php include_once ('/../../Templates/Frontend/foot.php') ?>
<div id="cover">Cargando Sitios...</div>