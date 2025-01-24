<?php
// Define a variável $texto com o valor 'Desenvolvimento WEB'
    $texto = "Desenvolvimento WEB";

// Gera um hash seguro para o valor da variável $texto usando a função password_hash() com o algoritmo padrão
    $codificado = password_hash($texto, PASSWORD_DEFAULT);  

// Imprime o texto codificado (o hash gerado)
    echo "Texto Codificado: " . $codificado . "<br>";  

// Verifica se o texto "Desenvolvimento WEB" corresponde ao texto original que foi codificado, usando a função password_verify()
    if (password_verify("Desenvolvimento WEB", $codificado)) {
        echo 'Texto Correto';  

// Caso o texto não corresponda, imprime "Texto Incorreto"
    } else {
        echo 'Texto Incorreto'; 
    }
?>

