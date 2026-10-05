<?php

$salario = 2000;

$inss = $salario * 0.09;
$valeTransporte = $salario * 0.06;

$salarioLiquido = $salario - $inss - $valeTransporte;

echo "O salário líquido é: R$ " . $salarioLiquido;

?>