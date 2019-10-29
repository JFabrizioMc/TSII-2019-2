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
    <h1>Iniciar sesión</h1>
    
    <form action="procesar_login.php" method="post">    
        <div>
            <label for="n">Nickname</label>
            <input type="text" name="nickname" id="n">
        </div>

        <div>
            <label for="p">Contraseña</label>
            <input type="password" name="password" id="p">
        </div>
        <button>Iniciar sesión</button>
    </form>
</body>
</html>