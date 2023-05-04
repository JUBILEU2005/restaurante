<?php
include("conexao.php");


$id_categoria = $_POST['id_categoria'];
$nome_sobremesa = $_POST['nome_sobremesa'];
$sql = "UPDATE categorias SET nome_sobremesa='$nome_sobremesa' WHERE id_categoria='$id_categoria'";

if (mysqli_query($conexao, $sql)) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . mysqli_error($conexao);
}

mysqli_close($conexao);
?>