<!--
Data: 13/03/2026
Autor: Enzo A. , Enzo R.
Objetivo:

Exercício 5 - Somatório de Fatoriais
Leia 5 números inteiros e mostre a soma dos fatoriais desses números.
-->

<?php

$n1 = $_POST["n1"] ?? null;
$n2 = $_POST["n2"] ?? null;
$n3 = $_POST["n3"] ?? null;
$n4 = $_POST["n4"] ?? null;
$n5 = $_POST["n5"] ?? null;

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $lista_n = [$n1, $n2, $n3, $n4, $n5];

    $soma = 0;

    foreach($lista_n as $n){

        if (is_numeric($n) && $n >= 0) {

            $fat = 1;

            for($i = 1; $i <= $n; $i++){
                $fat *= $i;
            }

            $soma += $fat;
        }
    }

    echo "A soma dos fatoriais é igual a $soma";
}
?>