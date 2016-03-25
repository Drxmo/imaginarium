<?php include_once ('/../../Templates/Frontend/head.php') ?>
<?php include_once ('/../../Templates/Frontend/header.php') ?>

<section class="container container-fluid main">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
            <main>
                <div>
                    <header class="explore-header">
                        <div class="column description">
                            <div class="hgroup">                              
                                <h1 class="section">Sitio</h1>
                                <div class="title-breadcrumbs">
                                    <p class="bc-title">
                                        Restaurante
                                    </p>
                                </div>
                            </div>
                            <p></p>
                            <p>
                                Shopping is a sport, and everyone knows we take our sports very
                                seriously in Massachusetts. Warm up by finding treasures at
                                one-of-a-kind places like the country’s first mobile vintage shop,
                                into shopping overtime at Yankee Candle’s flagship store that’s
                                Then hit the big leagues shopping in Boston, 
                                from the cobblestone streets of the world famous Faneuil Hall
                                Marketplace to the chic store windows on Newbury Street. 
                                If you’re planning on going shopping in Massachusetts,
                                you’re clearly going home a winner
                            </p>
                            <p></p>
                            <section class="groups">
                                <ul>
                                    <li>
                                        <a href="/explore/shopping/antiques">
                                            <span class="Apple-style-span">
                                                Direccion
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/explore/shopping/antiques">
                                            <span class="Apple-style-span">
                                                Telefono
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/explore/shopping/antiques">
                                            <span class="Apple-style-span">
                                                Correo
                                            </span>
                                        </a>
                                    </li>
                                </ul>
                            </section>
                        </div>
                    </header>
                </div>
            </main>
        </div>
        
        
        
        
        
        
        
        
        
        
        
        
        ----
       <?php include_once ('/../../Templates/Frontend/head.php') ?>
<?php include_once ('/../../Templates/Frontend/header.php') ?>


<section class="main container regcontainer">
    <div class="row">
        <div class="jumbotron boxuser boxuserX">
            <form class="form-horizontal" action="" method="post">
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
                            <a href="index.php/home/index" class="btn btn-default btn-cancel" value="Guardar">Cancelar</a>
                        </div>
                    </div>

                </div>
            </form>
        </div>
</section>


<?php include_once ('/../../Templates/Frontend/foot.php') ?> 
        
        
        
        ------
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
            <div class="back">
                <article class="slideuno " >
                    <div class="slides">
                        <img src="<?php echo asset('img/eco.jpg') ?>" alt="Imagen">
                        <img src="<?php echo asset('img/mar.jpg') ?>" alt="Imagen">
                        <img src="<?php echo asset('img/eco.jpg') ?>" alt="Imagen">
                    </div>
            </div>
        </div>
    </div>
</section>

<?php include_once ('/../../Templates/Frontend/footer.php') ?>

