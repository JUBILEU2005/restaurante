<?php
include("conexao.php");

$sql = "SELECT id_produto, nome,preco,quantidade,nome_sobremesa, descricao from produtos INNER JOIN categorias INNER JOIN porcao on produtos.categoria = categorias.id_categoria and produtos.porcao = porcao.id_porcao";
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
<body>
<table border= "1">
<tr>
  <th>Nome</th>
  <th>Preço</th>
  <th>Quantidade</th>
  <th>Porcao</th>
  <th>descrição</th>
  
</tr>
<?php if (mysqli_num_rows($result) > 0) {
  while($row = mysqli_fetch_assoc($result)) { ?>
<tr>
    <td><?php echo $row["nome"]; ?></td>
    <td><?php echo $row["preco"]; ?></td>
    <td><?php echo $row["quantidade"]; ?></td>
    <td><?php echo $row["nome_sobremesa"]; ?></td>
    <td><?php echo $row["descricao"]; ?></td>
    <td><a href= "excluir_produtos.php?id=<?php echo $row['id_produto'] ?>">Excluir:</a></td>
    <td><a href= "editar_produtos.php?id=<?php echo $row['id_produto'] ?>">Editar:</a></td>
</tr>
<?php } } ?>
  </table>
  
</body>
</html>
