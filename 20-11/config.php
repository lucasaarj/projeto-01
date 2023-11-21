<?php

    $dbHost = 'localhost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName = 'formulario-lucas';

    $conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);

    //if($conexao->connect_errno){
        //echo "ERRO";
    //} else{
        //echo "CONEXÃO EFETUADA COM SUCESSO!";
    //}

?>