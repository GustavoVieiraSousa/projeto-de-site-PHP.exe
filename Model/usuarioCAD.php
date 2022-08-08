<?php
require_once '../Controller/cadastrar.php';
session_start(); 
 
       $nome  = $_POST ['nome'];
       $email = $_POST ['email'];
       $senha = md5( $_POST ['senha']);
       
       if((new cadastrar)->inserir($nome, $email, $senha)){
           return header("location: ../View/login.php");
 
 }