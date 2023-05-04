<?php 

include("conexao.php");

$cliente = $_GET["id"];
$sql = "select * from usuario where id_usuario = '$cliente' ";
$result = mysqli_query($conexao,$sql);

if (mysqli_num_rows($result) > 0) {

    while($row = mysqli_fetch_assoc($result)) {
        $id_usuario = $row["id_usuario"];
        $nome = $row["nome"];
        $email = $row["email"];
        $cpf = $row["cpf"];
        $endereco = $row["endereco"];
        $telefone = $row["telefone"];
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
<form method="POST" action="update_usuario.php">
        <input type="hidden" name="id_usuario" value="<?php echo $id_usuario?>">
        <label>Nome:</label>
        <input  id="input_nome" type="text" name="nome" value="<?php echo $nome?>">
<br>
<br>
        <label>Email:</label>
        <input type="email" name="email" value="<?php echo $email?>">
<br>
<br>
        <label>Cpf:</label>
        <input type="text" name="cpf" value="<?php echo $cpf?>">
<br>
<br>
        <label>Endereço:</label>
        <input type="text" name="endereco" value="<?php echo $endereco?>">
<br>
<br>
        <label>Telefone:</label>
        <input type="text" name="telefone" value="<?php echo $telefone?>">
<br>
        <input type="submit" value="Editar" >
<br>
<br>    
</body>
</html>