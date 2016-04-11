<?php include_once ('/../../Templates/Frontend/head.php') ?>
<?php include_once ('/../../Templates/Frontend/header.php') ?>

<!--Activar Boton navbar-->

<br>
<br>
<br>
<br>
<br>

<div>
     <img class="imgarticleX" src="<?php echo asset('img/c19.jpg') ?>" alt="Imagen">
</div>

                                   
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



            <section class="wrapper style">
             
                                          
                    
                            <h3><span>Todas Las Categorias</span></h3>
                      


                    
                    
                            <figure id="img">
                                <div id="img">  
                                <div id="info">
                                    <a href="<?php echo url("#") ?>"><p id="headline">Cultura y Tradiccion</p></a>
                                    <p id="info2">Comidas tipicas y toda nuestra cultura aqui!!</p>
                                </div>
                                </div>
                            </figure>
             
                    
                       
                    <figure id="img1">
                        <div id="img1">
                                <div id="info3">
                                  <p id="headline1">Deportes</p>
                                    <p id="info4">Encuentra muchos sitios en los cuales podras practicar tu deporte favorito</p>
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
                        
                            <figure  id="img3">
                            <div id="img3">   
                                <div id="info7">
                                    <p id="headline3">ecoTuristico</p>
                                    <p id="info8">Parques y Reservas Naturales de Nuestra Region</p>
                                </div>
                            </div>
                        </figure>
                    
                    <figure  id="img4">
                            <div id="img4">   
                                <div id="info9">
                                    <p id="headline4">Historico</p>
                                    <p id="info10">Una Gran historias te encontraras si te pones a investigar sobre nuestra ciudad</p>
                                </div>
                            </div>
                        </figure>
                    
                    <figure  id="img5">
                            <div id="img5">   
                                <div id="info11">
                                    <p id="headline5">Entretenimiento</p>
                                    <p id="info12">Deliciosas piscinas y agradables sitios para pasar una buena tarde en familia</p>
                                </div>
                            </div>
                        </figure>
                
               
           


            </section>

                        
                        
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
    
//     $(document).ready(function () {
//  $(".mCustomScrollbar").mCustomScrollbar({axis: "x"})

;</script>
                        
                        
<?php include_once ('/../../Templates/Frontend/footer.php') ?>
<?php include_once ('/../../Templates/Frontend/foot.php') ?>

