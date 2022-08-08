<?php

session_start();
require_once '../Model/conexao.php';
 class PRODDELETE{
     
       public function deletar($nome,$classific,$marca){
            $cadastrar = conexao::connect()->query("SELECT * "."FROM produto WHERE nome = '$nome' AND  classific ='$classific' AND marca = '$marca'");
        
         if($cadastrar ->rowCount()<=0){   
         echo "<script> alert('produto não existe')</script>";
              echo "<script> window.location.href='../View/deletar_prod.php'</script>";
       }
         else{
            
              
               $cadastrar = conexao::connect()->prepare("DELETE FROM `produto` WHERE classific = '$classific' AND nome = '$nome'") ;
        
          echo "<script> alert('produto deletado');</script>";
          echo "<script> window.location.href='../View/deletar_prod.php'</script>";
          $cadastrar->execute();
         }
         
       }

             
             
             
         }
      
     
     
     
     
     
 
