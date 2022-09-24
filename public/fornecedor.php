<?php
include "Conection.php";
try {
    $nome      = $_POST["nome"];
    $cnpj      = $_POST["cnpj"];
    $contato   = $_POST["contato"];
    $sql = "INSERT INTO fornecedor(nome, cnpj, contato) " .
        " VALUES ('{$nome}','{$cnpj }','{$contato}');";
    $pdo->prepare($sql)->execute();
    echo "true";
} catch (PDOException $e) {
    echo $e->getMessage();
}
