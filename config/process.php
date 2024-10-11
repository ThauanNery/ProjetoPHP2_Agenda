<?php

    session_start();

    include_once("conexao.php");
    include_once("url.php");

    $data = $_POST;

    if(!empty($data)) //MODIFICAÇÕES NO BD
    {
        //CREATE
            if($data["type"] === "create")
            {
                $nome = $data["nome"];
                $celular = $data["celular"];
                $email = $data["email"];
                $observacao = $data["observacao"];

                $query = "INSERT INTO contatos (nome, celular, email, observacao) VALUES (:nome, :celular, :email, :observacao)";

                $stmt = $conn->prepare($query);

                $stmt->bindParam(":nome", $nome);
                $stmt->bindParam(":celular", $celular);
                $stmt->bindParam(":email", $email);
                $stmt->bindParam(":observacao", $observacao);

                try
                {
                   $stmt->execute();
                   $_SESSION["msg"] = "Contato adicionado!";
                }
                catch(PDOException $e)
                {
                    //ERRO NA CONEXAO
                    $error = $e->getMessage();
                    echo "Erro: $error";
                }

            }
            else if($data["type"] === "edit")
            {
                $id = $data["id"];
                $nome = $data["nome"];
                $celular = $data["celular"];
                $email = $data["email"];
                $observacao = $data["observacao"];
                
                $query = "UPDATE contatos SET nome = :nome, celular = :celular, email = :email, observacao = :observacao WHERE id = :id";

                $stmt = $conn->prepare($query);

                $stmt->bindParam(":id", $id);
                $stmt->bindParam(":nome", $nome);
                $stmt->bindParam(":celular", $celular);
                $stmt->bindParam(":email", $email);
                $stmt->bindParam(":observacao", $observacao);

                try
                {
                   $stmt->execute();
                   $_SESSION["msg"] = "Contato atualizado!";
                }
                catch(PDOException $e)
                {
                    //ERRO NA CONEXAO
                    $error = $e->getMessage();
                    echo "Erro: $error";
                }

            }
            else if($data["type"] === "delete")
            {
                $id = $data["id"];

                $query = "DELETE FROM contatos WHERE id = :id";

                $stmt = $conn->prepare($query);

                $stmt->bindParam(":id", $id);

                try
                {
                   $stmt->execute();
                   $_SESSION["msg"] = "Contato removido!";
                }
                catch(PDOException $e)
                {
                    //ERRO NA CONEXAO
                    $error = $e->getMessage();
                    echo "Erro: $error";
                }
            }

        //REDIRECIONADO PARA HOME
        header("location:" . $BASE_URL ."../index.php");
    }
    else //SELEÇÃO DE DADOS
    {
        $id;

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
    }

    //FECHAR CONEXÃO
    $conn = null;
   

   