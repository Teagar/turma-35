<?php
/*
 * Gabarito — Exercício 06: Trocando Valores de Posição (Swap)
 * Nível 2 — Básico
 */

$podio = ['Bronze', 'Prata', 'Ouro'];

$temp = $podio[0];
$podio[0] = $podio[2];
$podio[2] = $temp;

echo "1º lugar: " . $podio[0] . "\n";
echo "2º lugar: " . $podio[1] . "\n";
echo "3º lugar: " . $podio[2] . "\n";
