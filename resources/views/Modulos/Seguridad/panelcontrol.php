<?php include_once ('/../../Templates/Backend/head.php') ?>
<?php include_once ('/../../Templates/Backend/header.php') ?>
    
    <div class="pan"><p class="text-center"> Configuración De La Cuenta</p>
        <ul>
                     
                
            <h2 style="height: 30px; width:300px">Cuenta</h2>
                <p><a href="evento.html.php">Modificar</a>
                <p><a href="#">Aqui va algo</a></p>
                <p><a href="#">Aqui va otro algo</a></p>
                <p><a href="#">Volver</a></p>
            
                                
            <h2 style="height: 30px; width:300px">Usuario</h2>
                <a href="<?php echo url("/usuarios/usuarios/crear") ?>">Crear Usuario</a>
                    <p><a href="<?php echo url("/usuarios/usuarios/index") ?>">Listar Usuarios</a></p>
            
                
                <h2 style="height: 30px; width:300px">Sitios</h2>
                <a href="<?php echo url("/sitios/sitios/indexxx") ?>">Crear Sitio</a>
                    <p><a href="<?php echo url("/sitios/sitios/index") ?>">Listar Sitio</a></p>
            
            
            
            
                <h2 style="height: 30px; width:300px">Eventos</h2>
                <p><a href="<?php echo url("/eventos/eventos/indexxx") ?>">Crear Evento</a></p> 
                <p><a href="#">Listar Evento</a></p>
            
        </ul>
        
        
  <table class="tablePanel table-hover table-responsive">      
      <tbody>
          <tr class="active">      
              <td></td>
              <td><strong>TABLA CONTENIDO</strong></td>
              <td></td>
                
          </tr>
          
          <tr class="active">
              <td><strong>Sitio</strong></td>
              <td><strong>Descripcion</strong></td>
              <td><strong>Accion</strong></td>
          </tr>
          
          <tr>
              <td>Sendero Ecologico</td>
              <td>Disfruta de un delicioso paseo<br>
                  ecologico liberando tu mente</td>
              <td><a href="#"> Editar</a> 
                  <a href="#">Inhabilitar</a>
              
              </td>
              
              
          </tr>
          
          <tr>
              <td>Vergel</td>
              <td>Deporte y mirar nenas</td>
              <td>
                  <a href="#"> Editar</a> 
                  <a href="#">Inhabilitar</a>
              
              </td>
          </tr>
          
           <tr>
              <td>Misa Sanacion</td>
              <td>14 de cada mes se celebra esta misa en la basilica de Buga</td>
              <td>
                  <a href="#"> Editar</a> 
                  <a href="#">Inhabilitar</a>
              
              </td>
          </tr>
          
           <tr>
              <td>Vergel</td>
              <td>Deporte y mirar nenas</td>
              <td>
                  <a href="#"> Editar</a> 
                  <a href="#">Inhabilitar</a>
              
              </td>
          </tr>
          
      </tbody>
  </table>
    </div>
        
        
    
        


 
<?php include_once ('/../../Templates/Frontend/footer.php') ?>
<?php include_once ('/../../Templates/Frontend/foot.php') ?>

