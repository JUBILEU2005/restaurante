<?php

include("conexao.php");
$sql = "SELECT * FROM mesa";
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
    <th>Id Mesa</th>
    <th>Descrição</th>  
  </tr>
 <?php if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) { ?>
  <tr>
      <td><?php echo $row["id_mesa"]; ?></td>
      <td><?php echo $row["descricao"]; ?></td>     
      <td><a href= "excluir_mesa.php?id=<?php echo $row['id_mesa'] ?>">Excluir:</a></td>
      <td><a href= "editar_mesa.php?id=<?php echo $row['id_mesa'] ?>">Editar:</a></td>
  </tr>
 <?php } } ?>
</table>
<a href="cadastra_mesa.php">Cadastre a sua mesa</a>
</body>
</html>