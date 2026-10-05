<?php

$mensalidade = 500;
$taxa = 10;

$reajuste = $mensalidade * ($taxa / 100);
$novoValor = $mensalidade + $reajuste;

echo "O novo valor da mensalidade é: R$ " . $novoValor;

?>