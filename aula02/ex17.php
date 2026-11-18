<?php
/*
 * Exercício 17 — Playlist Musical: Reorganizando e Calculando Duração
 * Nível 4 — Desafio
 *
 * Enunciado:
 * Dada a $playlist abaixo com 4 músicas e suas durações em segundos:
 * 1. Troque a primeira música (índice 0) de lugar com a última música (índice 3)
 *    usando uma variável auxiliar $temp.
 * 2. Calcule o tempo total da playlist em segundos ($totalSegundos).
 * 3. Converta $totalSegundos para minutos inteiros e segundos restantes usando
 *    apenas operadores aritméticos:
 *    - $segundosRestantes = $totalSegundos % 60;
 *    - $minutosInteiros   = ($totalSegundos - $segundosRestantes) / 60;
 * 4. Exiba a nova ordem das músicas e a duração total no formato "Xm Ys".
 *
 * Restrições:
 * - Use apenas PHP básico (sem laços e sem condicionais).
 */

$playlist = [
    ['titulo' => 'Aquarela',          'artista' => 'Toquinho',     'duracao' => 215],
    ['titulo' => 'Tempo Perdido',     'artista' => 'Legião Urbana', 'duracao' => 190],
    ['titulo' => 'Anunciação',        'artista' => 'Alceu Valença', 'duracao' => 245],
    ['titulo' => 'Chega de Saudade',  'artista' => 'João Gilberto', 'duracao' => 200]
];

// Escreva seu código abaixo:
