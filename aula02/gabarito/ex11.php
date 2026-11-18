<?php
/*
 * Gabarito — Exercício 11: Carrinho de Compras (Cálculo de Subtotais e Total)
 * Nível 3 — Intermediário
 */

$carrinho = [
    ['produto' => 'Caderno', 'preco' => 12.50, 'quantidade' => 2],
    ['produto' => 'Caneta',  'preco' => 8.00,  'quantidade' => 3],
    ['produto' => 'Mochila', 'preco' => 15.25, 'quantidade' => 4]
];

$subtotal0 = $carrinho[0]['preco'] * $carrinho[0]['quantidade'];
$subtotal1 = $carrinho[1]['preco'] * $carrinho[1]['quantidade'];
$subtotal2 = $carrinho[2]['preco'] * $carrinho[2]['quantidade'];

$totalCompra = $subtotal0 + $subtotal1 + $subtotal2;

echo $carrinho[0]['produto'] . " — Subtotal: R$ " . $subtotal0 . "\n";
echo $carrinho[1]['produto'] . " — Subtotal: R$ " . $subtotal1 . "\n";
echo $carrinho[2]['produto'] . " — Subtotal: R$ " . $subtotal2 . "\n";
echo "Total da compra: R$ " . $totalCompra . "\n";
