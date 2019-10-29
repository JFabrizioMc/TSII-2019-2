<?php
session_start();
$pdo = new PDO("mysql:host=localhost;dbname=limapass;charset=utf8", "root", "");
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
<h1>Comunidad LimaPass</h1>

<?php if (!isset($_SESSION["nickname"])) { ?>

    <p>Esta página es exclusiva para los usuarios de la comunidad.</p>
    <p>Si quieres formar parte de la comunidad, <a href="crearusuario.php">regístrate aquí.</a></p>

<?php } else { ?>

    <table>
        <tr>
            <th>Código</th>
            <th>Nickname</th>
            <th>Correo</th>
            <th>Fecha de registro</th>
            <th>Último acceso</th>
        </tr>
        <?php foreach ($pdo->query("SELECT * FROM usuarios") as $fila) { ?>
        <tr>
            <td><?php echo $fila["codigo"] ?></td>
            <td><?php echo $fila["nickname"] ?></td>
            <td><?php echo $fila["correo"] ?></td>
            <td><?php echo $fila["fecha_registro"] ?></td>
            <td><?php echo $fila["fecha_ultimo_acceso"] ?></td>
        </tr>
        <?php } ?>
    </table>
    
<?php } ?>
    
</body>
</html>