<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="POST" action= "insert_produtos.php">
<label>Selecione o Produto que você deseja estocar</label>
<select name = "escola">
       <option  value=""></option>
       <option  value="1">Hamburguer</option>
       <option  value="2">Batata Frita</option>
       <option  value="3">Cachorro Quente</option>
       <option  value="4">Sorvete</option>
       <option  value="5">Refrigerante</option>
       <option  value="6">Hamburgão</option>
       <option  value="7">X Infarto</option>
       <option  value="8">Mega Combo</option>
</select>
<label>Aplique a quantidade que você deseja estocar</label>
       <input type="text" name="n_produtos" placeholder="999" value="">
       <input type="submit" value="Enviar">
  
</form>
</body>
</html>
    