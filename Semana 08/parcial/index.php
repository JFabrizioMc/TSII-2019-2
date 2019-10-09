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
</head>
<body>
    <h1>Lista de inscritos</h1>

    <table>
        <tr>
            <th>Código</th>
            <th>Nombres</th>
            <th>Correo</th>
            <th>Cargo</th>
            <th>¿Suscrito?</th>
        </tr>

        <?php foreach ($pdo->query($query) as $inscrito) { ?>
        <tr>
            <td><?php echo $inscrito["codigo"] ?></td>
            <td><?php echo $inscrito["nombres"] ?></td>
            <td><?php echo $inscrito["correo"] ?></td>
            <td><?php echo $inscrito["cargo"] ?></td>
            <td><?php if ($inscrito["suscrito"] == 1) { echo "😀"; } else { echo "✖️"; } ?></td>
        </tr>        
        <?php } ?>

    </table>
</body>
</html>