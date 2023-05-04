<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  
    <form action="insert_categoria.php" method="POST">

<label>categoria de produto</label>
<input type="text" value="" name="categoria" >
<input type="submit" value="cadastrar">
</form>

<label>cadastrar produto</label>
    <table border= "1">
  <tr>

    <th>Id</th>
    <th>nome</th>
    <th>porcao</th>
    <th>preco</th>
    
  </tr>
  <?php if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) { ?>
  <tr>
      <td><?php echo $row["id"]; ?></td>
      <td><?php echo $row["nome"]; ?></td>
      <td><?php echo $row["porcao"]; ?></td>
      <td><?php echo $row["preco"]; ?></td>
      
         <td><a href= "atvp6.php?id=<?php echo $row['id']?>">Excluir:</a></td>
   <td><a href= "atvp7.php?id=<?php /*echo $row['id'] */?>">Editar:</a></td>
  </tr>
 <?php } } ?>
</table>

   
</body>
</html>