<?php
// Define a variável $texto com o valor 'Técnico em Desenvolvimento de Sistemas'
    $texto = 'Técnico em Desenvolvimento de Sistemas'; 

// Aplica a função hash com o algoritmo ripemd160 ao valor da variável $texto 
// E armazena o resultado na variável $criptografada
    $criptografada = hash('ripemd160', $texto);

// Imprime o resultado da criptografia ripemd160
    echo "Resultado da criptografia usando função Hash com o algoritmo ripem160: " . $criptografada . "<br>";  

// Define novamente a variável $texto com o mesmo valor
    $texto = 'Técnico em Desenvolvimento de Sistemas';  

// Aplica a função hash com o algoritmo sha256 ao valor da variável $texto 
// E armazena o resultado na variável $criptografada
    $criptografada = hash('sha256', $texto);  

// Imprime o resultado da criptografia sha256
    echo "Resultado da criptografia usando função Hash com o algoritmo sha256: " . $criptografada . "<br>";  

?>


