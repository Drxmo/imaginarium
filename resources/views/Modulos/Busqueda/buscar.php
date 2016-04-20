<?php include("/../../Templates/Backend/head.php") ?>
<?php include("/../../Templates/Backend/header.php") ?>





<div class="container container-fluid loginX" style="padding-left: 315px !important;
     padding-right: 315px;">
    <form class="form-signin" id="formvalidate" novalidate method="post" action="<?php echo url("/busqueda/busqueda/search") ?>">
        <h2 class="form-signin-heading lightcyan">Buscar</h2>
        <input type="text"  autofocus placeholder="Usuario" class="form-control" name="string">
        <!--<input type="password" placeholder="Contraseña" class="form-control"  name="seguridad[pass]">-->
        <button type="submit" class="btn btn-lg btn-primary btn-block">Identificarse</button>
        <a href="<?php echo url("/usuarios/usuarios/registro") ?>" class="icon-aircraft-landing">Registrarse</a>
        <?php if (Session::has('usuarioInvalido') === true): ?>
            <br>
            <div class="alert alert-danger" role="alert"><?php echo Session::get('usuarioInvalido'); ?></div>
            <?php Session::forget('usuarioInvalido'); ?>
        <?php endif; ?>
        <?php if (Session::has('registroSuccess') === true): ?>
            <br>
            <div class="alert alert-success" role="alert"><?php echo Session::get('registroSuccess'); ?></div>
            <?php Session::forget('registroSuccess'); ?>
        <?php endif ?>
    </form>  
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<script>

    $(document).ready(function () {
        // validate the comment form when it is submitted
        //$("#feedback_form").validate();
        

        // validate signup form on keyup and submit
        $("#formvalidate").validate({
            rules: {
                "seguridad[user]": {
                    required: true
                },
                "seguridad[pass]": {
                    required: true
                }
                },
                messages: {
                    "seguridad[user]": {
                        required: "Ingrese UserName."
                    },
                    "seguridad[pass]": {
                        required: "Ingrese Password."
                    }
                    //agree: "Please accept our terms & condition."
                }
            });
    });










</script>




<?php include("/../../Templates/Backend/foot.php") ?>
<?php include("/../../Templates/Backend/footer.php") ?>



