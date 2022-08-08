<?php
require_once '../Model/conexao.php';
session_start(); 
class logarADM{
    
    public function checar($nome,$senha){
       $logarADM = conexao::connect()->query("SELECT * "."FROM adiministrador WHERE nome = '$nome' AND senha = '$senha'");
      
         $logarADM->bindVALUE(":nome", $nome); 
         $logarADM->bindVALUE(":senha", $senha);
       
       
    if($logarADM->rowCount()<= 0){
             
             echo"<script> alert('nome ou Senha incorretos');</script>";
             echo"<script> window.location.href='../View/loginADM.php';</script>";
          unset ($_SESSION['nome']);
           unset ($_SESSION['senha']);
          
          
       }
       else{
           $_SESSION['nome']= $nome;
           $_SESSION['senha']=$senha;
          
           header("Location:../View/pokemartADM.php");
       }
}}



