<?php include("/../../../Templates/Backend/head.php") ?>
<?php include("/../../../Templates/Backend/header.php") ?>
<style>
    #tableX td{
    text-align:center !important;
  
}
    
    
</style>

<?php 
       function nombre($id) {
    $apellid = DB::select("SELECT dus_nombre FROM bdp_dato_usuario WHERE usu_id = ?", array($id));
    $new_arr[] = null;
foreach($apellid as $apellido)
{
    $new_arr[] = $apellido->dus_nombre;
}
$res_arr = implode($new_arr);
print_r($res_arr);
  }
  
  function apellido($id) {
    $apellid = DB::select("SELECT dus_apellidos FROM bdp_dato_usuario WHERE usu_id = ?", array($id));
    $new_arr[] = null;
foreach($apellid as $apellido)
{
    $new_arr[] = $apellido->dus_apellidos;
}
$res_arr = implode($new_arr);
print_r($res_arr);
  }
  
      ?>

<div class="container container-fluid ">
  <a href="<?php echo url("usuarios/usuarios/crear") ?>"> + Agregar usuario </a>
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
        <th>&nbsp&nbsp NickName &nbsp&nbsp</th>
        <th>&nbsp&nbsp Nombre &nbsp&nbsp</th>
        <th>&nbsp&nbsp Apellido &nbsp&nbsp</th>
        <th>&nbsp&nbsp Activo &nbsp&nbsp</th>
        <th>&nbsp&nbsp&nbsp&nbsp Rol &nbsp&nbsp&nbsp&nbsp</th>
        <th> &nbsp&nbsp Editar &nbsp&nbsp</th>
        <th> &nbsp&nbsp Suspender &nbsp&nbsp</th>
        <th> &nbsp&nbsp Suspender &nbsp&nbsp</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $count = 1;
      foreach ($usuarios as $usuario) {
        ?>
        <tr>
          <td><?php echo $count++ ?></td>
          <td><?php echo $usuario->usu_id; $id = $usuario->usu_id; ?></td>
          <td><?php echo $usuario->usu_usuario ?></td>
          <td><a href="<?php echo url("usuarios/usuarios/crear") ?>"><?php nombre ($id);  ?></a></td>
          <td><?php apellido($id);  ?></td>
          <td><?php $act= $usuario->usu_activado;if ($act== '1'):echo 'Sí' ; else: echo 'No'; endif?></td>
          <td><?php $ro= $usuario->rol_id;if ($ro== '2'):echo 'Usuario' ; else: echo 'SuperUsuario'; endif?></td>
          <td><a href="<?php echo url("/usuarios/usuarios/editar/" . $usuario->usu_id); ?>" >Editar</a></td>
          
          <td><?php if(empty($usuario->usu_deleted_at) == true) : ?>
   <a href="<?php echo url("usuarios/usuarios/suspender/" . $usuario->usu_id) ?>" >Suspender</a>
<?php else : ?>
    <label>Suspendido</label>
<?php endif; ?></td>
          
          <td><a href="<?php echo url("usuarios/usuarios/eliminar/" . $usuario->usu_id) ?>" >Eliminar</a></td>
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
<?php include("/../../../Templates/Frontend/footer.php") ?>
<?php include("/../../../Templates/Frontend/foot.php") ?>