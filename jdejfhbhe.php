<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="style7.css">
  <title>CARDAPIO</title>

</head>

<body>
<style>

.container h3
{
  color: #fff;
  font-weight: 600;
  font-size: 2em;
  width: 100%;
  text-align: center;
  margin-bottom: 30px;
  letter-spacing: 2px;
  text-transform: uppercase;
}

body 
{
  margin: 0;
  padding: 0;
  height: 100vh;
  width: 100vw;
  background: #FFDB58;
}

.content
{
  height: 520px;
  width: 935px;
  border-radius: 20px;
  overflow: hidden;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}

.navigation
{
  position: absolute;
  bottom: 20px;
  left: 50%;
  transform: translate(-50%);
  display: flex;
}

.bar
{
  width: 70px;
  height: 17px;
  border: 2px solid #fff;
  margin: 6px;
  border-radius: 5px;
  cursor: pointer;
  transition: .6s;
}

.bar:hover
{
  background-color: #fff;
}

input
{
  display: none;
}

.slides
{
  display: flex;
  width: 500%;
  height: 100%;
}

.slide
{
  width: 20%;
  transition: .6s;
}

.slide img
{
  width: 100%;
  height: 100%;
}

#slide1:checked ~ .s1
{
  margin-left: 0;
}

#slide2:checked ~ .s1
{
  margin-left: -20%;
}

#slide3:checked ~ .s1
{
  margin-left: -40%;
}

#slide4:checked ~ .s1
{
  margin-left: -60%;
}

#slide5:checked ~ .s1
{
  margin-left: -80%;
}

p {
  display: block;
  margin-block-start: 1em;
  margin-block-end: 1em;
  margin-inline-start: 0px;
  margin-inline-end: 0px;
  text-align: center;
  position: relative;
  top: 850px;
}

</style>

  <div class="container">
    <h3>Cardapio</h3>
  </div>
  <div class="content">
    <div class="slides">
      <input type="radio" name="slide" id="slide1" checked>
      <input type="radio" name="slide" id="slide2">
      <input type="radio" name="slide" id="slide3">
      <input type="radio" name="slide" id="slide4">
      <input type="radio" name="slide" id="slide5">
      
      <div class="slide s1">
        <h1>HAMBUGUER</h1>
        <img src="https://imgkub.com/images/2023/03/02/hamburgues.jpg" ></a>
      </div>
      <div class="slide">
        <h1>BATATA FRITA</h1>
        <img src="https://imgkub.com/images/2023/03/02/batatafrita.jpg" ></a>
      </div>
      <div class="slide">
        <h1>CACHORRO QUENTE</h1>
        <img src="https://imgkub.com/images/2023/03/02/hot-dog4k.jpg" ></a>
      </div>
       <div class="slide">
        <h1>COCA COLA</h1>
        <img src="https://imgkub.com/images/2023/03/02/coca.webp" ></a>
       </div>
        <div class="slide">
         <h1>SORVETE</h1>
        <img src="https://imgkub.com/images/2023/03/01/sorvete.jpg"></a>
        </div>
      
      <div class="navigation">
        <label class="bar" for="slide1"></label>
        <label class="bar" for="slide2"></label>
        <label class="bar" for="slide3"></label>
        <label class="bar" for="slide4"></label>
        <label class="bar" for="slide5"></label>
      </div>
      
    </div>
  </div>

  <p>© Copyright 2023 MINEIRINHO</p> 

</body>

</html>



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
}

@kayframes float {
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
            <div class="logo"><img src="https://imgkub.com/images/2023/03/10/logo1.jpg" width="200px" height="200px"/></div>
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
            <img class="image" src="https://imgkub.com/images/2023/03/10/burguer_logo-removebg-preview1.png" />
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

