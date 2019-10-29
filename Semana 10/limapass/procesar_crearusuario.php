<?php
# Entrada
$nickname = $_POST["nickname"];
$correo = $_POST["correo"];
$password1 = $_POST["password1"];
$password2 = $_POST["password2"];
$dni = $_POST["dni"];

# Verificar que los password sean iguales
if ($password1 != $password2) {
    header("Location: crearusuario.php?error=password");
    exit;
}

# Verificar que el nickname no esté en uso
$pdo = new PDO("mysql:host=localhost;dbname=limapass;charset=utf8", "root", "");
$query = "SELECT * FROM usuarios WHERE nickname = '$nickname'";
$usuarios = $pdo->query($query)->fetchAll();

if (count($usuarios) > 0) {
    header("Location: crearusuario.php?error=nickname");
    exit;
}

# Verificar que el dni no esté en uso
$pdo = new PDO("mysql:host=localhost;dbname=limapass;charset=utf8", "root", "");
$query = "SELECT * FROM usuarios WHERE dni = '$dni'";
$usuarios = $pdo->query($query)->fetchAll();

if (count($usuarios) > 0) {
    header("Location: crearusuario.php?error=dni");
    exit;
}

# Guardar usuario en la tabla 'usuarios'
$hash = password_hash($password1, PASSWORD_DEFAULT);
$query = "INSERT INTO usuarios VALUES (NULL, '$nickname', '$hash', '$dni', SYSDATE(), SYSDATE(), '$correo')";
$pdo->query($query);

# Enviar correo de bienvenida
$mensaje = "Hola $nickname, bienvenide a LimaPass.";
mail($correo, "Bienvenide a LimaPass 🚌", $mensaje, "From: admin@localhost");

session_start();
$_SESSION["nickname"] = $nickname;
header("Location: index.php");
?>