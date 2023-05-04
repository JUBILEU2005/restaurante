<?php

include("conexao.php");
$sql = "SELECT * FROM usuario inner join escolaridade where escolaridade.id_escolaridade = usuario.escolaridade";
$result = mysqli_query($conexao, $sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<style>
  @import url('https://fonts.googleapis.com/css?family=Poppins:400,700,900');
*
{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'poppins', sans-serif;
}

.centro{
  position: relative;
  display: flex;
  justify-content: center;
  align-items: center;
  }
</style>

<body>
  <?php
echo "<a href='cadastra_gerente.php'>Cadastre Gerente</a><br>";
echo "<a href='cadastra_garco.php'>Cadastre Garçom</a><br>";
echo "<a href='produto.php'>Estoque de produtos</a><br>";
echo "<a href='cadastro_produto.php'>cadastro de produtos</a><br>";
echo "<a href='categoria_produto.php'>categoria de produtos</a><br>";
echo "<a href='form_porcao.php'>cadastro de porcao</a><br>";
echo "<a href='listar_produtos.php'>Produtos e suas porções</a><br>";
echo "<a href='listar_categorias.php'>Categorias de Produtos</a><br>";
echo "<a href='mesa.php'>Mesas</a><br>";
echo "<a href='listar_porcao.php'>Porções de Produtos</a>";
  ?>
  <div class="centro">
<table border= "1">
  <tr>
    <th>Id</th>
    <th>Nome</th>
    <th>Data de Nascim.</th>
    <th>Telefone</th>
    <th>Endereço</th>
    <th>CPF</th>
    <th>RG</th>
    <th>Escolaridade</th>
    <th>Email</th>  
  </tr>
 <?php if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) { ?>
  <tr>
      <td><?php echo $row["id_usuario"]; ?></td>
      <td><?php echo $row["nome"]; ?></td>
      <td><?php echo $row["data_nascimento"]; ?></td>
      <td><?php echo $row["telefone"]; ?></td>
      <td><?php echo $row["endereco"]; ?></td>
      <td><?php echo $row["cpf"]; ?></td>
      <td><?php echo $row["rg"]; ?></td>
      <td><?php echo $row["descricao"]; ?></td>
      <td><?php echo $row["email"]; ?></td>     
      <td><a href= "excluir_cliente.php?id=<?php echo $row['id_usuario'] ?>">Excluir:</a></td>
      <td><a href= "editar_cliente.php?id=<?php echo $row['id_usuario'] ?>">Editar:</a></td>
  </tr>
 <?php } } ?>
</table>
</div>


</body>
</html>