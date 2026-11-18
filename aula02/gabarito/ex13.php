<?php
/*
 * Gabarito — Exercício 13: Cadastro de Empresa com Sub-arrays Aninhados
 * Nível 3 — Intermediário
 */

$empresa = [
    'razao_social' => 'Tech Brasil Ltda',
    'cnpj' => '12.345.678/0001-90',
    'endereco' => [
        'cidade' => 'Belo Horizonte',
        'uf' => 'MG'
    ],
    'telefones' => [
        '(31) 3333-1000',
        '(31) 99999-2000'
    ]
];

$empresa['telefones'][] = '(31) 98888-3000';

echo "Empresa: " . $empresa['razao_social'] . " (" . $empresa['cnpj'] . ")\n";
echo "Localização: " . $empresa['endereco']['cidade'] . " - " . $empresa['endereco']['uf'] . "\n";
echo "Novo telefone: " . $empresa['telefones'][2] . "\n";
echo "Total de telefones: " . count($empresa['telefones']) . "\n";
