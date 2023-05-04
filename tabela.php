<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$db = "email";

$conexao = mysqli_connect($servidor, $usuario, $senha, $db);

$sql = "CREATE TABLE conta(
 id int(11) NOT NULL AUTO_INCREMENT,   
 nome VARCHAR(300),
 senha VARCHAR(300),
 email VARCHAR(300),
 cpf VARCHAR(14) NOT NULL,
 escolaridade VARCHAR(300), 
 PRIMARY KEY (id)
 )";
if (mysqli_query($conexao, $sql)) {
    echo "Tabela criada com sucesso";
}else{
    echo "Erro ao criar tabela" + mysqli_error($conexao);
}

mysqli_close($conexao);

?>