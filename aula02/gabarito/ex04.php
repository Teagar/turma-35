<?php
/*
 * Gabarito — Exercício 04: Removendo Elementos e Observando os Índices
 * Nível 1 — Iniciante
 */

$tarefas = [
    'Acordar cedo',
    'Tomar café',
    'Assistir TV',
    'Estudar PHP',
    'Fazer exercícios'
];

unset($tarefas[2]);

echo "Quantidade de tarefas restantes: " . count($tarefas) . "\n";
print_r($tarefas);
