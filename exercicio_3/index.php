<?php

//Supondo que o vetor com os valores de faturamento diário seja lido a partir de um arquivo JSON chamado "faturamento.json"

// lê o arquivo JSON com os valores de faturamento diário
$faturamentoJson = file_get_contents('faturamento.json');
$faturamento = json_decode($faturamentoJson, true);

// inicializa as variáveis para cálculo
$menorFaturamento = $faturamento[0];
$maiorFaturamento = $faturamento[0];
$somaFaturamento = 0;
$numDiasAcimaMedia = 0;

// percorre o vetor de faturamento diário
foreach ($faturamento as $valor) {
    // atualiza o menor e o maior faturamento, se necessário
    if ($valor < $menorFaturamento) {
        $menorFaturamento = $valor;
    }
    if ($valor > $maiorFaturamento) {
        $maiorFaturamento = $valor;
    }

    // acumula o valor do faturamento para cálculo da média
    $somaFaturamento += $valor;
}

// calcula a média mensal de faturamento
$numDiasMes = count($faturamento);
$mediaFaturamento = $somaFaturamento / $numDiasMes;

// percorre o vetor novamente para contar o número de dias acima da média
foreach ($faturamento as $valor) {
    if ($valor > $mediaFaturamento) {
        $numDiasAcimaMedia++;
    }
}

// exibe os resultados
echo "Menor faturamento diário: " . $menorFaturamento . PHP_EOL;
echo "Maior faturamento diário: " . $maiorFaturamento . PHP_EOL;
echo "Número de dias acima da média: " . $numDiasAcimaMedia . PHP_EOL;

?>