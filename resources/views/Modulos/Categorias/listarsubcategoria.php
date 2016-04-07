<?php include("/../../Templates/Backend/head.php") ?>
<?php include("/../../Templates/Backend/header.php") ?>
<style>
    #tableX td{
    text-align:center !important;
  
}
    
    
</style>

<?php 
       function nombre($id) {
    $apellid = DB::select("SELECT subcat_nombre FROM bdp_subcategoria WHERE subcat_id = ?", array($id));
    $new_arr[] = null;
foreach($apellid as $apellido)
{
    $new_arr[] = $apellido->subcat_nombre;
}
$res_arr = implode($new_arr);
print_r($res_arr);
  }
  
  
  
  
      ?>

<div class="container container-fluid ">
  <a href="<?php echo url("categorias/categorias/crear") ?>"> + Agregar subCategoria </a>
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
        
       
       
        <th>&nbsp&nbsp Nombre &nbsp&nbsp</th>
     
        <th> &nbsp&nbsp Estado &nbsp&nbsp</th>
        <th> &nbsp&nbsp Editar &nbsp&nbsp</th>
        <th> &nbsp&nbsp Suspender &nbsp&nbsp</th>
        <th> &nbsp&nbsp Eliminar &nbsp&nbsp</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $count = 1;
      foreach ($sub_categorias as $sub_categoria) {
        ?>
        <tr>
          <td><?php echo $count++ ?></td>
         
          <td><?php echo 2; $id= $sub_categoria->subcat_id; ?></td>
          <td><a href="<?php echo url("categorias/categorias/editar") ?>"><?php nombre ($id);  ?></a></td>
         
          <td><?php $act= $sub_categoria->subcat_activo;if ($act== '1'):echo 'Sí' ; else: echo 'No'; endif?></td>
          
          <td><a href="<?php echo url("/categorias/categorias/editar/" . $sub_categoria->subcat_id); ?>" >Editar</a></td>
          
          <td><?php if(empty($sub_categoria->cat_deleted_at) == true) : ?>
   <a href="<?php echo url("usuarios/usuarios/suspender/" . $sub_categoria->cat_id) ?>" >Suspender</a>
<?php else : ?>
    <label>Suspendido</label>
<?php endif; ?></td>
          
          <td><a href="<?php echo url("usuarios/usuarios/eliminar/" . $sub_categoria->cat_id) ?>" >Eliminar</a></td>
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