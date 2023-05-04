<?php

include("conexao.php");

$porcao = $_POST['porc'];

if($porcao == ""){
    header("form_porcao.php");
 ?>
    <script>
    alert("Você tem que preencher todos os campos.");
    </script>
 <?php
}else{
    $sql = "INSERT INTO porcao (descricao) VALUES  ('$porcao' )";
     if (mysqli_query($conexao, $sql)){
    echo"Informaçoes armazenadas com sucesso";
    //header("Location: listar_produto.php");
     }
     else{
         echo 'erro';
     }
    
    }


?>