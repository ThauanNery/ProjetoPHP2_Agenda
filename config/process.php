<?php

    session_start();

    include_once("conexao.php");
    include_once("url.php");

    if(!empty($_GET))
    {
        $id = $_GET['id'];
    }


    //retorna todos os contatos
    $contacts = [];

    $query =  "SELECT * FROM contatos";

    $stmt = $conn->prepare($query);

    $stmt->execute();

    $contacts = $stmt->fetchAll();

    //retorna um contato
    if(!empty($id))
    {
        $query = "SELECT * FROM contatos WHERE id = :id";
 
        $stmt = $conn->prepare($query);
 
        $stmt->bindParam(":id", $id);
 
        $stmt->execute();
         
        $contact = $stmt->fetch();
    }
    else
    {
 
    }

   