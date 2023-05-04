<?php 

include("conexao.php");

$cliente = $_GET["id"];
$sql = "select * from categorias where id_categoria = '$cliente' ";
$result = mysqli_query($conexao,$sql);

if (mysqli_num_rows($result) > 0) {

    while($row = mysqli_fetch_assoc($result)) {
        $id_categoria = $row["id_categoria"];
        $nome_sobremesa = $row["nome_sobremesa"];
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
<form method="POST" action="update_categoria.php">
        <input type="hidden" name="id_categoria" value="<?php echo $id_categoria?>">
        <label>nome_sobremesa:</label>
        <input  id="input_nome" type="text" name="nome_sobremesa" value="<?php echo $nome_sobremesa?>">
<br>
<br>
       
        <input type="submit" value="Editar" >
<br>
<br>    
</body>
</html>