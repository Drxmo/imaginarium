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
    
        <h2 class="form-signin-heading lightcyan">¿Está Seguro que desea eliminar el sitio?</h2>
       
        
        <?php if (Session::has('super') === true) : ?>
        
        <p><a class="btn btn-primary btn-sm btn-round collapsed getUserDelID"  href="<?php echo url("/sitios/sitios/borrar/" . $id) ?>">Eliminar sitio as SuperUser</a></p>
        
        <a href="<?php echo (url("/sitios/sitios/listar")); ?>" class="icon-aircraft-landing">Retroceder</a>
        
        <?php else : ?>
        <p><a href="<?php echo url("/sitios/sitios/suspender/" . $id) ?>" class="btn btn-primary btn-sm btn-round collapsed getUserDelID">Eliminar sitio</a></p>
        
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
    
<!--    <a id="callConfirm">Confirm!</a>

<div id="dialog" title="Confirmation Required">
  Are you sure about this?
</div>-->
    
<!--    <button data-user="1" class="btn btn-primary btn-sm btn-round collapsed getUserDelID"><i class="fa fa-trash-o"></i> Delete</button>
<button data-user="2" class="btn btn-primary btn-sm btn-round collapsed getUserDelID"><i class="fa fa-trash-o"></i> Delete no</button>
<button data-user="3" class="btn btn-primary btn-sm btn-round collapsed getUserDelID"><i class="fa fa-trash-o"></i> Delete</button>
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="Delete User" aria-hidden="true">-->
<!--    <div class="modal-dialog">
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
             /.modal-content 
        </div>
         /.modal-dialog 
    </div>-->
<button class="btn btnDelete btn-primary btn-sm btn-round collapsed getUserDelID"  href="<?php echo url("/sitios/sitios/borrar/" . $id) ?>">Eliminar sitio as SuperUser</button>
 <button class="btnDelete" href="">delete</button>
  
                <button class="btnDelete" href="">delete</button>
  
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                 <h3 class="modal-title" id="myModalLabel">Warning!</h3>

            </div>
            <div class="modal-body">
                 <h4> Are you sure you want to DELETE?</h4>

            </div>
            <!--/modal-body-collapse -->
            <div class="modal-footer">
                <a type="button" class="btn btn-danger" id="btnDelteYes" href="<?php echo url("/sitios/sitios/borrar/" . $id) ?>">Yes</a>
                <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
            </div>
            <!--/modal-footer-collapse -->
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
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

$('button.btnDelete').on('click', function (e) {
e.preventDefault();

    
    var id = $(this).closest(':button').data('id');
    document.getElementById("btnDelteYes").href = "http://www.cnn.com/"+id;
     alert('hola' + " " + document.getElementById("btnDelteYes").href);
    $('#myModal').data('id', id).modal('show');
    
    
    
    $('#btnDelteYes').click(function () {
    var id = $('#myModal').data('id');
    $('[data-id=' + id + ']').remove();
    alert(id);
    $('#myModal').modal('hide');
});
   
});






//$('button.btnDelete').on('click', function (e) {
//    e.preventDefault();
//    var id = $(this).closest('tr');
//    $('#myModal').data('id', id).modal('show');
//});
//
//$('#btnDelteYes').click(function () {
//    var id = $('#myModal').data('id');
//    $('[data-id=' + id + ']').remove();
//    $('#myModal').modal('hide');
//});
//
//$(document).ready(function(){
//    $('.tmb').click(function(){
//        var target=$(this).parent().find("a");
//
//        $("#debug").text("clicked "+target.text());
//        //target.triggerHandler('click');
//        window.open(target.attr('href'));


</script>


 <?php  $Loading = 'Loading...' ?>
<?php include("/../../Templates/Backend/footer.php") ?>
<?php include("/../../Templates/Backend/foot.php") ?>



