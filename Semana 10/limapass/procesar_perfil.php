<?php
session_start();

$n = $_POST["nickname"];
$c = $_POST["correo"];
$d = $_POST["dni"];

$no = $_SESSION["nickname"];

$query = "UPDATE usuarios SET nickname='$n', correo='$c', dni='$d' WHERE nickname='$no'";

$pdo = new PDO("mysql:host=localhost;dbname=limapass;charset=utf8", "root", "");

$pdo->query($query);

$_SESSION["nickname"] = $n;

header("Location: index.php");

?>