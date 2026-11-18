<?php
/*
 * Gabarito — Exercício 16: Controle de Estoque: Entrada, Saída e Patrimônio
 * Nível 4 — Desafio
 */

$estoque = [
    'P01' => ['nome' => 'Mouse Sem Fio', 'custo' => 30.00,  'venda' => 55.00,  'quantidade' => 10],
    'P02' => ['nome' => 'Headset USB',   'custo' => 80.00,  'venda' => 140.00, 'quantidade' => 14],
    'P03' => ['nome' => 'Webcam HD',     'custo' => 100.00, 'venda' => 150.00, 'quantidade' => 8]
];

$estoque['P01']['quantidade'] = $estoque['P01']['quantidade'] + 15;
$estoque['P02']['quantidade'] = $estoque['P02']['quantidade'] - 4;
$estoque['P03']['venda'] = $estoque['P03']['venda'] * 1.10;

$estoque['P01']['lucro_unitario'] = $estoque['P01']['venda'] - $estoque['P01']['custo'];
$estoque['P02']['lucro_unitario'] = $estoque['P02']['venda'] - $estoque['P02']['custo'];
$estoque['P03']['lucro_unitario'] = $estoque['P03']['venda'] - $estoque['P03']['custo'];

$patrimonioCusto = ($estoque['P01']['custo'] * $estoque['P01']['quantidade'])
    + ($estoque['P02']['custo'] * $estoque['P02']['quantidade'])
    + ($estoque['P03']['custo'] * $estoque['P03']['quantidade']);

print_r($estoque);
echo "Patrimônio total em estoque (preço de custo): R$ " . $patrimonioCusto . "\n";
