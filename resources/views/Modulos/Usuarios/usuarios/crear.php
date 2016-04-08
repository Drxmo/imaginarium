<?php include("/../../../Templates/Backend/head.php") ?>
<?php include("/../../../Templates/Backend/header.php") ?>
<style>
   

</style>
 <div style="clear:both;"></div>

        <div class="container container-fluid ">
            <?php echo "Bienvenido <code>" . $nombre . "</code>" ?>
            <main class="container" role="main">
                <article class="">                        
                    <header class="title-head">
                        <h3><span>Crear Usuario</span></h3>
                    </header>

                </article>
            </main>

            <form class="form-horizontal" id="formvalidate" novalidate action="<?php echo url("usuarios/usuarios/crear") ?>" method="post">

                
                <div class="form-group">
                    <label class="control-label col-xs-3 lightcyan">Nombre de Usuario:</label>
                    <div class="regInput col-xs-9">
                        <input type="text" class="form-control" id="registro" placeholder="Nombre" name="registro[nick]">
                    </div>

                

                
                
                
                
            <div class="col-xs-2">
                <label class="radio-inline" style="top:-15px;"><span class="lightcyan">Rol:</span> 
                    <select name="registro[rol]" required>
                        <option></option>
                        <?php
                        foreach ($roles as $rol) {
                            ?>
                            <option style="font-family: BankGothicMdBT" value="<?php echo $rol->rol_id ?>">&nbsp<?php echo $rol->rol_rol ?>&nbsp</option>

                        <?php } ?>

                    </select>
                </label>
            </div>
            </div>




       



        <!-- <div class="form-group ">
                    <label class="control-label col-xs-3">Password:</label>
                    <div class="regInput col-xs-9">
                        <input type="password" class="form-control" id="inputPassword" placeholder="Password" name="registro[pass]">
                    </div>
                </div>-->
        <div class="form-group ">
            <label class="control-label col-xs-3">Estado:</label>
            <div class="col-xs-2">

                <label class="radio-inline">
                    <input type="hidden" name="registro[activado]" value="1" checked><span  class="lightcyan"> Activado</span><br>
                </label>
            </div>
            <div class="col-xs-2">

                <label class="radio-inline">
<!--                    <input type="radio" name="registro[activado]" value="0"> Desactivado<br>-->
                </label>
            </div>
        </div>





        <div class="form-group ">
            <label class="control-label col-xs-3">Password:</label>
            <div class="regInput col-xs-9">
                <input required type="password" id="password" class="form-control" placeholder="Password" name="registro[pass]">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-xs-3">Password:</label>
            <div class="regInput col-xs-9">
                <input required type="password" class="form-control" placeholder="Confirmar Password" name="registro[pass2]">
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
            <label class="control-label col-xs-3">Fecha de Nacimiento:</label>
            <div class="col-xs-6">
                <input type="text" name="registro[fecha]" class="date readonly form-control" placeholder="YYYY/MM/DD" required /><br /><br />
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-xs-3">Correo:</label>
            <div class="col-xs-9">
                <input type="email" class="form-control" id="inputEmail" placeholder="Email" name="registro[email]">
            </div>
        </div>    
        <div class="form-group">
            <label class="control-label col-xs-3">Facebook:</label>
            <div class="col-xs-9">
                <input type="text" class="form-control" id="datetimepicker" placeholder="Email" name="registro[facebook]">
            </div>
        </div>  
        <div class="form-group">
            <label class="control-label col-xs-3">Twitter:</label>
            <div class="col-xs-9">
                <input type="text" class="form-control" id="inputEmail" placeholder="Email" name="registro[twitter]">
            </div>
        </div>  
        <div class="form-group">
            <label class="control-label col-xs-3">Google+:</label>
            <div class="col-xs-9">
                <input type="text" class="form-control" id="inputEmail" placeholder="Email" name="registro[google]">
            </div>
        </div>  
        
        <!--        <div class="form-group">
                    <label class="control-label col-xs-3">Fecha de Nacimiento:</label>
                    <div class="col-xs-6">
        
                        <input type="text" id="datepicker" class="form-control" id="inputFecha" placeholder="YYYY-MM-DD" name="registro[fecha]">    
                        <input type="hidden" id="format" value="mm/dd/yy">
                    </div>-->


        <div class="form-group">
            <label class="control-label col-xs-3 "><span  class="invisible">Genero:</span></label>
            <div class="col-xs-2">
                <label class="radio-inline genero">
                    <li>
                        <input type="radio" name="registro[genero]" value="1" name="registro[genero]"><span  class="lightcyan">Hombre</span></li>
                </label>
            </div>
            <div class="col-xs-2">
                <label class="radio-inline">
                    <input type="radio" name="registro[genero]" value="0" name="registro[genero]"><span  class="lightcyan">Mujer</span>
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


       
                
                
                
                
                
                <input class="btn btn-default btn-success" type="submit" value="Guardar" />
                <!--        <a href="http://localhost/imaginarium/public/index.php" class="btn btn-default btn-cancel" value="Guardar">Cancelar</a>-->
                <a href="<?php echo url("/seguridad/panelcontrol") ?>" class="btn btn-default btn-cancel" >Cancelar</a>

            </form>
        </div>
        
        
        
        
        
        
        
        
    

        <script>


   
 $(document).ready(function () {
                // validate the comment form when it is submitted
                //$("#feedback_form").validate();
var r5 = 5;
var r10 = 10;
var r2 = 2;

                // validate signup form on keyup and submit
                $("#formvalidate").validate({
                    rules: {
                        "registro[nick]": {
                        required: true,
                        minlength: r5
                        },
                        "registro[rol]": {
                        required: true

                        },
                        "registro[activado]": {
                        required: true

                        },
                        "registro[pass]": {
                        required: true,
                        minlength: r5
                        },
                        "registro[pass2]": {
                        required: true,
                        minlength: r5,
                        equalTo: "#password"
                        },
                        "registro[nombre]": {
                        required: true,
                        minlength: r2
                        },
                        "registro[apellidos]": {
                        required: true,
                        minlength: r2
                        },
                        "registro[fecha]": {
                        required: true
                        },
                        "registro[email]": {
                        required: true
                        },
    //                  "registro[email]": {
    //                    required: true
    //                  
    //                  },
//                        "registro[facebook]": {
//                        required: true
//
//                        },
//                        "registro[twitter]": {
//                        required: true
//
//                        },
//                        "registro[google]": {
//                        required: true
//
//
//                        },
                        
                        "registro[genero]": {
                        required: true

                        }

                    //agree: "required"
                    },
                        messages: {                
                        "registro[nick]": {
                        required: "Ingrese UserName.",
                        minlength: "Your Full Name must consist of at least " + r5 +  " characters long."
                        },
                        "registro[rol]": {
                        required: "Seleccione Rol."

                        },
                        "registro[activado]": {
                        required: "Seleccione estado."

                        },
                        "registro[pass]": {
                        required: "Ingrese contraseña.",
                        minlength: "Password debe ser mayor a " + r5 +  " characters long."
                        },
                        "registro[pass2]": {
                        required: "Confirme Contraseña.",
                        minlength: "Password debe ser mayor " + r5 +  " characters long.",
                        equalTo: "Por favor ingrese misma password as above."
                        },
                        "registro[nombre]": {
                        required: "Ingrese Nombre Completo.",
                        minlength: "Nombre de minimo " + r2 +  " caracteres."
                        },
                        "registro[apellidos]": {
                        required: "Ingrese Apellidos.",
                        minlength: "Apellido de minimo " + r2 +  " characters long."
                        },
                        "registro[fecha]": {
                        required: "ingrese Fecha de nacimiento."

                        },
                        "registro[email]": {
                            required:"Ingrese dirección de email valida."
                        },
    //                "registro[facebook]": {
    //                    required: "Ingrese facebook."
    //                    
    //                },
                        "registro[twitter]": {
                        required: "Ingrese twitter."
                        },
                        "registro[google]": {
                        required: "Ingrese Google Plus."

                        },
                        "registro[genero]": {
                        required: "Seleccione genero."

                        }
                
                    //agree: "Please accept our terms & condition."
                }
            
        });
      
     
     
      
      
        });
        



    $(".readonly").keydown(function (e) {
        e.preventDefault();
    });
// To user jQuery DatePicker 
    $(function () {
        $(".date").datepicker({
            dateFormat: 'yy/mm/dd',
            buttonImageOnly: true,
            buttonText: "Select date",
            maxDate: "-1",
            minDate: "-100y",
            defaultDate: new Date(1988, 2 - 1, 9),
            
             changeMonth: true,
      changeYear: true


        });
        
//         $(".date").datepicker().on('changeYear', function(e){ 
//   var currYear = String(e.date).split(" ")[3];
// });
        
    });
    


//
//$('.timepicker').wickedpicker();
//$('#datetimepicker').datetimepicker();
        </script>
        <?php  $Loading = 'Loading...' ?>
        
        
        
      <?php include("/../../../Templates/Backend/footer.php") ?>
<?php include("/../../../Templates/Backend/foot.php") ?>
 

