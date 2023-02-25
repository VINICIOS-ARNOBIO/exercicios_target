<?php

// Definindo a string a ser invertida
$string = "Eu quero entrar na Target!!!";

// Inicializando a string invertida
$stringInvertida = "";

// Percorrendo a string original de trás para frente e adicionando cada caractere na string invertida
for ($i = strlen($string) - 1; $i >= 0; $i--) {
    $stringInvertida .= $string[$i];
}

// Imprimindo a string original e a string invertida
echo "Original: " . $string . "<br>";
echo "Invertida: " . $stringInvertida;

?>