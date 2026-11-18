<?php
/*
 * Exercício 19 — Tabela de Campeonato: Atualizando Partida e Estatísticas
 * Nível 4 — Desafio
 *
 * Enunciado:
 * A tabela abaixo mostra 3 times antes da última rodada:
 * 1. Registre no array o resultado da partida:
 *    Estrela FC 2 x 1 Raio Azul
 *    (Atualize 'vitorias'/'derrotas', 'gols_pro' e 'gols_contra' dos dois times).
 * 2. Para TODOS os 3 times da tabela, calcule e grave as novas chaves:
 *    - 'jogos'      => vitorias + empates + derrotas
 *    - 'pontos'     => (vitorias * 3) + empates
 *    - 'saldo_gols' => gols_pro - gols_contra
 * 3. Exiba o resumo de pontos e saldo de gols de cada time.
 *
 * Restrições:
 * - Use apenas PHP básico (sem laços e sem condicionais).
 */

$tabela = [
    ['nome' => 'Estrela FC', 'vitorias' => 4, 'empates' => 2, 'derrotas' => 1, 'gols_pro' => 11, 'gols_contra' => 6],
    ['nome' => 'Raio Azul',  'vitorias' => 4, 'empates' => 1, 'derrotas' => 2, 'gols_pro' => 10, 'gols_contra' => 7],
    ['nome' => 'Serra Verde','vitorias' => 2, 'empates' => 3, 'derrotas' => 2, 'gols_pro' => 8,  'gols_contra' => 8]
];

// Escreva seu código abaixo:
