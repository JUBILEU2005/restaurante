<?php

include("conexao.php");

$preco = $_POST['preco'];
$nome = $_POST['nome'];
$categoria = $_POST['categoria'];
$porcao = $_POST['porcao'];

if($nome == "" or $preco == "" or $categoria == "" or $porcao == "" ){
   include_once("cadastro_produto.php");
?>
   <script>
   alert("Você tem que preencher todos os campos.");
   </script>
<?php
}else{
$sql = "INSERT INTO produtos (nome, preco, categoria, porcao  ) VALUES  ('$nome', '$preco', '$categoria',  '$porcao' )";
 if (mysqli_query($conexao, $sql)){
echo"Informaçoes armazenadas com sucesso";
//header("Location: listar_produto.php");
 }
 else{
     echo 'erro';
 }

}

//SELECT nome,preco,quantidade,nome_sobremesa, descricao from produtos INNER JOIN categorias INNER JOIN porcao on produtos.categoria = categorias.id_categoria and produtos.porcao = porcao.id_porcao;


?>