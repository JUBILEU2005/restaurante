<?php 

include("conexao.php");

$cliente = $_GET["id"];
$sql = "select * from produtos where id_produto = '$cliente' ";
$result = mysqli_query($conexao,$sql);

if (mysqli_num_rows($result) > 0) {

    while($row = mysqli_fetch_assoc($result)) {
        $id_produto = $row["id_produto"];
        $nome = $row["nome"];
        $preco = $row["preco"];
        $quantidade = $row["quantidade"];
        $porcao = $row["porcao"];
        $categoria = $row["categoria"];
    }
}   else {
    echo " 0 resultados";
}
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
<h1>Cadastro</h1>

<div class="input">
<form method="POST" action="update_produto.php">
        <input type="hidden" name="id_produto" value="<?php echo $id_produto?>">
        <label>Nome:</label>
        <input  id="input_nome" type="text" name="nome" value="<?php echo $nome?>">
<br>
<br>
        <label>preco:</label>
        <input type="text" name="preco" value="<?php echo $preco?>">
<br>
<br>
        <label>quantidade:</label>
        <input type="text" name="quantidade" value="<?php echo $quantidade?>">
<br>
<br>
        <label>porcao:</label>
        <input type="text" name="porcao" value="<?php echo $porcao?>">
<br>
<br>
        <label>categoria:</label>
        <input type="text" name="categoria" value="<?php echo $categoria?>">
<br>
        <input type="submit" value="Editar" >
<br>
<br>    
</body>
</html>