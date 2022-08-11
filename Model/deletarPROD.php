<?php

require_once '../Controller/PRODDELETE.php';

  if(isset($_POST['nome']))
       $nome  = $_POST ['nome'];
       $classific = $_POST ['classific'];
       $marca = ( $_POST ['marca']);
       
       if((new PRODDELETE)->deletar($nome, $classific, $marca)){
           return header('location: ../View/cadastro_prod.php');
       }
      }