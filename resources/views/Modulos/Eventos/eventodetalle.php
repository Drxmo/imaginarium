<?php include_once ('/../../Templates/Frontend/header.php') ?>
<?php include_once ('/../../Templates/Frontend/head.php') ?>

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
          ;
</script>
<!--
<div>
  <img class="imgarticleX" id="imgpeque" src="<?php echo asset('img/buguita2.jpg') ?>" alt="Imagen"/>
</div>-->

<div class="contenedor-imgX fxX"> 
    <div class="imgback img-contenido" style=" lightcyan;  background-image: url('<?php echo asset('img/buguita4.jpg') ?>');">
    </div>
</div>

<section class="container container-fluid main">
  <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
      <hr class="lineaCDAP">

      <!--EVENTO DETALLE-->

      <div class="innerCDAP">
        <article class="descriptionCDAP">
          <div class="content descriptionCDAP">
            <article class="descriptionCDAP">
            <h1 id="tituCDAP">GUADALAJARA DE BUGA TE INVITA A DISFRUTAR</h1>
            </article>
            <img src="<?php echo asset('img/buguita.jpg') ?>"/>
            <hr class="lineaCDAP">
            <p class="texCDAP">El problema aparece cuando intentamos buscar 
              en nuestro pasado y no somos capaces de encontrar nada o nos 
              disgusta lo que encontramos. En cualquier caso, siempre hay algo 
              que valga la pena. De todos modos, los recuerdos no aparecen solos, 
              sino que se hacen. Y construir un recuerdo muchas veces parte de 
              nosotros mismos; una experiencia, donde los protagonistas somos 
              nosotros, se puede crear. Quiero decir con esto que estar sentados 
              en el sofá todo el día, sin relacionarnos con nadie, no nos ayudará 
              a construir recuerdos. Será el relacionarnos con otras personas 
              o el hacer actividades lo que pueda convertirse en recuerdo.</p>
          </div>
        </article>



        <h1 id="tituCDAP">Comentarios</h1>

        <!-- Contenedor Principal -->
        <div class="comments-container">
          <ul id="comments-list" class="comments-list">
            <li>
              <div class="comment-main-level">
                <!-- Avatar -->
                <div class="comment-avatar"><img src="#" alt=""></div>
                <!-- Contenedor del Comentario -->
                <div class="comment-box">
                  <div class="comment-head">
                    <h6 class="comment-name by-author"><a href="#">Jerk off</a></h6>
                    <span>hace 20 minutos</span>
                    <i class="fa fa-reply"></i>
                    <i class="fa fa-heart"></i>
                  </div>
                  <div class="comment-content">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit omnis animi et iure laudantium vitae, praesentium optio, sapiente distinctio illo?
                  </div>
                </div>
              </div>

              <!-- Respuestas de los comentarios -->
              <ul class="comments-list reply-list">
                <li>
                  <!-- Avatar -->
                  <div class="comment-avatar"><img src="#" alt=""></div>
                  <!-- Contenedor del Comentario -->
                  <div class="comment-box">
                    <div class="comment-head">
                      <h6 class="comment-name"><a href="#">Cristina Carvajala</a></h6>
                      <span>hace 10 minutos</span>
                      <i class="fa fa-reply"></i>
                      <i class="fa fa-heart"></i>
                    </div>
                    <div class="comment-content">
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit omnis animi et iure laudantium vitae, praesentium optio, sapiente distinctio illo?
                    </div>
                  </div>
                </li>
              </ul>
            </li>

            <li>
              <div class="comment-main-level">
                <!-- Avatar -->
                <div class="comment-avatar"><img src="#" alt=""></div>
                <!-- Contenedor del Comentario -->
                <div class="comment-box">
                  <div class="comment-head">
                    <h6 class="comment-name"><a href="#">Alzadita</a></h6>
                    <span>hace 10 minutos</span>
                    <i class="fa fa-reply"></i>
                    <i class="fa fa-heart"></i>
                  </div>
                  <div class="comment-content">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit omnis animi et iure laudantium vitae, praesentium optio, sapiente distinctio illo?
                  </div>
                </div>
              </div>
            </li>
          </ul>
        </div>
        <hr class="lineaCDAP">

      </div>
      <div style="clear:both;"></div>
      <!--EVENTO DETALLE TERMINADO-->
    </div>
  </div>
</section>

 <?php  $Loading = 'Cargando Evento...' ?>
<?php include_once ('/../../Templates/Frontend/footer.php') ?>
<?php include_once ('/../../Templates/Frontend/foot.php') ?>