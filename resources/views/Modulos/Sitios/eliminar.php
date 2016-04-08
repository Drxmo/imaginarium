<?php include("/../../Templates/Backend/head.php") ?>
<?php include("/../../Templates/Backend/header.php") ?>

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
        <h2 class="form-signin-heading lightcyan">¿Está Seguro que desea eliminar el sitio?</h2>
<!--        <input type="text" autocomplete="off" autofocus placeholder="Usuario" class="form-control" name="seguridad[user]">
        <input type="password" placeholder="Contraseña" class="form-control"  name="seguridad[pass]">
        <button type="submit" class="btn btn-lg btn-primary btn-block">Identificarse</button>-->
        
        <?php if (Session::has('super') === true) : ?>
        
        <p><a href="<?php echo url("/sitios/sitios/borrar/" . $id) ?>">Eliminar sitio as SuperUser</a></p>
        
        <a href="<?php echo (url("/sitios/sitios/listar")); ?>" class="icon-aircraft-landing">Retroceder</a>
        
        <?php else : ?>
        <p><a href="<?php echo url("/sitios/sitios/suspender/" . $id) ?>">Eliminar sitio</a></p>
        
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
    <!--</form>-->  
    
    <a id="callConfirm">Confirm!</a>

<div id="dialog" title="Confirmation Required">
  Are you sure about this?
</div>
    
    <button data-user="1" class="btn btn-primary btn-sm btn-round collapsed getUserDelID"><i class="fa fa-trash-o"></i> Delete</button>
<button data-user="2" class="btn btn-primary btn-sm btn-round collapsed getUserDelID"><i class="fa fa-trash-o"></i> Delete</button>
<button data-user="3" class="btn btn-primary btn-sm btn-round collapsed getUserDelID"><i class="fa fa-trash-o"></i> Delete</button>
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="Delete User" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title"><i class="fa fa-user"></i> UserDeleting</h3>
                </div>
            </div>
            <div class="modal-body">
                <div id="deleteholder"></div>
                <div id="msg-loader"></div>
                <form class="deleteuser">
                    <div class="input-group"> <span class="input-group-addon">you sure u want delete id <span class="userId"></span></span>
                        <input type="text" name="username" class="form-control" placeholder="Username" required />
                    </div>
                    <br />
                </form>
                <div style="padding: 10px 15px;background-color: #f5f5f5;border-top: 1px solid #dddddd;border-bottom-right-radius: 3px;border-bottom-left-radius: 3px;">
                    <button id="deleteUser" class="btn btn-primary">Delete</button>
                    <button class="btn btn-success" href="#" id="close" class="btn" data-dismiss="modal">Close</a>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
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


$('.getUserDelID').on('click', function (event) {
    $('.userId').text($(this).data('user'));
    $('#deleteModal').modal();
});

$('#deleteUser').on('click', function (event) {
    var otherProp = $('.userId').text();
    alert(otherProp);
    $.ajax({
        type: "POST",
        url: "deleteuser.php",
        data: $('form.deleteuser').serialize(),
        success: function (msg) {
            $("#deleteholder").html(msg)
        },
        error: function () {
            $("#deleteholder").html("error")
        }
    });
});




</script>


 <?php  $Loading = 'Loading...' ?>
<?php include("/../../Templates/Backend/footer.php") ?>
<?php include("/../../Templates/Backend/foot.php") ?>



