<?php
require_once '../Controller/logarADM.php';

      if(isset($_POST['nome'])){
       $nome= $_POST ['nome'];
       $senha =$_POST ['senha'];
       
       if((new logarADM())->checar($nome,$senha)){
            $_SESSION['nome'] =$nome;
           $_SESSION['senha']=$senha;
          
           header("location: ../View/pokemartADM.php");
         
       }
    
       }