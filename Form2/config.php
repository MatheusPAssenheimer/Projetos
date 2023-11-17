<?php

    $dbHost = 'Localhost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName = 'formulario-mat';

    $conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);

   // if ($conexao -> connect_errno)
   // {
  //      echo "Error";
   // }
  //  else {
   //     echo "Conexão efetuada";
   // }
?>