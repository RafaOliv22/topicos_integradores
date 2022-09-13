<?php

require "conection.php";
$clientes = $pdo -> query ("select * from cliente") -> fetchAll();
$clientes = [
    'nome' => "rafael",
    'sobrenome' => "oliveira"
];
echo "<pre>";
var_dump($clientes);

/*
foreach ($clientes as $key => $value) {
    echo "<tr>"
        "<td>".$value['nome']."</td>".
        "<td>".$value['sobrenome']."</td>".
        "<td>".$value['cpf']."</td>".
        "<td>".$value['datanascimento']."</td>".
        "<td>".$value['rg']."</td>".

"</tr>";
} */