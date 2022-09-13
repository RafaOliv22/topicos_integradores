<?php
include "conection.php";
try{
    $nome = $_POST["nome"];
    $sobrenome   = $_POST["sobrenome"];
    $cpf = $_POST["cpf"];
    $sql = "insert into pessoa (nome, sobre_nome, cpf) VALUES ({$nome}, {$sobrenome}, {$cpf});";
} catch (PDOException $e){

}


echo $sql;
