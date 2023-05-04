<!DOCTYPE html>
<html lang="en">
<head>
 
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <script src="https://accounts.google.com/gsi/client" async defer></script>
    <script src="https://unpkg.com/jwt-decode/build/jwt-decode.js"></script>
    <script>
        function handleCredentialResponse(response) { 
        const data = jwt_decode(response.credential)
        console.log(data)
        }

        window.onload = function () {
          google.accounts.id.initialize({
            client_id: "1033072236144-n62cgkojr0hbhh47qdqv4educnvg7ohr.apps.googleusercontent.com",
            callback: handleCredentialResponse
          });

          google.accounts.id.renderButton(
            document.getElementById("buttonDiv"),
            { theme: "outline", 
              size: "large",
              type:"standard",
              shape:"pill",
              theme:"outline",
              text:"signin_with.",
              size:"medium",
              logo_alignment:"left"
            }  // customization attributes
          );
          google.accounts.id.prompt(); // also display the One Tap dialog
        }
    </script>

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
  width: 350px;
  min-height: 500px;
  display: flex;
  justify-content: center;
  align-items: center;
  background: #F4BB44;
  box-shadow: 25px 25px 75px rgba(0,0,0,0.25),10px 10px 70px rgba(0,0,0,0.25),
  inset 5px 5px 10px rgba(0,0,0,0.5),
  inset 5px 5px 20px rgba(255,255,255,0.2),
  inset -5px -5px 10px rgba(0,0,0,0.75);
  border-radius: 30px;
  padding: 50px;
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

.ImputBox
{
  position: relative;
  width: 100%;
  margin-bottom: 20px;
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
  width: 100%;
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

a:link, a:visited {
  background-color:  #e70909;
  color: white;
  padding: 5px 5px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  border-radius: 30px;
  letter-spacing: 2px;
  font-weight: 600;
  margin-top: 10px;
  position: relative;
  width: 170%;
  text-transform: uppercase;
}

a:hover, a:active {
  background-color: red;
}

.form
{
  position: relative;
  width: 85px;
  left: -35%;
}



</style>

</head>
<body>

  <div class="container">
    <div class="form">
    
    <h3>Logar</h3>

  <div class="ImputBox">
  <div class="input">
    <form method="POST" action="validar.php">
      <span>Email:</span>
  <div class="box">
  <div class="icon">
    <ion-icon name="person"></ion-icon>
  </div>
  </div>
    <input type="email" name="emai" value="">
  </div>

  <div class="ImputBox">
      <span>Senha:</span>
  <div class="box">
  <div class="icon">
    <ion-icon name="lock-closed"></ion-icon>
  </div>
  </div>
    <input type="text" name="senha" value="">
  </div>

  <div class="ImputBox">
  <div class="box">
    <input type="submit" value="Login">
</form>
  <div class="link">   
  </div>  
  </div>
  </div>
  </div>

      <a href="cadastra.php">Cadastrar</a>
<br>
<br>
  <div id="buttonDiv"></div> 

  </div>
  </div>



  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"> </script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"> </script>

</body>
</html>