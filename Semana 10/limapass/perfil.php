<?php
session_start();
# Validar que el usuario está logueado
if (!isset($_SESSION["nickname"])) {
    header("Location: index.php");
    exit;
}
$nickname = $_SESSION["nickname"];
$pdo = new PDO("mysql:host=localhost;dbname=limapass;charset=utf8", "root", "");
$query = "SELECT * FROM usuarios WHERE nickname = '$nickname'";
$usuario = $pdo->query($query)->fetch();
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
<h1>Actualizar perfil</h1>
<form action="procesar_perfil.php" method="post">
<div>
    <label>Nickname</label>
    <input type="text" name="nickname" value="<?php echo $usuario["nickname"] ?>">
</div>
<div>
    <label>Correo</label>
    <input type="email" name="correo" value="<?php echo $usuario["correo"] ?>">
</div>
<div>
    <label>DNI</label>
    <input type="number" name="dni" value="<?php echo $usuario["dni"] ?>">
</div>
<button>Actualizar perfil</button>
</form>    
</body>
</html>