<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "restuarante";


$conexao = mysqli_connect($servidor, $usuario, $senha, $banco);

if(!$conexao){
    echo("falha na conexao" + mysqli_connect_error());
}


?>