<?php
include("conexao.php");


$number = $_GET['id'];

$del = "DELETE FROM categorias WHERE id_categoria = '$number'";

mysqli_query($conexao, $del);

include_once ("listar_categorias.php");
?>