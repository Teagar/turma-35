<?php
/*
 * Exercício 09 — Montando um Endereço Completo e Limpando Dados
 * Nível 2 — Básico
 *
 * Enunciado:
 * Dado o array $endereco abaixo:
 * 1. Remova a chave 'observacao_interna' usando unset().
 * 2. Monte uma string $enderecoCompleto concatenando os dados restantes no formato:
 *    "Av. Paulista, nº 1000 - Bela Vista, São Paulo - CEP: 01310-100"
 * 3. Exiba a string $enderecoCompleto e a quantidade de chaves restantes no array.
 *
 * Restrições:
 * - Use apenas PHP básico (sem laços e sem condicionais).
 */

$endereco = [
    'rua' => 'Av. Paulista',
    'numero' => 1000,
    'bairro' => 'Bela Vista',
    'cidade' => 'São Paulo',
    'cep' => '01310-100',
    'observacao_interna' => 'Entregar apenas na portaria lateral'
];

// Escreva seu código abaixo:
