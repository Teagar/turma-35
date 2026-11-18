<?php
/*
 * Gabarito — Exercício 08: Atualizando e Adicionando Chaves em um Produto
 * Nível 2 — Básico
 */

$produto = [
    'nome' => 'Teclado Mecânico',
    'preco' => 250.00,
    'estoque' => 12
];

$produto['preco'] = $produto['preco'] - 15.00;
$produto['estoque'] = $produto['estoque'] + 10;
$produto['categoria'] = 'Periféricos';

print_r($produto);
