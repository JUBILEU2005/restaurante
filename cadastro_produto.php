<?php

include("conexao.php");
$sql = "SELECT * FROM porcao";
$result = mysqli_query($conexao, $sql);
$sql1 = "SELECT * FROM categorias";
$result1 = mysqli_query($conexao, $sql1);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="insert_produto200.php" method="POST">

<h3>cadastro de produtos</h3>
<label>nome</label>
<input type="text" value="" name="nome" >
<label>preco</label>
<input type="text" value="" name="preco" >
<label>porcao</label>
<select name="porcao">
<?php if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) { ?>
    <option value="<?php echo $row['id_porcao'] ?>"> <?php echo $row['descricao'] ?> </option>
    <?php }} ?>
</select>
<label>categoria</label>
<select name="categoria">
<?php if (mysqli_num_rows($result1) > 0) {
    while($row1 = mysqli_fetch_assoc($result1)) { ?>
    <option value="<?php echo $row1['id_categoria'] ?>"> <?php echo $row1['nome_sobremesa'] ?> </option>
    <?php }} ?>
</select>
<input type="submit" value="cadastrar">
</form>
</body>
</html>