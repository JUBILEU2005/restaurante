<?php

include("conexao.php");
$sql = "SELECT * FROM categorias";
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
    <th>Id Categoria</th>
    <th>Nome Sobremesa</th>  
  </tr>
 <?php if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) { ?>
  <tr>
      <td><?php echo $row["id_categoria"]; ?></td>
      <td><?php echo $row["nome_sobremesa"]; ?></td>     
      <td><a href= "excluir_categoria.php?id=<?php echo $row['id_categoria'] ?>">Excluir:</a></td>
      <td><a href= "editar_categoria.php?id=<?php echo $row['id_categoria'] ?>">Editar:</a></td>
  </tr>
 <?php } } ?>
</table>
</body>
</html>
