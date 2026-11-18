<?php
/*
 * Gabarito — Exercício 20: Planejamento Completo de Viagem e Rateio de Custos
 * Nível 4 — Desafio
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

$totalPassageiros = count($viagem['passageiros']);
$pesoBagagens = $viagem['passageiros'][0]['bagagem_kg']
    + $viagem['passageiros'][1]['bagagem_kg']
    + $viagem['passageiros'][2]['bagagem_kg'];

$distanciaIdaVolta = $viagem['distancia_ida_km'] * 2;
$litrosNecessarios = $distanciaIdaVolta / $viagem['veiculo']['consumo_km_litro'];
$custoCombustivel = $litrosNecessarios * $viagem['veiculo']['preco_litro'];

$custoHospedagem = $viagem['hospedagem']['diarias'] * $viagem['hospedagem']['valor_diaria'];
$custoTotal = $custoCombustivel + $custoHospedagem;
$valorPorPassageiro = $custoTotal / $totalPassageiros;

$viagem['resumo'] = [
    'total_passageiros' => $totalPassageiros,
    'peso_total_bagagens_kg' => $pesoBagagens,
    'distancia_total_km' => $distanciaIdaVolta,
    'litros_combustivel' => $litrosNecessarios,
    'custo_combustivel' => $custoCombustivel,
    'custo_hospedagem' => $custoHospedagem,
    'custo_total' => $custoTotal,
    'rateio_por_passageiro' => $valorPorPassageiro
];

echo "=== Resumo da Viagem: " . $viagem['destino'] . " ===\n";
echo "Passageiros (" . $viagem['resumo']['total_passageiros'] . "): "
    . $viagem['passageiros'][0]['nome'] . ", "
    . $viagem['passageiros'][1]['nome'] . " e "
    . $viagem['passageiros'][2]['nome'] . "\n";
echo "Peso total das bagagens: " . $viagem['resumo']['peso_total_bagagens_kg'] . " kg\n";
echo "Distância (ida e volta): " . $viagem['resumo']['distancia_total_km'] . " km (" . $viagem['resumo']['litros_combustivel'] . " L)\n";
echo "Custo de combustível: R$ " . $viagem['resumo']['custo_combustivel'] . "\n";
echo "Custo de hospedagem (" . $viagem['hospedagem']['pousada'] . "): R$ " . $viagem['resumo']['custo_hospedagem'] . "\n";
echo "Custo total da viagem: R$ " . $viagem['resumo']['custo_total'] . "\n";
echo "Valor por passageiro: R$ " . $viagem['resumo']['rateio_por_passageiro'] . "\n";
