<?php

// Itera sobre cada algoritmo de hash disponível usando a função hash_algos()
foreach (hash_algos() as $v) { 

// Aplica o algoritmo de hash $v ao valor da variável $texto e armazena o resultado na variável $codificado 
    $codificado = hash($v, $texto, false);  

// Imprime o nome do algoritmo usado
    echo "Algoritmo: " . $v . "<br>";  

// Imprime o tamanho do texto codificado
    echo "Tamanho: " . strlen($codificado) . "<br>";  

// Imprime o texto codificado
    echo "Texto Codificado: " . $codificado . "<br>";  

// Imprime uma linha em branco para separar as saídas dos diferentes algoritmos
    echo "<br>";  
}

?>

