<?php 
include("conexao.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Burguer Meet</title>
    <link href="css/style.css" rel="stylesheet" />
</head>
<body>
    <style>
        *{
  margin:0;
  padding:0;
  box-sizing: border-box;
  font-family: Verdana, Geneva, Tahoma, sans-serif;
}

.center{
    display: flex ;
    flex-wrap: wrap ;
    max-height: 1100px ;
    margin: 0 auto ;
    padding: 0 2% ;
}

html,body{
  height: 100%;
  overflow-y: hidden;
  overflow-x: hidden;
}

header{
    height: 200px;
  padding: 20px 0;
}

.logo{
    width: 50%;
}

.menu{
    padding-top: 30px;
    width: 50%;
    text-align: right;
}

.menu a{
    color: orange;
    text-decoration: none ;
    font-weight: bold ;
    margin-right: 15px;
}

section.sobre{
    height: calc(100% - 200px);
    position: relative;
}

.extras{
    position:absolute;
    bottom: -450px;
    right: -500px;
    width: 1200px;
    height: 1200px;
    border-radius: 50%;
    background-color: orange;
}

.image{
    height: 650px;
    width: 1000px;
    padding-right: 250px;
    padding-top: 100px;
    transform: translatey(0px);
    animation: float 5s ease-in-out infinite;
}

@keyframes float {
  0% {
    transform: translatey(0px);
  }
  50% {
    transform: translatey(40px);
  }
  100% {
    transform: translatey(0px);
  }
}

.social-media{
    position: absolute;
    left: 675px;
    top: 200px;
}

.social-media img{
    display: block;
    width: 20px;
    margin: 20px 0;
}

.texto-sobre{
    margin-top:100px;
}

.texto-sobre h1{
    font-size: 50px;
}

.texto-sobre p{
    margin:20px 0 ;
    color:black ;
    font-size:14px ;
    font-weight:bold ;
    max-width: 800px; ;
}

.texto-sobre button{
    border:0 ;
    background-color:orange ;
    color:white ;
    border-radius: 10px;
    width:80px ;
    height:30px ;
    cursor:pointer ;
}

.container {
    height: 300px;
    overflow-y: scroll;
}


    </style>
    <header>
        <div class="center">
            <div class="logo"><img src="https://imgkub.com/images/2023/03/14/MINEIRINHOf7b4a16d745e772c.png" width="300px" height="200px"></a></div>
            <div class="menu">
            <a href="cadastra.php">Cadastro</a>
            <a href="login.php">Login</a>
            <a href="adm.php">Administração</a>
            <a href="cardapio.php">Cardapio</a>
            </div>
        </div>
    </header>
    <section class="sobre">
        <div class="extras">
            <img class="image" src="https://imgkub.com/images/2023/03/10/burguer_logo-removebg-preview1.png" /></a>
            <div class="social-media">
                <a href=""><img src="https://imgkub.com/images/2023/03/10/Facebook_resized1.png" ></a>
                <a href=""><img src="https://imgkub.com/images/2023/03/10/Twitter_resized1.png" ></a>
                <a href=""><img src="https://imgkub.com/images/2023/03/10/Instagram_resized_21.png" ></a>
            </div>
        </div>
        <div class="center">
           <div class="texto-sobre">
               <h1>Não é apenas uma Hamburgueria <br/>É O <span style="color:orange">MINEIRINHO</span></h1>
           </div>
        </div>
    </section>
</body>
</html>



