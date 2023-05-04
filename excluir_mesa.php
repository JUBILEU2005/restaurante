<?php
include("conexao.php");


$number = $_GET['id'];

$del = "DELETE FROM mesa WHERE id_mesa = '$number'";

mysqli_query($conexao, $del);

include_once ("mesa.php");
?>