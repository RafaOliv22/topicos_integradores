<?php
include "Conection.php";
$clientes = $pdo->query('select * from usuario;')->fetchAll();
$dados = "";
foreach ($clientes as $key => $value) {
    $dados = $dados . "<tr>" .
        "<td>" . $value['id'] . "</td>" .
        "<td>" . $value['nome'] . "</td>" .
        "<td>" . $value['sobrenome'] . "</td>" .
        "<td>" . $value['cpf'] . "</td>" .
        "<td>" . $value['genero'] . "</td>" .
        "<td>" .
        "<td>" .
        "<div class='btn-group' role='group'>" .
        "<a href='editarusuario.php?id=" . $value['id'] . "' type='button' class='btn btn-warning'>" .
        "<i class='fa-solid fa-pen-to-square'> </i> Editar" .
        "</a>" .
        "<button type='button' class='btn btn-danger'>" .
        "<i class='fa-solid fa-trash'> </i> Excluir" .
        "</button>" .
        "</div>" .
        "</td>" .
        "</td>" .
        "</tr>";
}
echo $dados;