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
         <br><br><br><br><br><br>

        <main>
           
  <div class="bg-light px-5  container" style="height:425px ; width:70%;position: absolute; left:15%; right:15%;">
      <form class="row g-3 pt-5" method="POST" action="../Model/usuarioLOG.php">
                <center> <h1>Login</h1></center>
 
                
  <div class="col-md-4 ml-3">
    <label for="validationDefault02" class="form-label ">Email</label>
    <input type="email" class="form-control bg-dark text-white" name="email" placeholder="nome@email.com" id="validationDefault02"  required>
  </div>
                <div class="col-md-4">
    <label for="validationDefault02" class="form-label ">Senha</label>
    <input type="password" class="form-control bg-dark text-white" name="senha" placeholder="sua senha aqui" id="validationDefault02" required>
  </div>
                  <div class="col-12">
    <button class="btn btn-primary" name="logar" type="submit">Logar</button>
  </div>
                <h5>Não passui conta? <a href="index.php">clique aqui para fazer seu cadastro</a> </h5>
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