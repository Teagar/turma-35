<?php
/*
 * Gabarito — Exercício 12: Matriz 3x3: Soma das Diagonais
 * Nível 3 — Intermediário
 */

$matriz = [
    [4, 9, 2],
    [3, 5, 7],
    [8, 1, 6]
];

$diagonalPrincipal = $matriz[0][0] + $matriz[1][1] + $matriz[2][2];
$diagonalSecundaria = $matriz[0][2] + $matriz[1][1] + $matriz[2][0];
$somaLinhaMeio = $matriz[1][0] + $matriz[1][1] + $matriz[1][2];

echo "Soma da diagonal principal: " . $diagonalPrincipal . "\n";
echo "Soma da diagonal secundária: " . $diagonalSecundaria . "\n";
echo "Soma da linha do meio: " . $somaLinhaMeio . "\n";
