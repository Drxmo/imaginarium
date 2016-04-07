    <?php include("/../../Templates/Backend/head.php") ?>
<?php include("/../../Templates/Backend/header.php") ?>
<style>
    #tableX td{
    text-align:center !important;
  
}
    
    
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
  <?php Session::get('success')?>
  <?php if (Session::has('success')): ?>
                <br>
                <div class="alert alert-danger" role="alert"><?php Session::get('success') ?></div>
                <br>
                <?php endif ?>
 
      
   <table id="tableX" class="table-responsive table-striped table-bordered">
    <thead>
      <tr>
        <th>&nbsp#&nbsp</th>
        <th>&nbsp ID &nbsp</th>
        <th>&nbsp Sitio &nbsp</th>
        <th>&nbsp Descripcion &nbsp</th>
        <th>&nbsp Activo &nbsp</th>    
        <th> &nbsp Editar &nbsp</th>
        <?php   if (Session::has('super') === true):       ?> 
        <th> &nbsp Inhabilitar &nbsp</th>         
        <th> &nbsp Eliminar &nbsp</th>
        <?php  else:       ?> 
        <th> &nbsp Eliminar &nbsp</th>
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
   <a href="<?php echo url("sitios/sitios/suspender/" . $sitio->sit_id) ?>" ><?php   if (Session::has('super') === true):       ?> <span>Inhabilitar</span><?php   else:       ?> <span>Eliminar</span><?php   endif;      ?></a>
<?php else : ?>
    <label>Suspendido</label>
<?php endif; ?>
          </td>
          <?php   if (Session::has('super') === true):       ?>
          <td><a href="<?php echo url("sitios/sitios/eliminar/" . $sitio->sit_id) ?>" >Eliminar</a></td>
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
                <br>
                <br>
                <br>
</div>
<?php include("/../../Templates/Frontend/footer.php") ?>
<?php include("/../../Templates/Frontend/foot.php") ?>
    