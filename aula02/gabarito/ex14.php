<?php
/*
 * Gabarito — Exercício 14: Boletim de Turma (Média Individual e Média Geral)
 * Nível 3 — Intermediário
 */

$turma = [
    ['nome' => 'Ana',   'notas' => [8.0, 7.0, 9.0]],
    ['nome' => 'Bruno', 'notas' => [6.0, 7.5, 7.5]],
    ['nome' => 'Carla', 'notas' => [9.0, 9.5, 8.5]]
];

$turma[0]['media'] = ($turma[0]['notas'][0] + $turma[0]['notas'][1] + $turma[0]['notas'][2]) / count($turma[0]['notas']);
$turma[1]['media'] = ($turma[1]['notas'][0] + $turma[1]['notas'][1] + $turma[1]['notas'][2]) / count($turma[1]['notas']);
$turma[2]['media'] = ($turma[2]['notas'][0] + $turma[2]['notas'][1] + $turma[2]['notas'][2]) / count($turma[2]['notas']);

$mediaGeral = ($turma[0]['media'] + $turma[1]['media'] + $turma[2]['media']) / count($turma);

echo $turma[0]['nome'] . " — Média: " . $turma[0]['media'] . "\n";
echo $turma[1]['nome'] . " — Média: " . $turma[1]['media'] . "\n";
echo $turma[2]['nome'] . " — Média: " . $turma[2]['media'] . "\n";
echo "Média geral da turma: " . $mediaGeral . "\n";
