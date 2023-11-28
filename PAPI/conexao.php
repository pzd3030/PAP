<?php


$hostname = "localhost";
$bancodedados ="chord_tab_database";
$usuario = "root";
$senha = "";

$mysql = new mysqli($hostname, $usuario, $senha, $bancodedados);
if ($mysqli->connect_errno) {
    echo "Falha ao conectar: (" . $mysqli->connect_errno . ") "   . $mysqli->connect_error;
}
?>
