<?php

    $host = "localhost";
    $dbname = "cursophp";
    $user ="root";
    $pass = "";

    try
    {
        $conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);

        //Modo de erros
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch(PDOException $e)
    {
        //ERRO NA CONEXAO
        $error = $e->getMessage();
        echo "Erro: $error";
    }