<?php include_once ('/../../Templates/Frontend/head.php') ?>
<?php include_once ('/../../Templates/Frontend/header.php') ?>

<!--Activar Boton navbar-->
<script>
//    Reemplazar '.contInicioX' 
//    por '.sitiosX' si es para Sitios
//    por '.eventosX' si es para Eventos
    $(document).ready(function () {
        console.log("document loaded");
        $('.categoriasX').addClass('active');
        $('.columnaX').addClass('col-xs-12 col-sm-4 col-md-4 col-lg-4');
        $('parrafoX').addClass('limit');

    });

    $(window).load(function () {
        console.log("window loaded");
        $('.categoriasX').addClass('active');
        $('.columnaX').addClass('col-xs-12 col-sm-4 col-md-4 col-lg-4');
        $('.parrafoX').addClass('limit');
    });

</script>


<div>
     <img class="imgarticleX" src="<?php echo asset('img/c9.jpg') ?>" alt="Imagen">
</div>
 <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <section class="sitio-contenido">
                <main class="container" role="main">
                    <article class="">                        
                        <header class="sitio-head">
                            <h3><span>Categorias!!</span></h3>
                        </header>
	
	
<div id="wowslider-container1">
<div class="ws_images"><ul>
		<li><img src="<?php echo asset('img/c6.jpg') ?>" alt="Guadalajara de buga" title="Guadalajara de buga" id="wows1_0"/></li>
		<li><img src="<?php echo asset('img/c1.jpg') ?>" alt="Veni y parchate!!" title="Veni y parchate!!" id="wows1_1"/></li>
		<li><img src="<?php echo asset('img/c10.jpg') ?>" alt="Culturizate!!" title="Culturizate!!" id="wows1_2"/></li>
		<li><img src="<?php echo asset('img/c9.jpg') ?>" alt="Cree!!" title="Cree!!" id="wows1_3"/></li>
		<li><a href="#"><img src="<?php echo asset('img/c5.jpg') ?>" alt="" title="Diviertete!!" id="wows1_4"/></a></li>
		<li><img src="<?php echo asset('img/c4.jpg') ?>" alt="Vuelvete a conectar con la Naturaleza" title="Vuelvete a conectar con la Naturaleza" id="wows1_5"/></li>
	</ul></div>
	<div class="ws_bullets"><div>
		<a href="#" title="Guadalajara de buga"><span><img src="<?php echo asset('tooltips/c6.jpg') ?>" alt="Guadalajara de buga"/>1</span></a>
		<a href="#" title="Veni y parchate!!"><span><img src="<?php echo asset('tooltips/c1.jpg') ?>" alt="Veni y parchate!!"/>2</span></a>
		<a href="#" title="Culturizate!!"><span><img src="<?php echo asset('tooltips/c10.jpg') ?> alt="Culturizate!!"/>3</span></a>
		<a href="#" title="Cree!!"><span><img src="<?php echo asset('tooltips/c9.jpg') ?>" alt="Cree!!"/>4</span></a>
		<a href="#" title="Diviertete!!"><span><img src="<?php echo asset('tooltips/c5.jpg') ?>" alt="Diviertete!!"/>5</span></a>
		<a href="#" title="Vuelvete a conectar con la Naturaleza"><span><img src="<?php echo asset('tooltips/c4.jpg') ?>" alt="Vuelvete a conectar con la Naturaleza"/>6</span></a>
	</div></div><div class="ws_script" style="position:absolute;left:-99%"><a href="http://wowslider.com">wow slider</a> </div>
<div class="ws_shadow"></div>
</div>	
<script type="text/javascript" src="<?php echo asset('js/wowslider.js') ?>"></script>
<script type="text/javascript" src="<?php echo asset('js/script.js') ?>"></script>
<script type="text/javascript" src="<?php echo asset('js/jquery.js') ?>js/jquery.js"></script>

 <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <section class="sitio-contenido">
                <main class="container" role="main">
                    <article class="">                        
                        <header class="sitio-head">
                            <h3><span>Categorias Mas destacadas</span></h3>
                        </header>


           
                        <figure id="img">
                            <div id="img">  
                                
                                <div id="info">
                                    <a href="<?php echo url("#") ?>"><p id="headline">Restaurantes</p></a>
                                    <p id="info2">Comidas tipicas y de tooda nuestra region</p>
                                </div>
                            </div>
                        </figure>   
                        <figure id="img1">
                            <div id="img1">  
                                
                                <div id="info3">
                                    <a href="todasCategorias.php"><p id="headline1">Park Gym</p></a>
                                    <p id="info4">Ven y moldea tu cuerpo en muchos parques de nuestra ciudad</p>
                                </div>
                            </div>
                        </figure>
                        <figure id="img2">
                            <div id="img2">  
                                
                                <div id="info5">
                                    <p id="headline2">Iglesias</p>
                                    <p id="info6">De las mejores basilicas del mundo</p>
                                </div>
                            </div>
                        </figure>
                        <a href="<?php echo url("/categorias/categoriadetalle") ?>">  <button  type="button" class="btn btn-info">Todas las categorias</button></a>

                        
<?php include_once ('/../../Templates/Frontend/footer.php') ?>
<?php include_once ('/../../Templates/Frontend/foot.php') ?>

