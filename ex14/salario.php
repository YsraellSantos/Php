<?php

$min = 1320.00;

$salario = $_REQUEST["dados"];

$res = (int) ($salario / $min);

$sob = $salario % $min;

echo "Quem ganha " . number_format($salario, 2, ".", ",") . " por mês, ganha um total de <strong>$res salários</strong>";
echo '<br>';
echo "E sobram um total de $sob";
echo '<br>';

if ($salario < $min) {

    echo "Você ganha mesnos que um salario minimo ".number_format($salario, 2, ",", ".");

}


