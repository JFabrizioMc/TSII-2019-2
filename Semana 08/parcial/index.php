<?php
$pdo = new PDO("mysql:host=localhost;dbname=parcial;charset=utf8;", "root", "");
$query = "SELECT * FROM eventos";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista de inscritos</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>

    <?php include 'menu.php' ?>

    <h1>Lista de inscritos</h1>

    <table class="tablita">
        <tr>
            <th>Código</th>
            <th>Nombres</th>
            <th>Correo</th>
            <th>Cargo</th>
            <th>¿Suscrito?</th>
            <th colspan="2">Operaciones</th>
        </tr>

        <?php foreach ($pdo->query($query) as $inscrito) { ?>
        <tr>
            <td class="centrado"><?php echo $inscrito["codigo"] ?></td>
            <td><?php echo $inscrito["nombres"] ?></td>
            <td><?php echo $inscrito["correo"] ?></td>
            <td><?php echo $inscrito["cargo"] ?></td>
            <td class="centrado"><?php if ($inscrito["suscrito"] == 1) { echo "😀"; } else { echo "✖️"; } ?></td>
            <td><a href="borrar.php?codigo=<?php echo $inscrito["codigo"] ?>">Eliminar</a></td>
            <td><a href="editar.php?codigo=<?php echo $inscrito["codigo"] ?>">Modificar</a></td>
        </tr>        
        <?php } ?>

    </table>
</body>
</html>