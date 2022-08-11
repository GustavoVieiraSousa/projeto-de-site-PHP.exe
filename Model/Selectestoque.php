<?php
require_once '../Controller/estoqueSelect.php';

  if(isset($_POST['cod_estoque'])){
       $cod_estoque  = $_POST ['cod_estoque'];
       $nome_estoque = $_POST ['nome_estoque'];
      
       
       if((new estoqueSelect)->checar_estoque($cod_estoque, $nome_estoque)){
        $_SESSION['cod_estoque']=$cod_estoque;
        $_SESSION['nome_estoque']= $nome_estoque;
        $_SESSION['CEP'] =$row['CEP'];
        $_SESSION['num_prod']= $row['num_prod'];
           return header('location: ../View/estoque.php');
       }}