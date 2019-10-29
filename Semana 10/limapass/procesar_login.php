<?php
$nickname = $_POST["nickname"];
$password = $_POST["password"];

$pdo = new PDO("mysql:host=localhost;dbname=limapass;charset=utf8", "root", "");
$query = "SELECT * FROM usuarios WHERE nickname = '$nickname'";
$usuarios = $pdo->query($query)->fetchAll();

if (count($usuarios) == 0) {
    header("Location: login.php?error=nickname");
    exit;
}

$usuario = $usuarios[0];
$hash_bd = $usuario["password"];

if (password_verify($password, $hash_bd)) {
    $query = "UPDATE usuarios SET fecha_ultimo_acceso = SYSDATE() WHERE nickname = '$nickname'";
    $pdo->query($query);

    session_start();
    $_SESSION["nickname"] = $nickname;
    header("Location: index.php");
} else {
    header("Location: login.php?error=password");
}
?>