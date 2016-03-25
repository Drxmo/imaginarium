


<section class="main container regcontainer">
    <div class="row">
        <div class="jumbotron boxuser boxuserX">
            <form class="form-horizontal" action="<?php echo Url() ?>index.php/seguridad/crearSitio" method="post">
                <div class="form-group">
                    
                    <div class="form-group">
                        <label class="control-label col-xs-3">Nombre Sitio:</label>
                        <div class="col-xs-9">
                        <input type="text" class="form-control" id="nombre" name="sitios[nombre]">
                    </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-xs-3">Descripcion Sitio</label>
                        <div class="col-xs-9">
                            <textarea class="form-control" id="descripcionSitio" name="sitios[descripcion]"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-xs-3">Categoria de Sitio</label>
                        <div class="col-xs-6">
                            <input type="text" required class="form-control" id="direccionSitio" name="sitios[catId]">
                        </div>
                    </div> 
                    <div class="form-group">
                        <label class="control-label col-xs-3">Estado de Sitio</label>
                        <div class="col-xs-6">
                            <input type="text" required lass="form-control" id="direccionSitio" name="sitios[estadoId]">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-xs-3">usuario de Sitio</label>
                        <div class="col-xs-6">
                            <input type="text" class="form-control" id="direccionSitio" name="sitios[usuId]">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-xs-3">Direccion de Sitio</label>
                        <div class="col-xs-6">
                            <input type="text" class="form-control" id="direccionSitio" name="sitios[direccion]">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-xs-3">Telefono Sitio</label>
                        <div class="col-xs-6">
                            <input type="text" class="form-control" id="telefonoSitio" name="sitios[telefono]">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-xs-3">Latitud Sitio</label>
                        <div class="col-xs-6">
                            <input type="text" class="form-control" id="latitudSitio" name="sitios[latitud]">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-xs-3">Longitud Sitio</label>
                        <div class="col-xs-6">
                            <input type="text" class="form-control" id="longitudSitio" name="sitios[longitud]">
                        </div>
                    </div>                             
                    <div class="form-group">
                        <label class="control-label col-xs-3">Facebook Sitio</label>
                        <div class="col-xs-6">

                            <input type="text" class="form-control" id="facebookSitio" name="sitios[facebook]">    
                        </div>

                    </div>
                    <div class="form-group">
                        <label class="control-label col-xs-3">Twitter Sitio</label>
                        <div class="col-xs-6">

                            <input type="text" class="form-control" id="twitterSitio" name="sitios[twitter]">    
                        </div>

                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3">Google Sitio</label>
                        <div class="col-xs-6">

                            <input type="text" class="form-control" id="googleSitio" name="sitios[google]">    
                        </div>

                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3">Cargar Imagen</label>
                        <div class="col-xs-6">

                            <input type="file" id="imgSitio" name="sitios[img]">    
                        </div>

                    </div>

                    <br>
                    <div class="form-group">
                        <div class="col-xs-offset-3 col-xs-9">
                            <input type="submit" class="btn btn-default" value="Registrar">
                            <a href="<?php echo $fsConfig->getUrl() ?>index.php/home/index" class="btn btn-default btn-cancel" value="Guardar">Cancelar</a>
                        </div>
                    </div>

                </div>
            </form>
        </div>
</section>


<?php include_once ('/../../Templates/Frontend/foot.php') ?>