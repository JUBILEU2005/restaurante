<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cardapio</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <link rel="stylesheet" href="css/style.css">

    <style>
      @import url('https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;600;700&display=swap');

:root{
  --black:#2c2c54;
  --orange:#ff9f1a;
}

*{
  font-family: 'Nunito', sans-serif;
  margin: 0; padding:0;
  box-sizing: border-box;
  outline: none; border:none;
  text-decoration: none;
  text-transform: capitalize;
  transition: all .2s linear;
}

html{
  font-size: 62.5%;
  overflow-x: hidden;
  scroll-padding-top:6rem;
  scroll-behavior: smooth;
  background: #FFDB58;
}

section{
  padding:2rem 9%;
}

.heading{
  text-align: center;
  text-transform: uppercase;
  font-size: 4rem;
  color:var(--black);
  padding:1rem;
}

.heading span{
  text-transform: uppercase;
  color:var(--orange);
}

.btn{
  display: inline-block;
  margin-top: 1rem;
  border-radius: .5rem;
  border:.2rem solid var(--black);
  font-weight: bolder;
  font-size: 1.7rem;
  color:var(--black);
  cursor: pointer;
  background:#fff;
  padding:.8rem 3rem;
}

.btn:hover{
  background:var(--orange);
  color:#fff;
}

header{
  position: fixed;
  top:0; left:0; right:0;
  z-index: 1000;
  background:#fff;
  padding:2rem 9%;
  display: flex;
  align-items: center;
  justify-content: space-between;
  box-shadow: 0 .5rem 1rem rgba(0,0,0,.1);
}

header .logo{
  font-size: 2.5rem;
  color:var(--black);
}

header .navbar a{
  font-size: 1.7rem;
  color:var(--black);
  margin:0 1rem;
}

header .navbar a:hover{
  color:var(--orange);
}

header .icons a{
  font-size: 2.5rem;
  color:var(--black);
  margin-left:1.5rem;
}

header .icons a:hover{
  color:var(--orange);
}

#menu-bar{
  font-size: 2.5rem;
  padding: .5rem 1.5rem;
  border:.1rem solid var(--black);
  color:var(--black);
  border-radius: .3rem;
  cursor: pointer;
  display: none;
}

.home{
  padding:0;
  position:relative;
}

.home .slide-container .slide{
  min-height: 100vh;
  display: flex;
  align-items: center;
  flex-wrap: wrap;
  gap:1.5rem;
  padding:0 9%;
  padding-top: 9rem;
}

.home .slide-container .slide .content{
  flex:1 1 40rem;
  animation: slideContent .5s linear 1s backwards;
}

@keyframes slideContent{
  0%{
    opacity: 0;
    transform: translateX(-10rem);
  }
}

.home .slide-container .slide .image{
  flex:1 1 50rem;
  padding-bottom: 15rem;
  position: relative;
  z-index: 0;
}

.home .slide-container .slide .image .shoe{
  width:100%;
  transform: rotate(-35deg);
  animation:shoe .3s linear;
}

@keyframes shoe{
  0%{
    transform: rotate(0deg) scale(.5);
  }
}

.home .slide-container .slide .image .text{
  position: absolute;
  top:0; left:0;
  z-index: -1;
  animation:shoeText .5s linear .5s backwards;
}

@keyframes shoeText{
  0%{
    opacity: 0;
    top:-10rem;
  }
}

.home .slide-container .slide .content span{
  font-size: 2rem;
  color:var(--orange);
}

.home .slide-container .slide .content h3{
  font-size: 5rem;
  color:var(--black);
}

.home .slide-container .slide .content p{
  font-size: 1.7rem;
  color:#666;
  padding:.5rem 0;
}

.home .slide-container:nth-child(1) .slide{
  background:url(../images/home-bg-1.jpg) no-repeat;
  background-size: cover;
  background-position: center;
}

.home .slide-container:nth-child(2) .slide{
  background:url(../images/home-bg-2.jpg) no-repeat;
  background-size: cover;
  background-position: center;
}

.home .slide-container:nth-child(3) .slide{
  background:url(../images/home-bg-3.jpg) no-repeat;
  background-size: cover;
  background-position: center;
}

.home .slide-container{
  display: none;
}

.home .slide-container.active{
  display: block;
}

.home #prev,
.home #next{
  position: absolute;
  top:50%; 
  transform:translateY(-50%);
  border-radius: 50%;
  z-index: 100;
  height:5rem;
  width:5rem;
  line-height: 4.5rem;
  font-size: 2rem;
  color:var(--black);
  border:.2rem solid var(--black);
  cursor: pointer;
  text-align: center;
}

.home #prev:hover,
.home #next:hover{
  color:#fff;
  background:var(--orange);
}

.home #prev{
  left:3rem;
}

.home #next{
  right:3rem;
}

.service .box-container{
  display: flex;
  flex-wrap: wrap;
  gap:1.5rem;
  background:#f9f9f9;
  border:.1rem solid rgba(0,0,0,.1);
  border-radius: .5rem;
  padding:2rem;
}

.service .box-container .box{
  text-align: center;
  flex:1 1 30rem
}

.service .box-container .box i{
  font-size: 4rem;
  color:var(--orange);
}

.service .box-container .box h3{
  font-size: 2rem;
  color:var(--black);
  padding-top: 1rem;
}

.service .box-container .box p{
  font-size: 1.5rem;
  color:#666;
  padding:1rem 0;
}

.products .box-container{
  display: flex;
  flex-wrap: wrap;
  gap:1.5rem;
}

.products .box-container .box{
  border:.1rem solid rgba(0,0,0,.1);
  border-radius: .5rem;
  text-align: center;
  position: relative;
  overflow: hidden;
  background:#f9f9f9;
  flex:1 1 30rem;
}

.products .box-container .box .content{
  padding:1.5rem;
}

.products .box-container .box img{
  height:10rem;
  filter:drop-shadow(0 .5rem 1rem rgba(0,0,0,.1));
  margin:8rem 2rem;
}

.products .box-container .box .icons{
  display: flex;
  flex-flow: column;
  position: absolute;
  top:.5rem; left:-10rem;
}

.products .box-container .box:hover .icons{
  left:1rem;
}

.products .box-container .box .icons a{
  height:4.5rem;
  width:5rem;
  line-height: 4.5rem;
  font-size: 2rem;
  color:var(--black);
  border:.1rem solid var(--black);
  border-radius: .5rem;
  background:#fff;
  margin-top: .5rem;
}

.products .box-container .box .icons a:hover{
  background:var(--orange);
  color:#fff;
}

.products .box-container .box .content h3{
  color:var(--black);
  font-size: 2.5rem;
}

.products .box-container .box .content .price{
  color:var(--black);
  font-size: 2.5rem;
  font-weight: bolder;
  padding:1rem 0;
}

.products .box-container .box .content .price span{
  color:var(--orange);
  font-size: 1.5rem;
  text-decoration: line-through;
}

.products .box-container .box .content .stars{
  padding-bottom: 1rem;
}

.products .box-container .box .content .stars i{
  font-size: 1.7rem;
  color:var(--orange);
}

.featured .row{
  display: flex;
  flex-wrap: wrap;
  gap:1.5rem;
  border:.1rem solid rgba(0,0,0,.1);
  border-radius: .5rem;
  background:#f9f9f9;
  padding:2rem;
  align-items: center;
  margin:1.5rem 0;
}

.featured .row .content{
  flex:1 1 40rem;
}

.featured .row .image-container{
  display:flex;
  gap:1.5rem;
  align-items: center;
  flex:1 1 50rem;
}

.featured .row .image-container .small-image{
  width:20%;
}

.featured .row .image-container .big-image{
  width:80%;
  padding:1rem;
}

.featured .row .image-container .small-image img{
  width:100%;
  padding:1rem;
  border:.1rem solid rgba(0,0,0,.3);
  cursor: pointer;
}

.featured .row .image-container .small-image img:hover{
  background:#ccc;
}

.featured .row .image-container .big-image img{
  width:100%;
}

.featured .row .image-container .big-image img:hover{
  transform: scale(1.05);
}

.featured .row .content h3{
  font-size: 2.5rem;
  color:var(--black);
}

.featured .row .content .stars i{
  font-size: 1.7rem;
  color:var(--orange);
  padding:.5rem 0;
}

.featured .row .content p{
  font-size: 1.5rem;
  color:#666;
  padding:1rem 0;
}

.featured .row .content .price{
  font-size: 2.5rem;
  color:var(--black);
  font-weight: bolder;
}

.featured .row .content .price span{
  font-size: 1.5rem;
  color:var(--orange);
  text-decoration: line-through;
}

.review .box-container{
  display: flex;
  flex-wrap: wrap;
  gap:1.5rem;
}

.review .box-container .box{
  flex:1 1 30rem;
  text-align: center;
  border:.1rem solid rgba(0,0,0,.1);
  border-radius: .5rem;
  background:#f9f9f9;
  padding:2rem;
}

.review .box-container .box img{
  border-radius: 50%;
  object-fit: cover;
  height:15rem;
  width:15rem;
  margin:1rem 0;
}

.review .box-container .box h3{
  font-size: 2.5rem;
  color:var(--black);
}

.review .box-container .box p{
  font-size: 1.6rem;
  color:#666;
  padding:1rem 0;
}

.review .box-container .box .stars i{
  color:var(--orange);
  font-size: 2rem;
}

.newsletter{
  padding-top: .5rem;
  padding-bottom: .5rem;
}

.newsletter .content{
  text-align: center;
  border:.1rem solid rgba(0,0,0,.1);
  border-radius: .5rem;
  background:#f9f9f9;
  padding:2rem;
}

.newsletter .content h3{
  font-size: 2.5rem;
  color:var(--black);
}

.newsletter .content p{
  font-size: 1.5rem;
  color:#666;
  margin:1rem auto;
  max-width: 60rem;
}

.newsletter .content form{
  margin:1rem auto;
  max-width: 50rem;
  display: flex;
}

.newsletter .content form .box{
  width:100%;
  font-size: 1.7rem;
  text-transform: none;
  color:#333;
  padding:1rem;
  border:.2rem solid var(--black);
  border-right: none;
  margin-top: 1rem;
}

.newsletter .content form .btn{
  border-radius: 0;
}

.footer .box-container{
  border:.1rem solid rgba(0,0,0,.1);
  border-radius: .5rem;
  background:#f9f9f9;
  padding:2rem;
  display: flex;
  flex-wrap: wrap;
  gap:1.5rem;
}

.footer .box-container .box{
  flex:1 1 20rem;
}

.footer .box-container .box h3{
  color:var(--black);
  font-size: 2.5rem;
  padding-bottom: 1.5rem;
}

.footer .box-container .box a{
  color:#666;
  font-size: 1.5rem;
  padding-bottom: 1.5rem;
  display: block;
}

.footer .box-container .box a:hover{
  color:var(--orange);
}

@media (max-width:991px){

  html{
    font-size: 55%;
  }

  header{
    padding:2rem;
  }

  section{
    padding:2rem;
  }

}

@media (max-width:768px){

  #menu-bar{
    display: block;
  }

  header .navbar{
    position: absolute;
    top:100%; left:-120%;
    width:100%;
    background:#eee;
    border-top: .1rem solid rgba(0,0,0,.1);
  }

  header .navbar.active{
    left:0;
  }

  header .navbar a{
    font-size: 2rem;
    background:#fff;
    border:.1rem solid var(--black);
    border-radius: .5rem;
    padding:1.5rem;
    margin:1.5rem;
    display: block;
    text-align: center;
  }

  .home .slide-container .slide .image .text{
    width:60%;
  }

  .home #prev,
  .home #next{
    top:85%;
  }

}

@media (max-width:400px){

  html{
    font-size: 50%;
  }

  .home .slide-container .slide .image{
    padding-bottom: 6rem;
  }

  .heading{
    font-size: 3rem;
  }

}
    </style>

    <script>

let menu = document.querySelector('#menu-bar');
let navbar = document.querySelector('.navbar');

menu.onclick = () =>{
  menu.classList.toggle('fa-times');
  navbar.classList.toggle('active');
}

window.onscroll = () =>{
  menu.classList.remove('fa-times');
  navbar.classList.remove('active');
}

let slides = document.querySelectorAll('.slide-container');
let index = 0;

function next(){
  slides[index].classList.remove('active');
  index = (index + 1) % slides.length;
  slides[index].classList.add('active');
}

function prev(){
  slides[index].classList.remove('active');
  index = (index - 1 + slides.length) % slides.length;
  slides[index].classList.add('active');
}

document.querySelectorAll('.featured-image-1').forEach(image_1 =>{
  image_1.addEventListener('click', () =>{
    var src = image_1.getAttribute('src');
    document.querySelector('.big-image-1').src = src;
  });
});

document.querySelectorAll('.featured-image-2').forEach(image_2 =>{
  image_2.addEventListener('click', () =>{
    var src = image_2.getAttribute('src');
    document.querySelector('.big-image-2').src = src;
  });
});

document.querySelectorAll('.featured-image-3').forEach(image_3 =>{
  image_3.addEventListener('click', () =>{
    var src = image_3.getAttribute('src');
    document.querySelector('.big-image-3').src = src;
  });
});

    </script>  

</head>
<body>

<header>

    <div id="menu-bar" class="fas fa-bars"></div>

    <a href="#" class="logo">Cardapio</a>

    <nav class="navbar">
        <a href="#home">Inicio</a>
        <a href="#products">Produtos</a>
        <a href="#featured">Caracteristicas</a>
    </nav>


</header>

<section class="home" id="home">

    <div class="slide-container active">
        <div class="slide">
            <div class="content">
                <span>Hamburgão</span>
                <h3>Colossal</h3>
                <p>De tudo que você possa imaginar</p>
            </div>
            <div class="image">
               <img src="https://imgkub.com/images/2023/03/02/hamburgues.jpg" ></a>
              
            </div>
        </div>
    </div>

    <div class="slide-container">
        <div class="slide">
            <div class="content">
                <span>X Infarto</span>
                <h3>Morra de bucho cheio</h3>
                <p>De tudo e muito mais</p>
            </div>
            <div class="image">

            </div>
        </div>
    </div>

    <div class="slide-container">
        <div class="slide">
            <div class="content">
                <span>Mega Combo</span>
                <h3>Hamburgão e batata</h3>
                <p>Fique sastifesto o resto do dia</p>
            </div>
            <div class="image">
               
            </div>
        </div>
    </div>

   

</section>

<section class="service">

    <div class="box-container">

        <div class="box">
            <i class="fas fa-shipping-fast"></i>
            <h3>Entrega Rapida</h3>

        </div>

        <div class="box">
            <i class="fas fa-undo"></i>
            <h3>Atualizações nos produtos</h3>
        </div>

        <div class="box">
            <i class="fas fa-headset"></i>
            <h3>Suporte</h3>
  
        </div>

    </div>

</section>

<section class="products" id="products">

    <h1 class="heading"> Ultimos  <span>Produtos</span> </h1>

    <div class="box-container">

        <div class="box">
            
            <img src="https://imgkub.com/images/2023/03/02/hamburgues.jpg" ></a>
            <div class="content">
                <h3>Hamburguer</h3>
                <div class="price">R$19.99 <span>R$22.99</span></div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
<form method="POST" action="compra.php">
                <input class="btn" name="hamburguer" type="submit" value="Comprar">
               <!--- <a href="#" class="btn">Comprar</a> --->
            </div>
        </div>

        <div class="box">
            
            <img src="https://imgkub.com/images/2023/03/03/batata1.webp" ></a>
            <div class="content">
                <h3>Batata Frita</h3>
                <div class="price">R$14.99 <span>R$19.99</span></div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <input class="btn" name="batata" type="submit" value="Comprar">
                <!--- <a href="#" class="btn">Comprar</a> --->
            </div>
        </div>

        <div class="box">
            
            <img src="https://imgkub.com/images/2023/03/03/cachorro_quente1.jpg" ></a>
            <div class="content">
                <h3>Cachorro Quente</h3>
                <div class="price">R$19.99 <span>R$24.99</span></div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <input class="btn" name="hotdog" type="submit" value="Comprar">
                <!--- <a href="#" class="btn">Comprar</a> --->
            </div>
        </div>

        <div class="box">
            
            <img src="https://imgkub.com/images/2023/03/03/sorvete1.jpg" ></a>
            <div class="content">
                <h3>Sorvete</h3>
                <div class="price">R$9.99<span>14.99</span></div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <input class="btn" name="sorvete" type="submit" value="Comprar">
                <!--- <a href="#" class="btn">Comprar</a> --->
            </div>
        </div>

        <div class="box">
            
            <img src="https://imgkub.com/images/2023/03/04/coca-cola.jpg" ></a>
            <div class="content">
                <h3>Refrigerante</h3>
                <div class="price">$9.99 <span>$14.99</span></div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <input class="btn" name="refri" type="submit" value="Comprar">
                <!--- <a href="#" class="btn">Comprar</a> --->
            </div>
        </div>

    </div>

</section>

<section class="featured" id="featured">

    <h1 class="heading"> <span>Os Mais </span> Vendidos </h1>

    <div class="row">
        <div class="image-container">
            <div class="small-image">
            <img src="https://imgkub.com/images/2023/03/02/hamburgues.jpg" ></a>
            </div>
            <div class="big-image">
            <img src="https://imgkub.com/images/2023/03/02/hamburgues.jpg" ></a>
            </div>
        </div>
        <div class="content">
            <h3>Hamburgão</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
            </div>
            <div class="price">R$29.99 <span>R$34.99</span></div>
            <input class="btn" name="hamburgao" type="submit" value="Comprar">
            <!--- <a href="#" class="btn">Comprar</a> --->
        </div>
    </div>

    <div class="row">
        <div class="image-container">
            <div class="small-image">
            <img src="https://imgkub.com/images/2023/03/04/x-infarto.jpg" ></a>
            </div>
            <div class="big-image">
            <img src="https://imgkub.com/images/2023/03/04/x-infarto.jpg" ></a>
            </div>
        </div>
        <div class="content">
            <h3>X Infarto</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
            </div>
            <div class="price">R$29.99 <span>R$34.99</span></div>
            <input class="btn" name="x-i" type="submit" value="Comprar">
            <!--- <a href="#" class="btn">Comprar</a> --->
        </div>
    </div>

    <div class="row">
        <div class="image-container">
            <div class="small-image">
            <img src="https://imgkub.com/images/2023/03/03/hamburgue_e_batata1.webp" ></a>
            </div>
            <div class="big-image">
            <img src="https://imgkub.com/images/2023/03/03/hamburgue_e_batata1.webp" ></a>
            </div>
        </div>
        <div class="content">
            <h3>Mega Combo</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
            </div>
            <div class="price">R$34.99 <span>R$44.99</span></div>
            <input class="btn" name="combo" type="submit" value="Comprar">
</form>
            <!--- <a href="#" class="btn">Comprar</a> --->
        </div>
    </div>

</section>

<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3>Links</h3>
            <a href="#">Inicio</a>
            <a href="#">produtos</a>
            <a href="#">Caracteristicas</a>
            <a href="#">Analise</a>
        </div>

        <div class="box">
            <h3>Siga nos</h3>
            <a href="#">facebook</a>
            <a href="#">twitter</a>
            <a href="#">instagram</a>
            <a href="#">linkedin</a>
        </div>

        <div class="box">
            <h3>extra links</h3>
            <a href="#">Minha conta</a>
            <a href="#">Favoritos</a>
            <a href="#">Inicio</a>
            <a href="#">Informação</a>
        </div>

    </div>

</section>

<script src="js/script.js"></script>
    
</body>
</html>















<!-- custom js file link  -->