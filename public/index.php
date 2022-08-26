<?php

try {
    $pdo = new
        PDO(
            'pgsql:host=localhost;' .
                'port=5432;' .
                'dbname=topicos_integradores;' .
                'user=postgres;' .
                'password=rafa9305'
        );

    $inserir = $pdo -> query ("insert into cliente (nome, sobrenome, cpf, datanascimento,rg)
    values ('Rafael','de Oliveira','000.000.000-11','2002-01-24','12356');");

    $clientes = $pdo ->query ("select * from cliente;");
    $dados =  $clientes->fetchAll(PDO::FETCH_OBJ)[1];
    echo $dados->nome . " " . $dados->sobrenome;

} catch (PDOException $e) {
    var_dump($e->getMessage());
    echo "Não foi possivel inserir";
}
