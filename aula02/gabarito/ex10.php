<?php
/*
 * Gabarito — Exercício 10: Conversor de Temperaturas Guardadas em Array
 * Nível 2 — Básico
 */

$celsius = [0, 25, 100];

$fahrenheit = [
    ($celsius[0] * 9 / 5) + 32,
    ($celsius[1] * 9 / 5) + 32,
    ($celsius[2] * 9 / 5) + 32
];

echo $celsius[0] . " °C = " . $fahrenheit[0] . " °F\n";
echo $celsius[1] . " °C = " . $fahrenheit[1] . " °F\n";
echo $celsius[2] . " °C = " . $fahrenheit[2] . " °F\n";
