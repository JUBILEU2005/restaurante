<?php
include("conexao.php");


$number = $_GET['id'];

$del = "DELETE FROM produtos WHERE id_produto = '$number'";

mysqli_query($conexao, $del);

include_once ("listar_produtos.php");
?>