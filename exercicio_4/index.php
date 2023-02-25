<?php
// Define o faturamento mensal de cada estado
$faturamento = [
    'SP' => 67836.43,
    'RJ' => 36678.66,
    'MG' => 29229.88,
    'ES' => 27165.48,
    'Outros' => 19849.53
];

// Calcula o total mensal da distribuidora
$total = array_sum($faturamento);

// Calcula o percentual de representação de cada estado
foreach ($faturamento as $estado => $valor) {
    $percentual = ($valor / $total) * 100;
    echo $estado . ": " . number_format($percentual, 2) . "%<br>";
}
?>