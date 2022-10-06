<?php
include "Conection.php";
try {
    $nome      = $_POST["nome"];
    $sobrenome = $_POST["sobrenome"];
    $cpf       = $_POST["cpf"];

    switch ($acao) {
        case 'insert':
            $sql = "INSERT INTO pessoa(nome, sobre_nome, cpf) " .
            " VALUES ('{$nome}','{$sobrenome}','{$cpf}');";
            pdo -> prepare ($sql) -> execute();
            break;

        case 'update':
            $sql = "update pessoa set nome = '{$nome}', " .
            " sobre_nome = '{$sobrenome}', " .
             "cpf = '{$cpf}', " .
        
            pdo -> prepare ($sql) -> execute();
            break;
        
        default:
            # code...
            break;
    }

    $sql = "INSERT INTO pessoa(nome, sobre_nome, cpf) " .
        " VALUES ('{$nome}','{$sobrenome}','{$cpf}');";
    $pdo->prepare($sql)->execute();
    echo "true";
} catch (PDOException $e) {
    echo $e->getMessage();
}
