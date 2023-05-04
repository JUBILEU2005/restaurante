<?php
include("conexao.php");


$id_mesa = $_POST['id_mesa'];
$descricao = $_POST['descricao'];
$sql = "UPDATE mesa SET descricao='$descricao' WHERE id_mesa='$id_mesa'";

if (mysqli_query($conexao, $sql)) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . mysqli_error($conexao);
}

mysqli_close($conexao);
?>