<!DOCTYPE html>
<html lang="en">
<head>
<style>
    @import url('https://fonts.googleapis.com/css?family=Poppins:400,700,900');
*
{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'poppins', sans-serif;
}
body
{
  display: flex;
  justify-content: center;
  align-items: center;
  min-height: 100vh;
  background: #f5a907;
}
.container
{
  position: relative;
  width: 350px;
  min-height: 700px;
  display: flex;
  justify-content: center;
  align-items: center;
  background: #e87406;
  box-shadow: 25px 25px 75px rgba(0,0,0,0.25),10px 10px 70px rgba(0,0,0,0.25),
  inset 5px 5px 10px rgba(0,0,0,0.5),
  inset 5px 5px 20px rgba(255,255,255,0.2),
  inset -5px -5px 10px rgba(0,0,0,0.75);
  border-radius: 30px;
  padding: 50px;
}
.ImputBox
{
  position: relative;
  width: 100%;
  margin-bottom: 20px;
}
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
</style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="container">
<form>
    <h3>Bem vindo!</h3>
<?php 
session_start();
$nome = "";
    $id = "";
if(false){
    header("Location: login.php");
}else{
    
    echo "" . $nome . " " . $id;
    echo"<br>";
    echo "<a href='logout.php'>Acessar Site</a>";
}
?>
</form>
</div>
</body>
</html>






