<?php
include("conexao.php");

$descricao = $_POST['mesa'];

if($descricao == "" ){
    include_once("cadastra_mesa.php");
 ?>
    <script>
    alert("Você tem que preencher todos os campos.");
    </script>
 <?php
 }else{
 $sql = "INSERT INTO mesa (descricao) VALUES  ('$descricao' )";
  if (mysqli_query($conexao, $sql)){
 echo"Informaçoes armazenadas com sucesso";
 header("Location: mesa.php");
  }
  else{
      echo 'erro';
  }
 
 }
?>