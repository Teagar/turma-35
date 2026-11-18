<?php
/*
 * Gabarito — Exercício 09: Montando um Endereço Completo e Limpando Dados
 * Nível 2 — Básico
 */

$endereco = [
    'rua' => 'Av. Paulista',
    'numero' => 1000,
    'bairro' => 'Bela Vista',
    'cidade' => 'São Paulo',
    'cep' => '01310-100',
    'observacao_interna' => 'Entregar apenas na portaria lateral'
];

unset($endereco['observacao_interna']);

$enderecoCompleto = $endereco['rua'] . ", nº " . $endereco['numero']
    . " - " . $endereco['bairro'] . ", " . $endereco['cidade']
    . " - CEP: " . $endereco['cep'];

echo $enderecoCompleto . "\n";
echo "Chaves restantes no array: " . count($endereco) . "\n";
