<?php
include("conexao.php");


$id_produto = $_POST['id_produto'];
$nome = $_POST['nome'];
$preco = $_POST['preco'];
$quantidade = $_POST['quantidade'];
$porcao = $_POST['porcao'];
$categoria = $_POST['categoria'];
$sql = "UPDATE produtos SET nome='$nome',preco='$preco',quantidade='$quantidade',porcao='$porcao',categoria='$categoria' WHERE id_produto='$id_produto'";

if (mysqli_query($conexao, $sql)) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . mysqli_error($conexao);
}

mysqli_close($conexao);
?>