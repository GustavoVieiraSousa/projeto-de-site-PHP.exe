<?php session_start(); 
$nome = $_SESSION['nome_estoque'];
$id = $_SESSION['cod_estoque'];
$CEP = $_SESSION['CEP'];
?>
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
     <center> <label for="validationDefault02" class="form-label "> O nome do estoque é: <?php  echo $nome;  ?><br>O seu ID é: <?php  echo $id;  ?><br>O CEP do estoque é: <?php  echo $CEP;  ?>  </label></center>
                <h5><a href="ver_estoque.php">clique aqui para voltar a seleção de estoques</a> </h5>

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