<?php

include("conexao.php");
$sql = "SELECT * FROM porcao";
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
    <th>Id Porção</th>
    <th>Decrição</th>  
  </tr>
 <?php if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) { ?>
  <tr>
      <td><?php echo $row["id_porcao"]; ?></td>
      <td><?php echo $row["descricao"]; ?></td>     
      <td><a href= "excluir_porcao.php?id=<?php echo $row['id_porcao'] ?>">Excluir:</a></td>
      <td><a href= "editar_porcao.php?id=<?php echo $row['id_porcao'] ?>">Editar:</a></td>
  </tr>
 <?php } } ?>
</table>
</body>
</html>