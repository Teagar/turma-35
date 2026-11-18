<?php
/*
 * Exercício 20 — Planejamento Completo de Viagem e Rateio de Custos
 * Nível 4 — Desafio
 *
 * Enunciado:
 * A partir da estrutura $viagem abaixo:
 * 1. Descubra a quantidade de passageiros usando count($viagem['passageiros']).
 * 2. Calcule o peso total das bagagens dos 3 passageiros.
 * 3. Calcule a distância total de IDA E VOLTA (distancia_ida_km * 2), os litros
 *    necessários (distancia_total / consumo_km_litro) e o custo de combustível
 *    (litros * preco_litro).
 * 4. Calcule o custo total de hospedagem (diarias * valor_diaria).
 * 5. Calcule o custo geral da viagem (combustível + hospedagem) e o valor que
 *    cada passageiro deverá pagar dividindo igualmente entre todos.
 * 6. Guarde todos esses resultados dentro de uma nova chave $viagem['resumo']
 *    e exiba um relatório organizado com echo.
 *
 * Restrições:
 * - Use apenas PHP básico (sem laços e sem condicionais).
 */

$viagem = [
    'destino' => 'Paraty - RJ',
    'distancia_ida_km' => 300,
    'veiculo' => [
        'modelo' => 'Hatch 1.0',
        'consumo_km_litro' => 12,
        'preco_litro' => 6.00
    ],
    'hospedagem' => [
        'pousada' => 'Pousada do Porto',
        'diarias' => 3,
        'valor_diaria' => 250.00
    ],
    'passageiros' => [
        ['nome' => 'Rafael',  'bagagem_kg' => 15.5],
        ['nome' => 'Beatriz', 'bagagem_kg' => 18.0],
        ['nome' => 'Tiago',   'bagagem_kg' => 12.5]
    ]
];

// Escreva seu código abaixo:
