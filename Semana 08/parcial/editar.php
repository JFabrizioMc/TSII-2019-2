<?php
$pdo = new PDO("mysql:host=localhost;dbname=parcial;charset=utf8;", "root", "");
$codigo = intval($_GET["codigo"]);
$query = "SELECT * FROM eventos WHERE codigo = '$codigo'";
$inscrito = $pdo->query($query)->fetch();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar inscripción</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    
    <?php include 'menu.php' ?>

    <h1>Editar inscripción</h1>

    <form action="editar_procesar.php" method="post">
        <input type="hidden" name="p_codigo" value="<?php echo $codigo ?>" />
        <div>
            Nombres: <input type="text" name="p_nombres" value="<?php echo $inscrito["nombres"] ?>" />
        </div>

        <div>
            Correo: <input type="email" name="p_correo" value="<?php echo $inscrito["correo"] ?>" />
        </div>

        <div>
            Cargo: 
            <select name="p_cargo">
                <option value="Gerente General" <?php if ($inscrito["cargo"] == "Gerente General") { echo "selected"; } ?> >Gerente General</option>
                <option value="Administrativo" <?php if ($inscrito["cargo"] == "Administrativo") { echo "selected"; } ?> >Administrativo</option>
                <option value="Alumno" <?php if ($inscrito["cargo"] == "Alumno") { echo "selected"; } ?> >Alumno</option>
                <option value="Profesor" <?php if ($inscrito["cargo"] == "Profesor") { echo "selected"; } ?> >Profesor</option>
            </select>
        </div>

        <div>
            ¿Desea suscribirse? 
            <input type="checkbox" name="p_sus" value="si" <?php if ($inscrito["suscrito"] == "1") { echo "checked"; } ?>  />
        </div>

        <button>Actualizar</button>
    
    </form>

</body>
</html>