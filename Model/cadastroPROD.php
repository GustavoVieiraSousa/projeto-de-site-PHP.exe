<?php
require_once '../Controller/cadastrarPROD.php';

  if(isset($_POST['nome']))
       $nome  = $_POST ['nome'];
       $classific = $_POST ['classific'];
       $marca = ( $_POST ['marca']);
       
       if((new cadastrarPROD)->inserir($nome, $classific, $marca)){
           return header('location: ../View/cadastro_prod.php');
       }
 