<?php
// Define uma variável chamada $texto e atribui o valor 'Desenvolvimento WEB'
    $texto = 'Desenvolvimento WEB'; 

// Aplica a função sha1() ao texto e atribui o resultado à variável $codificado
    $codificado = sha1($texto); 

// Exibe uma mensagem junto com o resultado da codificação SHA1
    echo "Resultado do texto codificação usando sha1: " . $codificado; 
?>

