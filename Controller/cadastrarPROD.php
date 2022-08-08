<?php
session_start();
require_once '../Model/conexao.php';
 class cadastrarPROD{
     
      public function inserir($nome,$classific,$marca){
          
          $cadastrar = conexao::connect()->query("SELECT * "."FROM produto WHERE classific = '$classific' AND nome = '$nome'");
         if($cadastrar->rowCount() <=0){
            
         $cadastrar = conexao::connect()->prepare("INSERT INTO produto(nome, classific, marca) VALUES(:nome, :classific, :marca)") ;
         $cadastrar->bindValue(":nome", $nome);
         $cadastrar->bindVALUE(":classific", $classific);
         $cadastrar->bindVALUE(":marca", $marca);
          
         return $cadastrar->execute();
         }
         else{
         echo "<script> alert('Esse produto já existe'); </script>";
         echo"<script> window.location.href='../View/pokemartADM.php'; </script>";


             
             
             
         }
      }
     
     
     
     
     
 }