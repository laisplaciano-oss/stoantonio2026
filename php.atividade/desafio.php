<?php

$nota1 = 70;
$nota2 = 50;

$media = ($nota1 + $nota2) / 2;

echo "Nota 1: " . $nota1 . "<br>";
echo "Nota 2: " . $nota2 . "<br>";
echo "Média: " . $media . "<br>";

if ($media >= 60) {
    echo "Aluno aprovado!";
} elseif ($media >= 40) {
    echo "Aluno em recuperação!";
} else {
    echo "Aluno reprovado!";
}

?>