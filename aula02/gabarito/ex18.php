<?php
/*
 * Gabarito — Exercício 18: Folha de Pagamento Simplificada
 * Nível 4 — Desafio
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

// Colaborador 0
$funcionarios[0]['total_beneficios'] = $funcionarios[0]['beneficios']['vale_transporte']
    + $funcionarios[0]['beneficios']['vale_refeicao'];
$funcionarios[0]['desconto_inss'] = $funcionarios[0]['salario_base'] * 0.08;
$funcionarios[0]['salario_liquido'] = $funcionarios[0]['salario_base']
    + $funcionarios[0]['total_beneficios'] - $funcionarios[0]['desconto_inss'];

// Colaborador 1
$funcionarios[1]['total_beneficios'] = $funcionarios[1]['beneficios']['vale_transporte']
    + $funcionarios[1]['beneficios']['vale_refeicao'];
$funcionarios[1]['desconto_inss'] = $funcionarios[1]['salario_base'] * 0.08;
$funcionarios[1]['salario_liquido'] = $funcionarios[1]['salario_base']
    + $funcionarios[1]['total_beneficios'] - $funcionarios[1]['desconto_inss'];

$totalFolha = $funcionarios[0]['salario_liquido'] + $funcionarios[1]['salario_liquido'];

echo $funcionarios[0]['nome'] . " (" . $funcionarios[0]['cargo'] . ") — Líquido: R$ " . $funcionarios[0]['salario_liquido'] . "\n";
echo $funcionarios[1]['nome'] . " (" . $funcionarios[1]['cargo'] . ") — Líquido: R$ " . $funcionarios[1]['salario_liquido'] . "\n";
echo "Total líquido da folha: R$ " . $totalFolha . "\n";
