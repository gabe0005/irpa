<!doctype html>
<html lang="es">
<?php include('_head.php') ?>
<body class="flex center login">
    <div class="card">
        <div class="flex center logo">
            <img src="img/logo-irpa2.png" width="146"/>
        </div>
        <div class="campos">
            <div class="input">
                <h3><i class="material-icons">person</i><span>Nombre de usuario</span></h3>
                <input type="text">
            </div>
            <div class="input error">
                <h3><i class="material-icons">lock</i><span>Contraseña</span></h3>
                <input type="text">
            </div>
        </div>
        <div class="error-msj">
            <i class="material-icons">error</i>
            <p>Hay campos sin completar</p>
        </div>
        <div class="submit">
            <button class="btn">Iniciar sesión</button>
        </div>
    </div>
</body>
</html>
