<?php
/*
 * Exercício 18 — Folha de Pagamento Simplificada
 * Nível 4 — Desafio
 *
 * Enunciado:
 * Dado o array $funcionarios com 2 colaboradores:
 * 1. Para cada colaborador, calcule e adicione no próprio array dele:
 *    - 'total_beneficios': soma de 'vale_transporte' + 'vale_refeicao'
 *    - 'desconto_inss': 8% do 'salario_base' (salario_base * 0.08)
 *    - 'salario_liquido': salario_base + total_beneficios - desconto_inss
 * 2. Calcule o desembolso total da empresa somando os salários líquidos dos 2 colaboradores.
 * 3. Exiba o resumo do contracheque de cada colaborador e o total da folha.
 *
 * Restrições:
 * - Use apenas PHP básico (sem laços e sem condicionais).
 */

$funcionarios = [
    [
        'nome' => 'Lucas Andrade',
        'cargo' => 'Assistente de TI',
        'salario_base' => 2500.00,
        'beneficios' => [
            'vale_transporte' => 220.00,
            'vale_refeicao' => 480.00
        ]
    ],
    [
        'nome' => 'Fernanda Lima',
        'cargo' => 'Analista Júnior',
        'salario_base' => 3500.00,
        'beneficios' => [
            'vale_transporte' => 180.00,
            'vale_refeicao' => 520.00
        ]
    ]
];

// Escreva seu código abaixo:
