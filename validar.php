<?php

include("conexao.php");

$email = $_POST["emai"];
$senha = $_POST["senha"];

$sql = "SELECT * from usuario where email = '$email' && senha = '$senha'";
$resultado = mysqli_query($conexao, $sql);

if(mysqli_num_rows($resultado) > 0){
    while($row = mysqli_fetch_assoc($resultado)){
    
    if($row['tipo_usuario'] == 1){
        header('Location: administrador.php');        
    }else if($row['tipo_usuario'] == 2){
        header('Location: garcom.php');
    }else if($row['tipo_usuario'] == 3){
        header('Location: gerente.php');
    }
    else if($row['tipo_usuario'] == 4){
        header('Location: cardapio.php');
    }
    
    }
    
}
else{
    echo "Acesso não autorizado";
}
?>