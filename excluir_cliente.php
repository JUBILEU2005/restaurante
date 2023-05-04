<?php
include("conexao.php");


$number = $_GET['id'];

$del = "DELETE FROM usuario WHERE id_usuario = '$number'";

mysqli_query($conexao, $del);

include_once ("administrador.php");
?>