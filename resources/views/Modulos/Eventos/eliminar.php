<?php include("/../../../Templates/Backend/head.php") ?>
<?php include("/../../../Templates/Backend/header.php") ?>

<?php /*
  function nombre($id) {
  $nombre = DB::select("SELECT sit_nombre FROM bdp_sitio WHERE sit_id = ?", array($id));
  $new_arr[] = null;
  foreach($nombre as $nombr)
  {
  $new_arr[] = $nombr->sit_nombre;
  }
  $res_arr = implode($new_arr);
  print_r($res_arr);
  }

  function descripcion($id) {
  $descripcio = DB::select("SELECT sit_descripcion FROM bdp_sitio WHERE sit_id = ?", array($id));
  $new_arr[] = null;
  foreach($descripcio as $descripcion)
  {
  $new_arr[] = $descripcion->sit_descripcion;
  }
  $res_arr = implode($new_arr);
  print_r($res_arr);
  }

 */ ?>



<div class="container container-fluid loginX" style="padding-left: 315px !important;
     padding-right: 315px;">
    <!--<form class="form-signin" id="formvalidate" novalidate method="post" action="<?php echo url("/usuarios/usuarios/login") ?>">-->
        <h2 class="form-signin-heading lightcyan">¿Está Seguro que desea eliminar la cuenta?</h2>
<!--        <input type="text" autocomplete="off" autofocus placeholder="Usuario" class="form-control" name="seguridad[user]">
        <input type="password" placeholder="Contraseña" class="form-control"  name="seguridad[pass]">
        <button type="submit" class="btn btn-lg btn-primary btn-block">Identificarse</button>-->
        
        <?php if (Session::has('super') === true) : ?>
        
        <p><a href="<?php echo url("/usuarios/usuarios/borrar/" . $id) ?>">Eliminar cuenta as SuperUser</a></p>
        
        <a href="<?php echo (url("/usuarios/usuarios/index")); ?>" class="icon-aircraft-landing">Retroceder</a>
        
        <?php else : ?>
        <p><a href="<?php echo url("/usuarios/usuarios/suspender/" . session::get('user')) ?>">Eliminar cuenta</a></p>
        
        <a href="<?php echo url("/seguridad/panelcontrol")?>" class="icon-aircraft-landing">Retroceder</a>
        <?php endif; ?>
       <?php /* if (Session::has('usuarioInvalido') === true): ?>
            <br>
            <div class="alert alert-danger" role="alert"><?php echo Session::get('usuarioInvalido'); ?></div>
            <?php Session::forget('usuarioInvalido'); ?>
        <?php endif; ?>
        <?php if (Session::has('registroSuccess') === true): ?>
            <br>
            <div class="alert alert-success" role="alert"><?php echo Session::get('registroSuccess'); ?></div>
            <?php Session::forget('registroSuccess'); ?>
        <?php endif */ ?>
    <button id="callConfirm">Confirm!</button>

<div id="dialog" title="Confirmation Required">
  Are you sure about this?
</div>
    
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<script>





$(function() {

  $("#dialog").dialog({
     autoOpen: false,
     modal: true,
     buttons : {
          "Confirm" : function() {
              alert("You have confirmed!");            
          },
          "Cancel" : function() {
            $(this).dialog("close");
          }
        }
      });

  $("#callConfirm").on("click", function(e) {
      e.preventDefault();
      $("#dialog").dialog("open");
  });

});




</script>


 <?php  $Loading = 'Loading...' ?>
<?php include("/../../../Templates/Backend/footer.php") ?>
<?php include("/../../../Templates/Backend/foot.php") ?>



