<?php
include("conexao.php");


$id_usuario = $_POST['id_usuario'];
$nome = $_POST['nome'];
$email = $_POST['email'];
$cpf = $_POST['cpf'];
$endereco = $_POST['endereco'];
$telefone = $_POST['telefone'];
$sql = "UPDATE usuario SET nome='$nome',email='$email',cpf='$cpf',endereco='$endereco',telefone='$telefone' WHERE id_usuario='$id_usuario'";

if (mysqli_query($conexao, $sql)) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . mysqli_error($conexao);
}

mysqli_close($conexao);
?>