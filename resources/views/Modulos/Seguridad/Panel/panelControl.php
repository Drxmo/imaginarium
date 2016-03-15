<?php include_once $fsConfig->getPath() . 'view/parcial/head.php' ?>
<?php include_once $fsConfig->getPath() . 'view/parcial/header.php' ?>
    
    <div class="pan"><p class="text-center"> Configuración De La Cuenta</p>
        <ul>
                     
                
            <h2 style="height: 30px; width:300px">Cuenta</h2>
                <p><a href="evento.html.php">Modificar</a>
                <p><a href="#">Aqui va algo</a></p>
                <p><a href="#">Aqui va otro algo</a></p>
                <p><a href="#">Volver</a></p>
            
                                
            
            
                
                <h2 style="height: 30px; width:300px">Sitios</h2>
                <a href="<?php echo $fsConfig->getUrl() ?>index.php/seguridad/sitioCrear">Crear Sitio</a>
                    <p><a href="#">Listar Sitio</a></p>
            
            
            
            
                <h2 style="height: 30px; width:300px">Eventos</h2>
                <p><a href="<?php echo $fsConfig->getUrl() ?>index.php/seguridad/eventoCrear">Crear Evento</a></p> 
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
        
        
    
        


 
<?php include_once $fsConfig->getPath() . 'view/parcial/footer.php' ?>
<?php include_once $fsConfig->getPath() . 'view/parcial/foot.php' ?>

