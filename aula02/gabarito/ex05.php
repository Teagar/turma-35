<?php
/*
 * Gabarito — Exercício 05: Soma e Média com Elementos do Array
 * Nível 1 — Iniciante
 */

$notas = [8.0, 7.5, 9.0, 6.5];

$soma = $notas[0] + $notas[1] + $notas[2] + $notas[3];
$media = $soma / count($notas);

echo "Soma das notas: " . $soma . "\n";
echo "Média final: " . $media . "\n";
