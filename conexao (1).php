<?php
    $dbhost = ´Localhost´;
    $dbUserName = ´root´;
    $dbPassword = ´´;
    $dbName = ´Formulario´;

    $conexao = new mysqli($dbhost,$dbUserName,$dbPassword,$formulario);

    if($conexao->connect_errno)
    {
        echo "Erro";
    }
    else
    {
        echo "Conexao Efetuada com Sucesso";
    }
?>