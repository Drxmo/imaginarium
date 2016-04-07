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
    <div class="alert alert-danger" role="alert"><?php Session::get('success') ?></div>
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
            <?php endif; ?></td>
          <td><a href="<?php echo url("eventos/eventos/eliminar/" . $evento->eve_id) ?>" >Eliminar</a></td>
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
</div>
<?php include("/../../Templates/Backend/footer.php") ?>
<?php include("/../../Templates/Backend/foot.php") ?>