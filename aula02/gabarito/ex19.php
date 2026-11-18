<?php
/*
 * Gabarito — Exercício 19: Tabela de Campeonato: Atualizando Partida e Estatísticas
 * Nível 4 — Desafio
 */

$tabela = [
    ['nome' => 'Estrela FC',  'vitorias' => 4, 'empates' => 2, 'derrotas' => 1, 'gols_pro' => 11, 'gols_contra' => 6],
    ['nome' => 'Raio Azul',   'vitorias' => 4, 'empates' => 1, 'derrotas' => 2, 'gols_pro' => 10, 'gols_contra' => 7],
    ['nome' => 'Serra Verde', 'vitorias' => 2, 'empates' => 3, 'derrotas' => 2, 'gols_pro' => 8,  'gols_contra' => 8]
];

// Atualizando partida: Estrela FC 2 x 1 Raio Azul
$tabela[0]['vitorias'] = $tabela[0]['vitorias'] + 1;
$tabela[0]['gols_pro'] = $tabela[0]['gols_pro'] + 2;
$tabela[0]['gols_contra'] = $tabela[0]['gols_contra'] + 1;

$tabela[1]['derrotas'] = $tabela[1]['derrotas'] + 1;
$tabela[1]['gols_pro'] = $tabela[1]['gols_pro'] + 1;
$tabela[1]['gols_contra'] = $tabela[1]['gols_contra'] + 2;

// Calculando estatísticas dos 3 times
$tabela[0]['jogos'] = $tabela[0]['vitorias'] + $tabela[0]['empates'] + $tabela[0]['derrotas'];
$tabela[0]['pontos'] = ($tabela[0]['vitorias'] * 3) + $tabela[0]['empates'];
$tabela[0]['saldo_gols'] = $tabela[0]['gols_pro'] - $tabela[0]['gols_contra'];

$tabela[1]['jogos'] = $tabela[1]['vitorias'] + $tabela[1]['empates'] + $tabela[1]['derrotas'];
$tabela[1]['pontos'] = ($tabela[1]['vitorias'] * 3) + $tabela[1]['empates'];
$tabela[1]['saldo_gols'] = $tabela[1]['gols_pro'] - $tabela[1]['gols_contra'];

$tabela[2]['jogos'] = $tabela[2]['vitorias'] + $tabela[2]['empates'] + $tabela[2]['derrotas'];
$tabela[2]['pontos'] = ($tabela[2]['vitorias'] * 3) + $tabela[2]['empates'];
$tabela[2]['saldo_gols'] = $tabela[2]['gols_pro'] - $tabela[2]['gols_contra'];

echo $tabela[0]['nome'] . " — Jogos: " . $tabela[0]['jogos'] . " | Pontos: " . $tabela[0]['pontos'] . " | Saldo: " . $tabela[0]['saldo_gols'] . "\n";
echo $tabela[1]['nome'] . " — Jogos: " . $tabela[1]['jogos'] . " | Pontos: " . $tabela[1]['pontos'] . " | Saldo: " . $tabela[1]['saldo_gols'] . "\n";
echo $tabela[2]['nome'] . " — Jogos: " . $tabela[2]['jogos'] . " | Pontos: " . $tabela[2]['pontos'] . " | Saldo: " . $tabela[2]['saldo_gols'] . "\n";
