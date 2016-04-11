    <?php include("/../../Templates/Backend/head.php") ?>
<?php include("/../../Templates/Backend/header.php") ?>
<style>
    
    
</style>

<?php 
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
  
      ?>

<div class="container container-fluid ">
  <a href="<?php echo url("sitios/sitios/indexxx") ?>"> + Agregar sitio </a>
  
  <?php if (Session::has('success')): ?>
                <br>
                <div  class="alerta  alert-success" role="alert"><?php echo Session::get('success') ?></div>
                <br>
                <?php endif ?>
 
      
   <table id="tableX" class="table-responsive table-striped table-bordered">
    <thead>
      <tr>
        <th>&nbsp#&nbsp</th>
        <th> ID </th>
        <th>&nbsp Sitio &nbsp</th>
        <th>&nbsp Descripcion &nbsp</th>
        <th> Activo  </th>    
        <th>  Editar </th>
        <?php   if (Session::has('super') === true):       ?> 
        <th>  Inhabilitar </th>         
        <th>  Eliminar </th>
        <?php  else:       ?> 
        <th>  Eliminar </th>
        <?php   endif;       ?> 
      </tr>
    </thead>
    <tbody>
      <?php
      $count = 1;
      foreach ($sitios as $sitio) {
        ?>
        <tr>
          <td><?php echo $count++ ?></td>
          <td><?php echo $sitio->sit_id; $id = $sitio->sit_id; ?></td>
            
          <td><a href="<?php echo url("/sitios/sitios/versitio/" . $sitio->sit_id); ?>"><?php nombre ($id);  ?></a></td>
          <td><?php echo ((strlen($sitio->sit_descripcion) > 100) ? substr(($sitio->sit_descripcion), 0, 15) . " ..." : ($sitio->sit_descripcion)) ?></p></td>
          <td><?php $act= $sitio->est_id;if ($act== '1'):echo 'Sí' ; else: echo 'No'; endif?></td>         
          <td><a href="<?php echo url("/sitios/sitios/update/" . $sitio->sit_id); ?>" >Editar</a></td>          
          <td><?php if(empty($sitio->sit_deleted_at) == true) : ?>
   <a href="<?php echo url("sitios/sitios/eliminar/" . $sitio->sit_id) ?>" ><?php   if (Session::has('super') === true):       ?> <span>Inhabilitar</span><?php   else:       ?> <span>Eliminar</span><?php   endif;      ?></a>
<?php else : ?>
    <label>Suspendido</label>
<?php endif; ?>
          </td>
          <?php   if (Session::has('super') === true):       ?>
          <td><button  data-id="<?php echo $sitio->sit_id?>" class='btn btnDelete btn-primary btn-sm btn-round collapsed' href="<?php echo url("sitios/sitios/eliminar/" . $sitio->sit_id) ?>" >Eliminar</button></td>
          <?php   endif;       ?>
        </tr>
      <?php } ?>
    </tbody>
  </table>
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
                <div class="modalmarquee" "><marquee >Irreversible!</marquee></div>
                <a type="button" class="btn btn-danger" id="btnDelteYes" href="<?php echo url("/sitios/sitios/borrar/" . $id) ?>">Yes</a>
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
</div>
    
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

</div> 
<?php include("/../../Templates/backend/footer.php") ?>
<?php include("/../../Templates/backend/foot.php") ?>
    