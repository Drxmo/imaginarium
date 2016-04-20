<?php include("/../../Templates/Backend/head.php") ?>
<?php include("/../../Templates/Backend/header.php") ?>
<style>
  #tableX td{
    text-align:center !important;

  }


</style>

<?php

function nombre($id) {
  $apellid = DB::select("SELECT eve_nombre FROM bdp_evento WHERE eve_id = ?", array($id));
  $new_arr[] = null;
  foreach ($apellid as $eventos) {
    $new_arr[] = $eventos->eve_nombre;
  }
  $res_arr = implode($new_arr);
  print_r($res_arr);
}

function descripcion($id) {
  $apellid = DB::select("SELECT eve_descripcion FROM bdp_evento WHERE eve_id = ?", array($id));
  $new_arr[] = null;
  foreach ($apellid as $eventos) {
    $new_arr[] = $eventos->eve_descripcion;
  }
  $res_arr = implode($new_arr);
  print_r($res_arr);
}
?>

<div class="container container-fluid ">
  <a href="<?php echo url("/eventos/eventos/crear") ?>"> + Agregar Evento </a>
<?php Session::get('success') ?>
  <?php if (Session::has('success')): ?>
    <br>
    <div class="alert alert-danger" role="alert"><?php echo Session::get('success') ?></div>
    <br>
<?php endif ?>


  <table id="tableX" class="table-responsive table-striped table-bordered">
    <thead>
      <tr>
        <th>&nbsp#&nbsp</th>
        <th>&nbsp ID &nbsp</th>
        <th>&nbsp&nbsp Direccion &nbsp&nbsp</th>
        <th>&nbsp&nbsp Nombre del evento &nbsp&nbsp</th>
        <th>&nbsp&nbsp Descripcion &nbsp&nbsp</th>
        <th>&nbsp&nbsp Editar &nbsp&nbsp</th>
        <th>&nbsp&nbsp Inhabilitar &nbsp&nbsp</th>
        <th>&nbsp&nbsp Eliminar &nbsp&nbsp</th>

      </tr>
    </thead>
    <tbody>
<?php
$count = 1;
foreach ($eventos as $evento) {
  ?>
        <tr>
          <td><?php echo $count++ ?></td>
          <td><?php echo $evento->eve_id;
      $id = $evento->eve_id; ?></td>
          <td><?php echo $evento->eve_direccion ?></td>
          <td><?php nombre($id); ?></td>
          <td><?php descripcion($id); ?></td>

          <td><a href="<?php echo url("eventos/eventos/editar/" . $evento->eve_id) ?>" >Editar</a></td>
          <td><?php if (empty($evento->eve_deleted_at) == true) : ?>
              <a href="<?php echo url("eventos/eventos/suspender/" . $evento->eve_id) ?>" >Inhabilitar</a>
            <?php else : ?>
              <label>Suspendido</label>
            <?php endif; ?>
          </td>
          <?php   if (Session::has('super') === true):       ?>
          <td><button  data-id="<?php echo $evento->eve_id?>" class='btn btnDelete btn-primary btn-sm btn-round collapsed' href="<?php echo url("eventos/eventos/eliminar/" . $evento->eve_id) ?>" >Eliminar</button></td>
          <?php   endif;       ?>
        </tr>
      <?php } ?>
    </tbody>
  </table>
  <br>
  <br>
  <br>
  <br>
  <br>
  <span>Regresar a </span><br><a href="<?php echo url("/eventos/eventos/listar") ?>" title="Regresar" class="btn btn-default volver" value="Guardar">Panel de control</a>
  <br>
  <br>
  <br>
  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                 <h3 class="modal-title" id="myModalLabel">Advertencia!</h3>

            </div>
            <div class="modal-body">
                 <h4> Está seguro que desea eliminar?</h4>

            </div>
            <!--/modal-body-collapse -->
            <div class="modal-footer">
                <div class="modalmarquee" ><marquee >Irreversible!</marquee></div>
                <a type="button" class="btn btn-danger" id="btnDelteYes" href="<?php echo url("/eventos/eventos/eliminar/" . $id) ?>">Yes</a>
                <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
            </div>
            <!--/modal-footer-collapse -->
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
                <input id='gotour' type="hidden" value='<?php echo url('')?>'>
    
</div>
<!--</div>-->
    
                <br>
                <br>
                <br>
                <br>
          
<script>
function passUrl(url){
<?php $urlflag = 1; ?> 
$('button.btnDelete').on('click', function (e) {
e.preventDefault();

    
    var id = $(this).closest(':button').data('id');
   
    document.getElementById("btnDelteYes").href = (url+"sitios/sitios/borrar/"+id);
    
     //alert('hola' + " " + document.getElementById("btnDelteYes").href);
    $('#myModal').data('id', id).modal('show');
    
    
    
    $('#btnDelteYes').click(function () {
    var id = $('#myModal').data('id');
    $('[data-id=' + id + ']').remove();
    //alert(id);
    $('#myModal').modal('hide');
});
   
});

//alert(url);
};

</script>
<!--</div>-->

 <?php  $Loading = 'Loading...' ?>
<?php include("/../../Templates/Backend/footer.php") ?>
<?php include("/../../Templates/Backend/foot.php") ?>