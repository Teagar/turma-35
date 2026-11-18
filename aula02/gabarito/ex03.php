<?php
/*
 * Gabarito — Exercício 03: Alterando Valores em Posições Específicas
 * Nível 1 — Iniciante
 */

$cidades = ['São Paulo', 'Curitiba', 'Salvador', 'Manaus'];

echo "=== Lista original ===\n";
print_r($cidades);

$cidades[1] = 'Florianópolis';
$cidades[3] = 'Belém';

echo "=== Lista atualizada ===\n";
print_r($cidades);
