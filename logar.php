
<?php

session_start();

$servidor = "localhost";
$usuario = "root";
$senha = "";
$db = "email";

$conexao = mysqli_connect($servidor, $usuario, $senha, $db);

$senh = $_POST['senha'];
$email = $_POST['emai'];


$sql = "SELECT * FROM conta WHERE email = '$email' and senha = '$senh' limit 1";
$resultado_usuario = mysqli_query($conexao, $sql);
$resultado = mysqli_fetch_assoc($resultado_usuario);
 
if($resultado){
    $_SESSION['id'] = $resultado['id'];
    $_SESSION['senha'] = $resultado['senha'];
    $_SESSION['nome'] = $resultado['nome'];
    $_SESSION['email'] = $resultado['email'];
    header("Location: home.php");


}


?>