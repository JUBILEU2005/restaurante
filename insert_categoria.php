<?php

include("conexao.php");

$categoria = $_POST['categoria'];

if($categoria == "" ){
   include_once("categoria_produto.php");
?>
   <script>
   alert("Você tem que preencher todos os campos.");
   </script>
<?php
}else{
$sql = "INSERT INTO categorias (nome) VALUES  ('$categoria' )";
 if (mysqli_query($conexao, $sql)){
echo"Informaçoes armazenadas com sucesso";
header("Location: administrador.php");
 }
 else{
     echo 'erro';
 }

}

?>