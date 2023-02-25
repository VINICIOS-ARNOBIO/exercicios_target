<?php
// Definindo o número a ser verificado na sequência de Fibonacci
$num = 3;

// Definindo os dois primeiros números da sequência de Fibonacci
$num1 = 0;
$num2 = 1;

// Loop para gerar os próximos números da sequência até que o número informado seja atingido ou ultrapassado
while ($num2 <= $num) {
    // Verifica se o número informado está na sequência
    if ($num2 == $num) {
        echo "$num pertence à sequência de Fibonacci.";
        break;
    }
    
    // Gera o próximo número da sequência
    $num3 = $num1 + $num2;
    $num1 = $num2;
    $num2 = $num3;
}

// Caso o número informado não pertença à sequência, exibe mensagem informando
if ($num2 > $num) {
    echo "$num não pertence à sequência de Fibonacci.";
}
?>