<<?php session_start(); ?>
<html>
    <head>
        <title>POKEMART</title>
        <meta charset="UTF-8">
         <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/png" href="snorlax.png">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link href="carousel.css" rel="stylesheet">
    </head>
    <body class="bg-dark">
       
        <div class="container position-absolute fixed-top mx-auto" style="width:300px ;height: 50px;">
            <img src="pokemon.png">
             
        </div>
        <br>
<header class="navbar navbar-expand navbar-dark flex-column flex-md-row bd-navbar mx-auto justify-content-center mt-5" style="height:160px ;">
  <a class="navbar-brand mr-0 mr-md-2" href="/" aria-label="Bootstrap">
</a>

  <div class="navbar-nav-scroll">
      <ul class="navbar-nav bd-navbar-nav flex-row pt-5 mx-auto justify-content-center" style="height: 20px;">
      <li class="nav-item">
        <a class="nav-link fw-bold px-2 mx-3"  href="/">POKEMARKET</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active fw-bold px-2 mx-3"  href="/" >POKEDEX</a>
      </li>
      <li class="nav-item">
          <a class="nav-link fw-bold px-2 mx-3"  href="/">Escolher Produtos</a>
      </li>

      <li class="nav-item">
        <a class="nav-link fw-bold px-2 mx-3" href="/">CARRINHO</a>
      </li>
      
    </ul>
  </div>

 
  <a class="btn btn-bd-download d-none d-lg-inline-block mb-3 mb-md-0 ml-md-3" href="https://github.com/twbs/bootstrap/archive/v4.0.0.zip">Download</a>
</header>

<main>

  <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="poke.png"  class="d-block w-100 mx-auto" style="width:500px ;height:600px ;">

        <div class="container">
          <div class="carousel-caption">
            <h1>Produtos e jogos.</h1>
            <p>Confira nossa loja para ter acesso a varios artigos do universo pokemon.</p>
            <p><a class="btn btn-lg btn-primary" href="#">LOJA</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img src="pokeba.jpg" class="d-block w-100 mx-auto" style="width:500px ;height:600px;">

        <div class="container">
          <div class="carousel-caption">
            <h1>Você sabe de todos?</h1>
            <p>Disponibilizamos um catalogo com todos os pokemons(POKEDEX), confira!!.</p>
            <p><a class="btn btn-lg btn-primary" href="#">Ir</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
       <img src="geracao.jpg" class="d-block w-100 mx-auto" style="width:500px ; height:600px ;"> 

        <div class="container">
          <div class="carousel-caption">
            <h1>Junte-se a nós.</h1>
            <p>Registre-se para participar dessa franquia atemporal!!!</p>
            <p><a class="btn btn-lg btn-primary" href="#">Registrar-se</a></p>
          </div>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
    <br>
    <br>
      <div class="p-5 mb-4 bg-dark rounded-3">
      <div class="container-fluid py-5">
        <h1 class="display-5 fw-bold text-white">O que são Pokemons?</h1>
        <p class="col-md-8 fs-4 text-white">São criaturas lúdicas que se assemelham em muito a animais, porém eles possuem habilidades especiais que podem ser usadas no cotidiano, ou até em batalhas.</p>
       
      </div>
    </div>
    <br>
    <br>
     <div class="p-5 mb-4 bg-light rounded-3">
      <div class="container-fluid py-5">
        <h1 class="display-5 fw-bold ">O que é Pokemon?</h1>
        <p class="col-md-8 fs-4 ">Pokemon é a franquia de 25 anos de idade que cria jogos incríveis desde seu inicio, mas que veio se popularizar no ocidente pelas suas adaptações para anime, uma franquia que acompanhou muitos jovens até a vida adulta.</p>
       
      </div>
    </div>
<footer class="text-center text-lg-start bg-light text-muted">

        <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
       
        </section>

        
        <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
          Gustavo Vieira Sousa - Pokemarket - Todos os direitos reservados
         <?php 
         
         var_dump($_SESSION);?>
        </div>

      </footer>
  
</main>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>