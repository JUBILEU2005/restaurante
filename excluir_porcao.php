<?php
include("conexao.php");


$number = $_GET['id'];

$del = "DELETE FROM porcao WHERE id_porcao = '$number'";

mysqli_query($conexao, $del);

include_once ("listar_porcao.php");
?>