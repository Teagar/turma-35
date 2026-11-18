<?php
/*
 * Exercício 15 — Cardápio por Categorias e Montagem de Combo
 * Nível 3 — Intermediário
 *
 * Enunciado:
 * Usando o array $cardapio abaixo:
 * 1. Monte um novo array associativo $combo escolhendo diretamente do $cardapio:
 *    - 'lanche'    => segundo lanche da lista ('X-Bacon')
 *    - 'bebida'    => primeira bebida da lista ('Suco Natural')
 *    - 'sobremesa' => segunda sobremesa da lista ('Brownie')
 * 2. Calcule o valor bruto somando os preços dos 3 itens escolhidos.
 * 3. Calcule o valor final do combo com 10% de desconto (multiplicando por 0.90).
 * 4. Adicione as chaves 'valor_bruto' e 'valor_com_desconto' em $combo e exiba o resumo.
 *
 * Restrições:
 * - Use apenas PHP básico (sem laços e sem condicionais).
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

// Escreva seu código abaixo:
