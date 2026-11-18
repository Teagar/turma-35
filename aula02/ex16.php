<?php
/*
 * Exercício 16 — Controle de Estoque: Entrada, Saída e Patrimônio
 * Nível 4 — Desafio
 *
 * Enunciado:
 * Dado o array associativo $estoque indexado pelo código de cada produto:
 * 1. Registre a entrada de +15 unidades no produto 'P01'.
 * 2. Registre a saída (venda) de -4 unidades no produto 'P02'.
 * 3. Aplique um reajuste de +10% no preço de 'venda' do produto 'P03' (* 1.10).
 * 4. Para cada produto, crie a chave 'lucro_unitario' (venda - custo).
 * 5. Calcule o patrimônio total em custo parado no estoque somando (custo * quantidade)
 *    dos 3 produtos após as movimentações, e exiba os resultados.
 *
 * Restrições:
 * - Use apenas PHP básico (sem laços e sem condicionais).
 */

$estoque = [
    'P01' => ['nome' => 'Mouse Sem Fio', 'custo' => 30.00, 'venda' => 55.00, 'quantidade' => 10],
    'P02' => ['nome' => 'Headset USB',   'custo' => 80.00, 'venda' => 140.00, 'quantidade' => 14],
    'P03' => ['nome' => 'Webcam HD',     'custo' => 100.00, 'venda' => 150.00, 'quantidade' => 8]
];

// Escreva seu código abaixo:
