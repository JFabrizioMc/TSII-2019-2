<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nueva inscripción</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    
    <?php include 'menu.php' ?>

    <h1>Nueva inscripción</h1>

    <form action="nueva_procesar.php" method="post">
    
        <div>
            Nombres: <input type="text" name="p_nombres" />
        </div>

        <div>
            Correo: <input type="email" name="p_correo" />
        </div>

        <div>
            Cargo: 
            <select name="p_cargo">
                <option value="Gerente General">Gerente General</option>
                <option value="Administrativo">Administrativo</option>
                <option value="Alumno">Alumno</option>
            </select>
        </div>

        <div>
            ¿Desea suscribirse? 
            <input type="checkbox" name="p_sus" value="si" />
        </div>

        <button>Enviar</button>
    
    </form>

</body>
</html>