<?php include("/../../../Templates/Backend/head.php") ?>
<?php include("/../../../Templates/Backend/header.php") ?>







?>

<script>


    $(".readonly").keydown(function (e) {
        e.preventDefault();
    });

// To user jQuery DatePicker 
    $(function () {
        $(".date").datepicker({
            dateFormat: 'yy/mm/dd',
            buttonImageOnly: true,
            buttonText: "Select date"
        });
    });



</script>







<div class="container container-fluid ">
    <?php echo "Bienvenido <code>" . $nombre . "</code>" ?>
    <main class="container" role="main">
        <article class="">                        
            <header class="sitio-head">
                <h3><span>Editar Usuario</span></h3>
            </header>

        </article>
    </main>

    <form class="form-horizontal" action="<?php echo url("usuarios/usuarios/editar") ?>" method="post">

        <!--        <div class="row">
                    <div class="form-group col-lg-6">
                        <input type="text" class="form-control col-lg-6" placeholder="Digite nombre" name="nombre" />
                    </div>
                    <div class="form-group col-lg-6">
                        <input class="form-control col-lg-6" type="text" placeholder="Digite apellido" name="apellido" />
                    </div>
                </div>-->



        <div class="form-group">
            <label class="control-label col-xs-3">Nombre de Usuario:</label>
            <div class="regInput col-xs-9">
                <input required type="text" class="form-control" id="nombre" placeholder="Nombre" value="<?php echo $usuario->usu_usuario ?>" name="registro[nick]">
            </div>


            <div class="col-xs-2">
                <label class="radio-inline" style="top:-15px;">Rol: 
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

            <br>
            <br>
            <br>




        </div>
        <?php
        $fecha1 = getdate();
        $fecha2 = $fecha1[0];
        ?>
        <input type="hidden" value="<?php echo $usuario->usu_id ?>" name="registro[id1]" />
        <input type="datetime" value="<?php echo date("Y-m-d\TH:i:s");?>" name="registro[usu_updated_at]" />



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
                    <input type="radio" name="registro[activado]" value="1" required> Activado<br>
                </label>
            </div>
            <div class="col-xs-2">

                <label class="radio-inline">
                    <input type="radio" name="registro[activado]" value="0"> Desactivado<br>
                </label>
            </div>
        </div>





        <div class="form-group ">
            <label class="control-label col-xs-3">Password:</label>
            <div class="regInput col-xs-9">
                <input required type="password" value="<?php echo $usuario->usu_password ?>" class="form-control" id="inputPassword" placeholder="Password" name="registro[pass]">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-xs-3">Password:</label>
            <div class="regInput col-xs-9">
                <input required type="password" value="<?php echo $usuario->usu_password ?>" class="form-control" placeholder="Confirmar Password" name="registro[pass2]">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-xs-3">Nombre:</label>
            <div class="col-xs-9">
                <input type="text" class="form-control" id="nombre" placeholder="Nombre" value="<?php echo $dato_usuario->dus_nombre ?>" name="registro[nombre]">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-xs-3">Apellido:</label>
            <div class="col-xs-9">
                <input type="text" class="form-control" id="apellido" placeholder="Apellido" value="<?php echo $dato_usuario->dus_apellidos ?>" name="registro[apellidos]">
            </div>
        </div> 


        <div class="form-group">
            <label class="control-label col-xs-3">Fecha de Nacimiento:</label>
            <div class="col-xs-2">
                <input type="text" name="registro[fecha]" class="date readonly form-control" value="<?php echo $dato_usuario->dus_fecha_nacimiento ?>" placeholder="DD/MM/YYYY" required />
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-xs-3">Correo:</label>
            <div class="col-xs-9">
                <input type="email" class="form-control" id="inputEmail" placeholder="Email" value="<?php echo $dato_usuario->dus_correo ?>" name="registro[email]">
            </div>
        </div>    
        <div class="form-group">
            <label class="control-label col-xs-3">Facebook:</label>
            <div class="col-xs-9">
                <input type="text" class="form-control" id="inputEmail" placeholder="Email" value="<?php echo $dato_usuario->dus_facebook ?>" name="registro[facebook]">
            </div>
        </div>  
        <div class="form-group">
            <label class="control-label col-xs-3">Twitter:</label>
            <div class="col-xs-9">
                <input type="text" class="form-control" id="inputEmail" placeholder="Email" value="<?php echo $dato_usuario->dus_twitter ?>" name="registro[twitter]">
            </div>
        </div>  
        <div class="form-group">
            <label class="control-label col-xs-3">Google+:</label>
            <div class="col-xs-9">
                <input type="text" class="form-control" id="inputEmail" placeholder="Email" value="<?php echo $dato_usuario->dus_google_plus ?>" name="registro[google]">
            </div>
        </div>  

        <!--        <div class="form-group">
                    <label class="control-label col-xs-3">Fecha de Nacimiento:</label>
                    <div class="col-xs-6">
        
                        <input type="text" id="datepicker" class="form-control" id="inputFecha" placeholder="YYYY-MM-DD" name="registro[fecha]">    
                        <input type="hidden" id="format" value="mm/dd/yy">
                    </div>-->


        <div class="form-group">
            <label class="control-label col-xs-3">Genero:</label>
            <div class="col-xs-2">
                <label class="radio-inline">
                    <input type="radio" name="registro[genero]" value="1" name="registro[genero]" required>Hombre
                </label>
            </div>
            <div class="col-xs-2">
                <label class="radio-inline">
                    <input type="radio" name="registro[genero]" value="0" name="registro[genero]" required="">Mujer
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

<?php include("/../../../Templates/Backend/foot.php") ?>
<?php include("/../../../Templates/Backend/footer.php") ?>