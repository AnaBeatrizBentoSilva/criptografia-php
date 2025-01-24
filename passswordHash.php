<?php
// Define a variável $texto com o valor 'Desenvolvimento WEB'
    $texto = "Desenvolvimento WEB";

// Gera um hash seguro para o valor da variável $texto usando a função password_hash() com o algoritmo padrão
    $codificado = password_hash($texto, PASSWORD_DEFAULT);

// Imprime o texto codificado (o hash gerado)
    echo "Texto Codificado: ".$codificado."<br>";
?>

