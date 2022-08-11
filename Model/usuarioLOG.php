<?php
require_once '../Controller/logar.php';

      if(isset($_POST['email'])){
       $email = $_POST ['email'];
       $senha = md5 ($_POST ['senha']);
       
       if((new logar)->checar($email,$senha)){
           $_SESSION['email']=$email;
           $_SESSION['senha']=$senha;
           $_SESSION['nome'] =$row['nome'];
           header("location: ../View/pokemart.php");
         
       }
    
       }
       
       

