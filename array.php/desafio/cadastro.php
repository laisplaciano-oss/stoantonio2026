<?php

$cliente = [
    "nome" => $_POST["nome"],
    "idade" => $_POST["idade"],
    "email" => $_POST["email"],
    "telefone" => $_POST["telefone"],
    "endereco" => $_POST["endereco"]
];

echo "Nome: " . $cliente["nome"] . "<br>";
echo "Idade: " . $cliente["idade"] . "<br>";
echo "Email: " . $cliente["email"] . "<br>";
echo "Telefone: " . $cliente["telefone"] . "<br>";
echo "Endereço: " . $cliente["endereco"];

?>