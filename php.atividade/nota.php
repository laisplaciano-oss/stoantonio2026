<?php

$nome = "Lais";

$nota1 = 8;
$nota2 = 7;
$nota3 = 9;

$media = ($nota1 + $nota2 + $nota3) / 3;

$resultado = $media >= 6 ? "Aprovado" : "Reprovado";

echo "Nome: " . $nome . "<br>";
echo "Média: " . $media . "<br>";
echo "Resultado: " . $resultado;

?>