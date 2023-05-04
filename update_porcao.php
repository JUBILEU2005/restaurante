<?php
include("conexao.php");


$id_porcao = $_POST['id_porcao'];
$descricao = $_POST['descricao'];
$sql = "UPDATE porcao SET descricao='$descricao' WHERE id_porcao='$id_porcao'";

if (mysqli_query($conexao, $sql)) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . mysqli_error($conexao);
}

mysqli_close($conexao);
?>