<!DOCTYPE html>
<html lang="pt-br">
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
  background: #FFDB58;
}

.container
{
  position: relative;
  display: flex;
  justify-content: center;
  align-items: center;
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
  position: absolute;
}

.ImputBox
{
  position: relative;
  width: 100%;
  margin-bottom: 20px;
  top: 50px;
  justify-content: relative;
}

.ImputBox span
{
  display: inline-block;
  color: #fff;
  margin-bottom: 10px;
  text-transform: uppercase;
  letter-spacing: 1px;
  font-size: 0.75em;
  border-left: 4px solid #fff;
  padding-left: 4px;
  line-height: 1em;
}

.ImputBox .box
{
  display: flex;
}

.ImputBox .box .icon
{
  position: relative;
  min-width: 40px;
  height: 40px;
  background: #ff0055;
  display: flex;
  justify-content: center;
  align-items: center;
  border-radius: 50%;
  margin-right: 10px;
  color: #fff;
  font-size: 1.15em;
  box-shadow: 5px 5px 7px rgba(0,0,0,0.25),
  inset 2px 2px 5px rgba(255,255,255,0.25),
  inset -3px -3px -5px rgba(0,0,0,0.5);
}

.ImputBox .box input
{
  position: relative;
  width: 200%;
  border: none;
  outline: none;
  padding: 10px 20px;
  border-radius: 30px;
  text-transform: uppercase;
  letter-spacing: 1px;
  font-size: 0.85em;
  box-shadow: 5px 5px 7px rgba(0,0,0,0.25),
  inset 2px 2px 5px rgba(0,0,0,0.35),
  inset -3px -3px -5px rgba(0,0,0,0.5);
}

.ImputBox .box input[type="submit"]
{
  background: #e70909;
  box-shadow: 5px 5px 7px rgba(0,0,0,0.25),
  inset 2px 2px 5px rgba(255,255,255,0.25),
  inset -3px -3px -5px rgba(0,0,0,0.5);
  color: #fff;
  cursor: pointer;
  text-transform: uppercase;
  letter-spacing: 2px;
  font-weight: 600;
  margin-top: 10px;
}

.ImputBox .box input[type="submit"]:hover
{
  filter: brightness(1.1);
}

label
{
  color: #fff;
  text-transform: uppercase;
  letter-spacing: 1px;
  font-size: 0.85em;
  display: flex;
  align-items: center;
}

label input
{
  margin-right: 5px;
}

.forgot
{
  color: #fff;
  text-transform: uppercase;
  letter-spacing: 1px;
  font-size: 0.85em;
  text-decoration: none;
}

.form
{
  position: relative;
  width: 85px;
  left: -35%;
}

    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


  <script>
    
    //o script faz com que o cpf tenha apenas letras
    document.addEventListener('keydown', function(event) { 
    //pega o evento de precionar uma tecla
    if(event.keyCode != 46 && event.keyCode != 8){
        //verifica se a tecla precionada nao e um backspace e delete
      var i = document.getElementById("cpf").value.length;
       //aqui pega o tamanho do input
      if (i === 3 || i === 7) //aqui faz a divisoes colocando um ponto no terceiro e setimo indice
        document.getElementById("cpf").value = document.getElementById("cpf").value + ".";
      else if (i === 11) //aqui faz a divisao colocando o tracinho no decimo primeiro indice
        document.getElementById("cpf").value = document.getElementById("cpf").value + "-";
    }
  });

  function somenteNumeros(num) {
        var er = /[^0-9.-]/;
        er.lastIndex = 0;
        var campo = num;
        if (er.test(campo.value)) {
          campo.value = "";
        }
    }

  function mascaraTelefone(event) {
        let tecla = event.key;
        let telefone = event.target.value.replace(/\D+/g, "");

        if (/^[0-9]$/i.test(tecla)) {
            telefone = telefone + tecla;
            let tamanho = telefone.length;

            if (tamanho >= 12) {
                return false;
            }
            
            if (tamanho > 10) {
                telefone = telefone.replace(/^(\d\d)(\d{5})(\d{4}).*/, "($1) $2-$3");
            } else if (tamanho > 5) {
                telefone = telefone.replace(/^(\d\d)(\d{4})(\d{0,4}).*/, "($1) $2-$3");
            } else if (tamanho > 2) {
                telefone = telefone.replace(/^(\d\d)(\d{0,5})/, "($1) $2");
            } else {
                telefone = telefone.replace(/^(\d*)/, "($1");
            }

            event.target.value = telefone;
        }

        if (!["Backspace", "Delete"].includes(tecla)) {
            return false;
        }
    }
    
  

function validadata(){
   var data = document.getElementById("nascimento").value; // pega o valor do input
   data = data.replace(/\//g, "-"); // substitui eventuais barras (ex. IE) "/" por hífen "-"
   var data_array = data.split("-"); // quebra a data em array
   
   // para o IE onde será inserido no formato dd/MM/yyyy
   if(data_array[0].length != 4){
      data = data_array[2]+"-"+data_array[1]+"-"+data_array[0]; // remonto a data no formato yyyy/MM/dd
   }
   
   // comparo as datas e calculo a idade
   var hoje = new Date();
   var nasc  = new Date(data);
   var idade = hoje.getFullYear() - nasc.getFullYear();
   var m = hoje.getMonth() - nasc.getMonth();
   if (m < 0 || (m === 0 && hoje.getDate() < nasc.getDate())) idade--;

}

function valida_nome() {
        var filter_nome = /^([a-zA-Zà-úÀ-Ú]|\s+)+$/;
        if (!filter_nome.test(document.getElementById("input_nome").value)) {
            document.getElementById("input_nome").value = '';
            document.getElementById("input_nome").placeholder = "Nome inválido";
            document.getElementById("input_nome").style.borderColor = "#ff0000";
            document.getElementById("input_nome").style.outline = "#ff0000";
            document.getElementById("input_nome").focus();
            document.getElementById("input_nome").onkeydown = function keydown_nome() {
                document.getElementById("input_nome").placeholder = "";
                document.getElementById("input_nome").style.borderColor = "#999999";
                document.getElementById("input_nome").style.outline = null;
            }
            return false;
        } else {
            document.getElementById("input_nome").value = '';
            document.getElementById("input_nome").placeholder = "Nome Válido";
        }
        return true;
    }

  </script>
  <div class="container">
  <!---<form>--->
    <div class="form">
    <h3>Cadastro</h3>
  <div class="ImputBox">
  <div class="input">
  <form method="POST" action="insert_gerente.php">
      <span>Nome:</span>
    <div class="box">
    <div class="icon">
      <ion-icon name="person"></ion-icon>
  </div>
  </div>
       <input type="text" name="nm" id="exemplo" required="required"  pattern="[a-zA-Z\s]+$" placeholder="Seu nome" value="">
  </div>
  <div class="ImputBox">
       <span>CPF:</span>
    <div class="box">
    <div class="icon">
      <ion-icon name="newspaper-outline"></ion-icon>
  </div>
  </div>
       <input id="cpf" type="text" autocomplet="off" maxlength="14"  onkeyup="somenteNumeros(this);" name="cpf" placeholder="000-000-000.00" value="">
  </div>

  <div class="ImputBox">
       <span>Nascimento:</span>
    <div class="box">
    <div class="icon">
    <ion-icon name="calendar-outline"></ion-icon>
  </div>
  </div>
       <input type="date" name="nascimento" id="nascimento" placeholder="00/00/0000" value="" >
  </div>

  <div class="ImputBox">
       <span>RG:</span>
    <div class="box">
    <div class="icon">
      <ion-icon name="newspaper-outline"></ion-icon>
  </div>
  </div>
       <input id="cpf" type="text" autocomplet="off" maxlength="14"  onkeyup="somenteNumeros(this);" name="rg" placeholder="000-000-000.00" value="">
  </div>

  <div class="ImputBox">
        <span>E-mail:</span>
    <div class="box">
    <div class="icon">
        <ion-icon name="mail-outline"></ion-icon>
  </div>
  </div>
        <input type="email" name="emai" placeholder="email@email.com.br" value="">
  </div>

  <div class="ImputBox">
        <span>Endereco:</span>
    <div class="box">
    <div class="icon">
        <ion-icon name="map-outline"></ion-icon>
  </div>
  </div>
        <input type="rua" name="rua" placeholder="Sua rua" value="">
  </div>

  <div class="ImputBox">
       <span>Escola:</span>
    <div class="box">
    <div class="icon">
       <ion-icon name="bus-outline"></ion-icon>
  </div>
  </div>                
  <select name = "escola">
       <option  value=""></option>
       <option  value="1">Ensino Fundamental Incompleto</option>
       <option  value="2">Ensino Fundamental Completo</option>
       <option  value="3">Ensino Médio Incompeto</option>
       <option  value="4">Ensino Médio Completo</option>
       <option  value="5">Ensino Superior Incompleto</option>
       <option  value="6">Ensino Superior Completo</option>
  </select>
  </div>

  <div class="ImputBox">
        <span>Telefone:</span>
    <div class="box">
    <div class="icon">
        <ion-icon name="call-outline"></ion-icon>
   </div>
   </div>
        <input onkeydown="return mascaraTelefone(event)" type="fone" name="tel" placeholder="(00) 00000-0000" value="">
  </div>

  <div class="ImputBox">
       <span>Senha:</span>
    <div class="box">
    <div class="icon">
       <ion-icon name="lock-closed"></ion-icon>
  </div>
  </div>
       <input type="password" maxlength="25" minlength="6" name="senh" placeholder="Seu Senha" value="">
  </div>

  <div class="ImputBox">
  <div class="box">
       <input type="submit" value="Cadastrar" onclick="valida_nome()">
  </div>
  </div>
       
  </div>
  </div>
  <!---</form>--->
  </div>
 
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"> </script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"> </script>

</body>
</html>






