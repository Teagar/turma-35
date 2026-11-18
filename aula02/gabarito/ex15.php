<?php
/*
 * Gabarito — Exercício 15: Cardápio por Categorias e Montagem de Combo
 * Nível 3 — Intermediário
 */

$cardapio = [
    'lanches' => [
        ['nome' => 'Hambúrguer Simples', 'preco' => 18.00],
        ['nome' => 'X-Bacon',            'preco' => 25.00]
    ],
    'bebidas' => [
        ['nome' => 'Suco Natural', 'preco' => 8.00],
        ['nome' => 'Refrigerante', 'preco' => 6.00]
    ],
    'sobremesas' => [
        ['nome' => 'Pudim',   'preco' => 10.00],
        ['nome' => 'Brownie', 'preco' => 12.00]
    ]
];

$combo = [
    'lanche' => $cardapio['lanches'][1],
    'bebida' => $cardapio['bebidas'][0],
    'sobremesa' => $cardapio['sobremesas'][1]
];

$combo['valor_bruto'] = $combo['lanche']['preco'] + $combo['bebida']['preco'] + $combo['sobremesa']['preco'];
$combo['valor_com_desconto'] = $combo['valor_bruto'] * 0.90;

echo "Combo escolhido: "
    . $combo['lanche']['nome'] . " + "
    . $combo['bebida']['nome'] . " + "
    . $combo['sobremesa']['nome'] . "\n";
echo "Valor bruto: R$ " . $combo['valor_bruto'] . "\n";
echo "Valor com 10% de desconto: R$ " . $combo['valor_com_desconto'] . "\n";
