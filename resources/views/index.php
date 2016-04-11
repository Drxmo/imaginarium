
<?php if (isset($welcome) == true): ?>
<?php include_once ('/Templates/Frontend/head.php') ?>
<?php include_once ('/Templates/Frontend/header.php') ?>





<style>
    
    .smallX{
    display: inline-block;
    font-size: 24px;
    line-height: 48px;
    height: 48px; 
    font-weight: bolder;
    margin-bottom: auto;
    /*        width: 100%;*/
    background: transparent;
    text-align: left;
    padding-left: 20px;
    -webkit-transition: all 0.9s ease;
    transition: all 0.9s ease;
    transition-delay:all 0.9s ease ;

    z-index: 9999;
    right: 0px;
    left: 0px;
    }
</style>

<script>
//    Reemplazar '.contInicioX' 
//    por '.sitiosX' si es para Sitios
//    por '.eventosX' si es para Eventos

  $(document).ready(function () {
    console.log("document loaded");
    $('.contInicioX').addClass('active');
    $('.columnaX').addClass('col-xs-12 col-sm-4 col-md-4 col-lg-4');
    $('parrafoX').addClass('limit');

  });

  $(window).load(function () {
    console.log("window loaded");
    $('.contInicioX').addClass('active');
    $('.columnaX').addClass('col-xs-12 col-sm-4 col-md-4 col-lg-4');
    $('.parrafoX').addClass('limit');
  });

//-------------Div parallas height adaptable


  var biggestHeight = "0";
// Loop through elements children to find & set the biggest height
  $(".slideX2 *").each(function () {
    // If this elements height is bigger than the biggestHeight
    if ($(this).height() > biggestHeight) {
      // Set the biggestHeight to this Height
      biggestHeight = $(this).height();
    }
  });

// Set the container height
  $(".slideX2").height(biggestHeight);

  var biggestHeight = "0";
// Loop through elements children to find & set the biggest height
  $(".parallax1 *").each(function () {
    // If this elements height is bigger than the biggestHeight
    if ($(this).height() > biggestHeight) {
      // Set the biggestHeight to this Height
      biggestHeight = $(this).height();
    }
  });

// Set the container height
  $(".parallax1").height(biggestHeight);

//$(document).ready(function() {
//    $(.parallax1).css("height", $(child).attr("offsetHeight"));
//}

//----
//$.fn.equalHeight = function() {
//    var maxHeight = 0;
//    return this.each(function(index, box) {
//        var boxHeight = $(box).height();
//        maxHeight = Math.max(maxHeight, boxHeight);
//    }).height(maxHeight);
//};
//
//$(document).ready(function() {
//    $('.slidesjs-control .parallax1').equalHeight();
//});
//----
//$(window).resize(function() {
//
//$('.parallax1').css('height', window.innerHeight);
//
//});
</script>
<script>
//  ----------------Efecto scroll speed

  if (window.addEventListener)
    window.addEventListener('DOMMouseScroll', wheel, false);
  window.onmousewheel = document.onmousewheel = wheel;

  function wheel(event) {
    var delta = 0;
    if ($(this).scrollTop() > 220) {
      if (event.wheelDelta)
        delta = event.wheelDelta / 120;
      else if (event.detail)
        delta = -event.detail / 20;

    } else if ($(this).scrollTop() > 50) {
      if (event.wheelDelta)
        delta = event.wheelDelta / 220;
      else if (event.detail)
        delta = -event.detail / 20;

    }
    else if ($(this).scrollTop() > 49) {

      if (event.wheelDelta)
        delta = event.wheelDelta / 920;
      else if (event.detail)
        delta = -event.detail / 90;
    }
    else if ($(this).scrollTop() > 48) {

      if (event.wheelDelta)
        delta = event.wheelDelta / 820;
      else if (event.detail)
        delta = -event.detail / 80;
    } else {

      if (event.wheelDelta)
        delta = event.wheelDelta / 320;
      else if (event.detail)
        delta = -event.detail / 10;
    }
    handle(delta);
    if (event.preventDefault)
      event.preventDefault();
    event.returnValue = false;
  }

  function handle(delta) {
    var time = 200;
    var distance = 50;

    $('html, body').stop().animate({
      scrollTop: $(window).scrollTop() - (distance * delta)
    }, time);
  }


//Numero de caracteres en el thumb

  $(function () {
    $(".parrafoX").each(function (i) {
      len = $(this).text().length;
      if (len > 10)
      {
        $(this).text($(this).text().substr(0, 530) + '...');
      }
    });
  });

  $(function () {
    $(".titulo-eventoX").each(function (i) {
      len = $(this).text().length;
      if (len > 100)
      {
        $(this).text($(this).text().substr(0, 700) + '...');
      }
    });
  });



//$(document).ready(function() {
//  document.getElementsByTagName("html")[0].style.visibility = "visible";
//});
//RADIO DE BUGA
//RADIO DE BUGA





</script>

<!--<div id="headerR">
  <h1 style="padding:0;margin:0;">&lt; aboutcher /&gt;;</h1>
  Parallax Demo
</div>-->
<div style="clear:both;"></div>
<div class="txt1 " >
<div class="posrelative" style="left:100px;" >
<div class="tleft1" " >

      <div class="txt  left ">
          
        1Auris feugiat diam sapien
      </div>
      <div style="clear:both;"></div>
      <div class="txt left sub">
        &middot; Integer at mi laoreet dolor rhoncus porttitor.<br/>
         <!--<audio src="http://live.rcnmundo.com/fiestabuga.mp3" controls="controls" > </audio>-->
<!--        &middot; Lorem ut sapien.-->
<!--<div>
		<audio id="audio" src="http://live.rcnmundo.com/fiestabuga.mp3" preload="auto"  ></audio>
		<button id="play">Play</button>
		<button id="stop">Stop</button>
	</div>-->
<div style="margin-left:10px"><audio id="audio" width="300" height="32" src="http://live.rcnmundo.com/fiestabuga.mp3"></audio>
<button class="btn btn-primary btn-sm btn-round collapsed" id="play">Play</button>
<button class="btn btn-primary btn-sm btn-round collapsed" id="pause">Pause
</button>


<audio id="stream" preload="none" style="width: 200px;">
<source src="http://192.99.150.52:9676/;" type="audio/mpeg">
</audio>
    <button class="btn btn-primary btn-sm btn-round collapsed" id="play2">Play</button>
<button class="btn btn-primary btn-sm btn-round collapsed" id="pause2">Pause
</button></div>
<script>
    
var audio = document.getElementById('stream');
audio.volume = 0.5;

//play when play is clicked
$('#play2').click(function(){
audio.play()
})

//pause when pause clicked
$('#pause2').click(function(){
audio.pause()
})
</script>
<script>
//Define the player 
var player = document.getElementById('audio');
//play when play is clicked
$('#play').click(function(){
player.play()
})

//pause when pause clicked
$('#pause').click(function(){
player.pause()
})
</script>
      </div>
    </div>
    </div>
    </div>
<div class="parallax1 " >

  <!--      <div class="txt right">
          Haymarket<br/>
          Metro<br/>
          Station
        </div>-->
  <!--     <div class="back backX">-->
  <div style="clear:both;"></div>
  
  <div class="parallax  " >
    

  </div>
  
  <div style="clear:both;"></div>
  <ul onclick="return false" onclick class="slides slideX2 stickySlide" id="trans1">



    <li><img  src="<?php echo asset('img/i4.JPG') ?>" alt="Imagen"></li>
    
    <li><img  src="<?php echo asset("media/img/sitios/puentelibertad.jpg") ?>" alt="Imagen"></li>
    <li><img  src="<?php echo asset("media/img/sitios/EstacionTren.jpg") ?>" alt="Imagen"></li>
    <li><img style=""  src="<?php echo asset('img/i5.JPG') ?>" alt="Imagen"></li>

    <li><img  src="<?php echo asset('img/d1.JPG') ?>" alt="Imagen"></li>

    <li ><img  src="<?php echo asset('img/i1.jpg') ?>"  alt="Imagen"></li>

  </ul>



  <!--                </div>-->
  <!--    <section class="container-fluid container-fluidX main">
  
      <div class="row">
          <div class="">
              <section class="absoluteX">  
              <a>                               
                  <div class="back backX">
                      <section class="slideuno slideX1">
                          <div class="slides slideX2">
                              <img class="slidejs" src="img/im1.jpg"  alt="Imagen">
                              <img src="<>img/im2.jpg" alt="Imagen">
                              <img src="img/im3.JPG" alt="Imagen">
                          </div>
                      </section>
                  </div>
              </a>
  
          </div>
      </div>
      <div class="spaceSlideBott"></div>
  </section>-->
  <div style="clear:both;"></div>
</div>

<!--<div class="parallax" id="trans1">
    
  <div class="txt right">
    Haymarket<br/>
    Metro<br/>
    Station
  </div>
  <div style="clear:both;"></div>
  <div class="txt right sub">
    Sexy New Station with some tiltshift filters!
  </div>
</div>-->

<div class="contentX2 contentX2x">
  <div class="divBar"><img  class="bar1" src="<?php echo asset('img/bar1s.png') ?>"/></div>
  <div >
    <a  href="#"><img class="contentImg" src="<?php echo $logo ?>" alt="Buga Logo"/></a>
  </div>
  <h2><?php echo $welcome->wel_title ?></h2>
  
  <p><?php echo $welcome->wel_content ?><br></p>
  <div style="clear:both;"></div>
</div>
<div style="clear:both;"></div>
<div class="parallax" id="trans2">
  <div class="txt2" >
  <div class="posrelative" style="left:1000px;" >

    <div class="txt leftB">
      EcoRutas.
    </div>
    <div style="clear:both;"></div>
    <div class="txt leftB sub">
      Al ritmo de tu cuerpo!
      <br/>Deportes extremos&hellip;
    </div>
  </div>
  </div>
    <div class="txt2 txt3" >
        <div class="tleft">
    <div class="txt leftB">
      Los mejores lugares.
    </div>
    <div style="clear:both;"></div>
    <div class="txt leftB sub">
      Vive al maximo la experiencia Buga!
      <br/>Deportes extremos&hellip;
    </div>
  </div>
  </div>
</div>
<div style="clear:both;"></div>

<div class="contentX2 ">
     <div class=" right">
  <a href=""><img class="contentImg2" src="<?php echo $logo ?>" alt="Buga Logo"/></a>
 
  <h2><?php echo $welcome->wel_title2 ?></h2>
</div>

  <p><?php echo $welcome->wel_content2 ?></p>
  <div style="clear:both;"></div>
  <section class="col-md-12">
    <section class="container-fluid">
        
        
        <?php
                        $count = 0;
                        foreach ($sitios as $sitio):
                            if ($count++ == 3)
                                break;
                            ?>
      <div class="columnaX">
        <article class="articuloX articulo ">    
           <div class="contenedor-imgX fxX">
<!--          <a>-->
<!--            <img class="imgarticle" src="<?php //echo asset('img/i800 b.jpg') ?>" alt="Imagen">-->
            <div class="imgback img-contenido" style=" lightcyan;  background-image: url('<?php echo asset("media/img/sitios/".$sitio->img_ruta) ?>');">
<!--          </a>-->
</div>
</div>
          <h2 class="titulo-eventoX titulo-evento">
            <?php echo ($sitio->sit_nombre) ?>
          </h2>
<div style="height: 10px; width: 100%;"></div>
<!--                    <p><span class="articulofecha"></span> por <span class="articulo-autor"><a href="#">Admin</a></span></p>-->

          <p class="parrafoX2 articulo-contenido parrafoX text-justify">
            <?php echo ((strlen($sitio->sit_descripcion) > 100) ? substr(($sitio->sit_descripcion), 0, 350) . " ..." : ($sitio->sit_descripcion)) ?>
          </p>
          <div class="contenedor-botones">
            <!--                        <a href="#" class="btn btn-primary">Ver Mas</a>-->
            <a href="<?php echo url("sitios/sitios/versitio/" . $sitio->sit_id) ?>" class="vermas">Ver Mas</a>
          </div>
          
          
        </article>      
      </div> 
        <?php endforeach; ?>
        
        
        
        
        
<!--      <div class="columnaX">
        <article class="articuloX articulo">  
          <a>
            <img class="imgarticle" src="<?php echo asset('img/i800 b.jpg') ?>" alt="Imagen">
          </a>
          <h2 class="titulo-eventoX titulo-evento">
            <a href="#">El Mirador</a>
          </h2>

<p><span class="articulofecha"></span> por <span class="articulo-autor"><a href="#">Admin</a></span></p>

          <p class="parrafoX2 articulo-contenido parrafoX text-justify">
            nteger dictum tortor et quam
            porttitor rhoncus. Integer at mi laoreet dolor rhoncus porttitor.
            Etiam laoreet, tellus non maximus tempor. Etiam eu eros justo. Mauris semper rutrum felis, ac aliquam 
            nibh dictum eu. Nam fermentum id tellus tempus tincidunt. 
            Nulla dictum, ligula vitae feugiat rutrum, urna mauris lobortis
            neque, vitae accumsan erat erat ut nibh. Donec faucibus porta 
            lectus non imperdiet.<br> Mauris feugiat diam sapien, consequat 
            molestie odio placerat eu. Vestibulum id magna nibh. Morbi
            suscipit vestibulum malesuada. I ipsum tellus condimentum 
            est, sit amet auctor sapien lorem ut sapien. Cras nibh felis, 
            congue at pellentesque quis, suscipit eget est.
          </p>
          <div class="contenedor-botones">
            <a href="#" class="vermas">Ver Mas</a>
          </div>
        </article>
      </div>

      <div class="columnaX">
                            <div class="">
        <article class="articuloX articulo">    
          <a>
            <img class="imgarticle" src="<?php echo asset('img/i800 b.jpg') ?>" alt="Imagen">
          </a>
          <h2 class="titulo-eventoX titulo-evento">
            <a href="#">Ruta Religiosa</a>
          </h2>

<p><span class="articulofecha"></span> por <span class="articulo-autor"><a href="#">Admin</a></span></p>

          <p class="parrafoX2 articulo-contenido parrafoX text-justify">
            Etiam eu eros justo. Mauris semper rutrum felis, ac aliquam 
            nibh dictum eu. Nam fermentum id tellus tempus tincidunt. 
            Nulla dictum, ligula vitae feugiat rutrum, urna mauris lobortis
            neque, vitae accumsan erat erat ut nibh. Donec faucibus porta 
            lectus non imperdiet.<br> Mauris feugiat diam sapien, consequat 
            molestie odio placerat eu. Vestibulum id magna nibh. Morbi
            suscipit vestibulum malesuada. Integer dictum tortor et quam
            porttitor rhoncus. Integer at mi laoreet dolor rhoncus porttitor.
            Etiam laoreet, tellus non maximus tempor, ipsum tellus condimentum 
            est, sit amet auctor sapien lorem ut sapien. Cras nibh felis, 
            congue at pellentesque quis, suscipit eget est.
          </p>
          <div class="contenedor-botones">
            <a href="#" class="vermas">Ver Mas</a>
          </div></article>  
                            </div>
      </div> -->
        
        
    </section>
  </section>
  <div style="clear:both;"></div>
</div>
<div class="parallax" id="trans3">
  <div class="txt left">
    auris feugiat diam sapien
  </div>
  <div style="clear:both;"></div>
  <div class="txt left sub">
    &middot; Integer at mi laoreet dolor rhoncus porttitor.<br/>
    &middot; Lorem ut sapien.
  </div>
</div>
 <?php  $loading = 'BugaTravels';
        $loading2 = '...LOADING...'; ?>

<?php include_once ('/Templates/Frontend/footer.php') ?>
<?php include_once ('/Templates/Frontend/foot.php') ?>

<?php else : 
//    function ninfu(){
    $index= url("index");
    header("Location: $index");
            exit();
//    return url("index");
//        }
//    ninfu();
    endif;
    ?>