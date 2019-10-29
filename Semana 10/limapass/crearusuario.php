<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="limapass.css">
</head>
<body>
<?php include 'menu.php' ?>
    <h1>Crear cuenta de usuario</h1>

    <?php if (isset($_GET["error"]) && $_GET["error"] == "password") { ?>
        <p>Las contraseñas no coinciden.</p>
    <?php } ?>

    <?php if (isset($_GET["error"]) && $_GET["error"] == "nickname") { ?>
        <p>El nombre de usuario ya está en uso.</p>
    <?php } ?>

    <form action="procesar_crearusuario.php" method="post">
        <div>
            <label>Nickname</label>
            <input type="text" name="nickname">
        </div>
        <div>
            <label>Correo</label>
            <input type="email" name="correo">
        </div>
        <div>
            <label>Contraseña</label>
            <input type="password" name="password1">
        </div>
        <div>
            <label>Confirmar Contraseña</label>
            <input type="password" name="password2">
        </div>
        <div>
            <label>DNI</label>
            <input type="number" name="dni">
        </div>
        <button>Crear usuario</button>
    </form>
</body>
</html>