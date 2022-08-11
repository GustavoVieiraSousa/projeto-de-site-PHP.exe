<?php
require_once '../Model/conexao.php';
session_start(); 
class estoqueSelect{

    public function checar_estoque($cod_estoque,$nome_estoque){
        foreach( $checar= conexao::connect()->query("SELECT * "."FROM estoque WHERE cod_estoque = '$cod_estoque' AND nome_estoque = '$nome_estoque'")as $row);
       
          $checar->bindVALUE(":cod_estoque", $cod_estoque); 
          $checar->bindVALUE(":nome_estoque", $nome_estoque);
          $checar->bindVALUE(":CEP", $CEP);
          $checar->bindVALUE(":num_prod", $num_prod);
        
        
     if($checar->rowCount()<= 0){
              
              echo"<script> alert('nome ou Senha incorretos');</script>";
              echo"<script> window.location.href='../View/loginADM.php';</script>";
           unset ($_SESSION['cod_estoque']);
            unset ($_SESSION['nome_estoque']);
            unset ($_SESSION['CEP']);
            unset ($_SESSION['num_prod']);
           
           
        }
        else{
            $_SESSION['cod_estoque']= $cod_estoque;
            $_SESSION['nome_estoque']=$nome_estoque;
            $_SESSION['CEP']= $row['CEP'];
            $_SESSION['num_prod']= $row['num_prod'];
            header("Location:../View/estoque.php");
        }
 }
    public function mostrar($nome_estoque){
        $nome = $_SESSION['nome_estoque'];
        echo "'$nome'";
    }





}


