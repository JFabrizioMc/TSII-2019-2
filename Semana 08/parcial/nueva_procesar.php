<?php
# Entrada
$nombres = $_POST["p_nombres"];
$correo = $_POST["p_correo"];
$cargo = $_POST["p_cargo"];

#$suscrito = isset($_POST["p_sus"]) ? 1 : 0;

if (isset($_POST["p_sus"])) {
    $suscrito = 1;
}
else {
    $suscrito = 0;
}

# Proceso
$pdo = new PDO("mysql:host=localhost;dbname=parcial;charset=utf8;", "root", "");
$query = "INSERT INTO eventos VALUES (NULL, '$nombres', '$correo', '$cargo', '$suscrito')";

#die($query);

$pdo->query($query);


# Salida
header("Location: index.php");
?>