<?php
/*
 * Gabarito — Exercício 17: Playlist Musical: Reorganizando e Calculando Duração
 * Nível 4 — Desafio
 */

$playlist = [
    ['titulo' => 'Aquarela',         'artista' => 'Toquinho',      'duracao' => 215],
    ['titulo' => 'Tempo Perdido',    'artista' => 'Legião Urbana', 'duracao' => 190],
    ['titulo' => 'Anunciação',       'artista' => 'Alceu Valença', 'duracao' => 245],
    ['titulo' => 'Chega de Saudade', 'artista' => 'João Gilberto', 'duracao' => 200]
];

$temp = $playlist[0];
$playlist[0] = $playlist[3];
$playlist[3] = $temp;

$totalSegundos = $playlist[0]['duracao'] + $playlist[1]['duracao']
    + $playlist[2]['duracao'] + $playlist[3]['duracao'];

$segundosRestantes = $totalSegundos % 60;
$minutosInteiros = ($totalSegundos - $segundosRestantes) / 60;

echo "1. " . $playlist[0]['titulo'] . " — " . $playlist[0]['artista'] . "\n";
echo "2. " . $playlist[1]['titulo'] . " — " . $playlist[1]['artista'] . "\n";
echo "3. " . $playlist[2]['titulo'] . " — " . $playlist[2]['artista'] . "\n";
echo "4. " . $playlist[3]['titulo'] . " — " . $playlist[3]['artista'] . "\n";
echo "Duração total: " . $minutosInteiros . "m " . $segundosRestantes . "s (" . $totalSegundos . "s)\n";
