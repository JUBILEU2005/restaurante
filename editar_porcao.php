<?php 

include("conexao.php");

$cliente = $_GET["id"];
$sql = "select * from porcao where id_porcao = '$cliente' ";
$result = mysqli_query($conexao,$sql);

if (mysqli_num_rows($result) > 0) {

    while($row = mysqli_fetch_assoc($result)) {
        $id_porcao = $row["id_porcao"];
        $descricao = $row["descricao"];
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
<h1>Porcao</h1>

<div class="input">
<form method="POST" action="update_porcao.php">
        <input type="hidden" name="id_porcao" value="<?php echo $id_porcao?>">
        <label>descricao:</label>
        <input  id="input_nome" type="text" name="descricao" value="<?php echo $descricao?>">
<br>
<br>
<input type="submit" value="Editar" >
</body>
</html>