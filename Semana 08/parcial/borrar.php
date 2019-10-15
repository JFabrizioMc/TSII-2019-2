<?php
# Entrada
$codigo = $_GET["codigo"];

# Proceso
$pdo = new PDO("mysql:host=localhost;dbname=parcial;charset=utf8;", "root", "");
$query = "DELETE FROM eventos WHERE codigo = '$codigo'";
$pdo->query($query);

# Salida
header("Location: index.php");
?>