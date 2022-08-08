<?php
session_start();
require_once '../Model/conexao.php';
 class cadastrar{
     
      public function inserir($nome,$email,$senha){
          
          $cadastrar = conexao::connect()->query("SELECT * "."FROM usuario WHERE email = '$email'");
         if($cadastrar->rowCount() <=0){
            
         $cadastrar = conexao::connect()->prepare("INSERT INTO usuario(nome, email, senha) VALUES(:nome, :email, :senha)") ;
         $cadastrar->bindValue(":nome", $nome);
         $cadastrar->bindVALUE(":email", $email);
         $cadastrar->bindVALUE(":senha", $senha);
          
         return $cadastrar->execute();
         }
         else{
         echo "<script> alert('Email, já existente'); </script>";
         echo"<script> window.location.href='../View/index.php'; </script>";


             
             
             
         }
      }
     
     
     
     
     
 }

