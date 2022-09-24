<?php
include "Conection.php";
try {
    $nome      = $_POST["nome"];
    $sobrenome = $_POST["sobrenome"];
    $cpf       = $_POST["cpf"];
    $genero    = $_POST["genero"];
    $sql = "INSERT INTO usuario(nome, sobrenome, cpf, genero) " .
        " VALUES ('{$nome}','{$sobrenome}','{$cpf}','{$genero}');";
    $pdo->prepare($sql)->execute();
    echo "true";
} catch (PDOException $e) {
    echo $e->getMessage();
}
