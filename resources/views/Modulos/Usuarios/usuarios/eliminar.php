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
        <p><a href="<?php echo url("usuarios/usuarios/suspender/" . session::get('user')) ?>">Eliminar cuenta</a></p>
        <a href="<?php echo (url("index")); ?>" class="icon-aircraft-landing">Retroceder</a>
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
    <!--</form>-->  
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










</script>



<?php include("/../../../Templates/Backend/footer.php") ?>
<?php include("/../../../Templates/Backend/foot.php") ?>



