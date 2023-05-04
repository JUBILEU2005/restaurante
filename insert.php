<?php

include("conexao.php");

$nasci = $_POST['nascimento'];
$nome = $_POST['nm'];
$email = $_POST['emai'];
$ss = $_POST['senh'];
$cpf = $_POST['cpf'];
$endereco = $_POST['rua'];  
$telefone = $_POST['tel'];
$rg = $_POST['rg'];
$escola = $_POST['escola'];
if($nasci == "" or $nome == "" or $email == "" or $ss == "" or $cpf == "" or $endereco == "" or $telefone == "" or $rg == "" or $escola == ""){
   include_once("cadastra.php");
?>
   <script>
   alert("Você tem que preencher todos os campos.");
   </script>
<?php
}else{
$sql = "INSERT INTO usuario (data_nascimento ,nome, senha, email, tipo_usuario, rg, endereco, escolaridade, telefone, cpf ) VALUES  ('$nasci' ,'$nome', '$ss', '$email',4 , '$rg', '$endereco', '$escola', '$telefone', '$cpf')";
 if (mysqli_query($conexao, $sql)){
echo"Informaçoes armazenadas com sucesso";
header("Location: login.php");
 }
 else{
     echo 'erro';
 }

}

?>