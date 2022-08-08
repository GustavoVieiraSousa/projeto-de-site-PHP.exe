<?php session_start(); ?>
<html>
    <head>
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
         <header class="navbar navbar-expand navbar-dark flex-column flex-md-row bd-navbar mx-auto justify-content-center mt-5" style="height:160px ;">
  <a class="navbar-brand mr-0 mr-md-2" href="/" aria-label="Bootstrap">
</a>

  <div class="navbar-nav-scroll">
      <ul class="navbar-nav bd-navbar-nav flex-row pt-5 mx-auto justify-content-center" style="height: 20px;">
      <li class="nav-item">
          <a class="nav-link fw-bold px-2 mx-3"  href="pokemartADM.php">POKEMARKET</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active fw-bold px-2 mx-3"  href="/" >POKEDEX</a>
      </li>
      <li class="nav-item">
          <a class="nav-link fw-bold px-2 mx-3"  href="cadastro_prod.php" >CAD PROD</a>
      </li>
      <li class="nav-item">
          <a class="nav-link fw-bold px-2 mx-3"  href="ver_estoque.php">Procurar estoque</a>
      </li>

      <li class="nav-item">
        <a class="nav-link fw-bold px-2 mx-3" href="/">CARRINHO</a>
      </li>
      
    </ul>
  </div>

 
  <a class="btn btn-bd-download d-none d-lg-inline-block mb-3 mb-md-0 ml-md-3" href="https://github.com/twbs/bootstrap/archive/v4.0.0.zip">Download</a>
</header>
         <br><br><br><br><br><br>

        <main>
           
  <div class="bg-light px-5  container" style="height:425px ; width:70%;position: absolute; left:15%; right:15%;">
      <form class="row g-3 pt-5" method="POST" action="../Model/cadastroPROD.php">
                <center> <h1>Cadastro produto</h1></center>
 
                
  <div class="col-md-4 ml-3">
    <label for="validationDefault02" class="form-label ">nome</label>
    <input type="text" class="form-control bg-dark text-white" name="nome" placeholder="nome@email.com" id="validationDefault02"  required>
  </div>
                <div class="col-md-4">
    <label for="validationDefault02" class="form-label ">classificação prod</label>
    <input type="text" class="form-control bg-dark text-white" name="classific" placeholder="sua senha aqui" id="validationDefault02" required>
  </div>
                <div class="col-md-4">
                  <label for="validationDefault02" class="form-label ">marca</label>
    <input type="text" class="form-control bg-dark text-white" name="marca" placeholder="sua senha aqui" id="validationDefault02" required>
  </div>
                  <div class="col-12">
    <button class="btn btn-primary" name="logar" type="submit">cadastrar</button>
  </div>
                <h5>
                    <a href="deletar_prod.php">clique aqui para deletar algum produto</a> </h5>
</form>
            </div>
            <br><br><br><br><br><br><br><br><Br><br><br><br><br><br><br><Br><br>
            <footer class="text-center text-lg-start bg-light text-muted">

        <section class="d-flex justify-content-center justify-content-lg-between p-5 border-bottom">
       
        </section>

        
        <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
          Gustavo Vieira Sousa - Pokemarket - Todos os direitos reservados
         
        </div>

      </footer>
  
</main>

     </body>
</html>