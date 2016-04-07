<?php include("/../../../Templates/Backend/head.php") ?>
<?php include("/../../../Templates/Backend/header.php") ?>



  <script>
  $(function() {
    $( "#datepicker" ).datepicker({
      changeMonth: true,
      changeYear: true,
      yearRange: '1900:currentYear',
       minDate: new Date('1900/01/01'),
      maxDate: '0',
       dateFormat: 'yy-mm-dd'
    });
  });
  
//  $(function() {
//    $( "#datepicker" ).datepicker();
//    $( "#format" ).change(function() {
//      $( "#datepicker" ).datepicker( "option", "dateFormat", $( this ).val() );
//    });
//  });
//  
//   $('#datepicker').datepicker({
//        minDate: new Date(currentYear, currentMonth, currentDate),
//        dateFormat: 'yy-mm-dd'
//    });
  </script>

 



<section class="main container regcontainer">
    <div class="row">
        <div class="jumbotron boxuser boxuserX">
            <form class="form-horizontal" action="<?php echo $registroForm ?>" method="post">
                <div class="form-group">
                    <label class="control-label col-xs-3">Nombre de Usuario:</label>
                    <div class="regInput col-xs-9">
                        <input type="text" class="form-control" id="nombre" placeholder="Nombre" name="registro[nick]">
                        
                    </div>
                    </div>
                   
                    <div class="form-group">
                        <label class="control-label col-xs-3">Password:</label>
                        <div class="regInput col-xs-9">
                            <input type="password" class="form-control" id="inputPassword" placeholder="Password" name="registro[pass]">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-xs-3">Password:</label>
                        <div class="regInput col-xs-9">
                            <input type="password" class="form-control" placeholder="Confirmar Password" name="registro[pass]">
                        </div>
                    </div>
                     <div class="form-group">
                        <label class="control-label col-xs-3">Nombre:</label>
                        <div class="col-xs-9">
                            <input type="text" class="form-control" id="nombre" placeholder="Nombre" name="registro[nombre]">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-xs-3">Apellido:</label>
                        <div class="col-xs-9">
                            <input type="text" class="form-control" id="apellido" placeholder="Apellido" name="registro[apellidos]">
                        </div>
                    </div> 
                    <div class="form-group">
                        <label class="control-label col-xs-3">Correo:</label>
                        <div class="col-xs-9">
                            <input type="email" class="form-control" id="inputEmail" placeholder="Email" name="registro[email]">
                        </div>
                    </div>                             
                    <div class="form-group">
                        <label class="control-label col-xs-3">Fecha de Nacimiento:</label>
                        <div class="col-xs-6">
                         
                            <input type="text" id="datepicker" class="form-control" id="inputFecha" placeholder="YYYY-MM-DD" name="registro[fecha]">    
                            <input type="hidden" id="format" value="mm/dd/yy">
                        </div>
                        
                    </div>
                    <div class="form-group">
                        <label class="control-label col-xs-3">Genero:</label>
                        <div class="col-xs-2">
                            <label class="radio-inline">
                                <input type="radio" name="registro[genero]" value="1" name="registro[genero]">Hombre
                            </label>
                        </div>
                        <div class="col-xs-2">
                            <label class="radio-inline">
                                <input type="radio" name="registro[genero]" value="0" name="registro[genero]">Mujer
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-offset-3 col-xs-9">
                            <label class="checkbox-inline">
<!--                                <input type="checkbox" value="news">Desea recibir notificaciones.
                            </label>-->
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-offset-3 col-xs-9">
                            <label class="checkbox-inline">
                                
<!--                                <input type="checkbox" value="agree">Acepta <a href="#">los terminos y condiciones</a>.-->
                                
                            </label>
                        </div>
                    </div>
                    <br>
                    <div class="form-group">
                        <div class="col-xs-offset-3 col-xs-9">
                            <input type="submit" class="btn btn-default" value="Registrar">
                            <a href="<?php echo $fsConfig->getUrl() ?>index.php/home/index" class="btn btn-default btn-cancel" value="Guardar">Cancelar</a>
                        </div>
                    </div>
            </form>
        </div>
    </div>
</section>

      

      <?php include("/../../../Templates/Backend/footer.php") ?>
<?php include("/../../../Templates/Backend/foot.php") ?>
 

