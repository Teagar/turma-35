<?php
/*
 * Gabarito — Exercício 02: Adicionando Novos Elementos ao Final do Array
 * Nível 1 — Iniciante
 */

$cores = ['Azul', 'Verde', 'Amarelo'];

$cores[] = 'Vermelho';
$cores[] = 'Roxo';

echo "Quantidade total de cores: " . count($cores) . "\n";
print_r($cores);
