<?php
require_once '../Model/conexao.php';
session_start(); 
class logar{
    
    public function checar($email,$senha){
      foreach( $logar = conexao::connect()->query("SELECT * "."FROM usuario WHERE email = '$email' AND senha = '$senha'") as $row );
      
         $logar->bindVALUE(":email", $email); $logar->bindVALUE(":senha", $senha);
       $logar->bindVALUE(":nome", $nome);
       
    if($logar ->rowCount() <= 0){
             
             echo"<script> alert('Email ou Senha incorretos');</script>";
             echo"<script> window.location.href='../View/login.php';</script>";
          unset ($_SESSION['email']);
           unset ($_SESSION['senha']);
           unset ($_SESSION['nome']);
          
       }
       else{
           $_SESSION['email']=$email;
           $_SESSION['senha']=$senha;
           $_SESSION['nome']= $row['nome'];
           header("Location:../View/pokemart.php");
       }
}}
