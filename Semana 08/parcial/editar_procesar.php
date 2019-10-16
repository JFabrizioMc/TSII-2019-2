<?php
# Entrada
$c = $_POST["p_codigo"];
$n = $_POST["p_nombres"];
$e = $_POST["p_correo"];
$ca = $_POST["p_cargo"];
$s = isset($_POST["p_sus"]) ? 1 : 0;

# Proceso
$pdo = new PDO("mysql:host=localhost;dbname=parcial;charset=utf8;", "root", "");
$query = "UPDATE eventos SET nombres='$n', correo='$e', cargo='$ca', suscrito='$s' WHERE codigo='$c'";
#die($query);
$pdo->query($query);

# Salida
header("Location: index.php");
?>