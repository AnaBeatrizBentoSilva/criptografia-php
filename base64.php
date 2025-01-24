<?php
// Define uma variável chamada $texto e atribui o valor 'Desenvolvimento WEB'
    $texto = 'Desenvolvimento WEB';

// Aplica a função base64_encode() ao texto e atribui o resultado à variável $criptografada
    $criptografada = base64_encode($texto);

// Exibe uma mensagem junto com o resultado da criptografada base64_encode
    echo "Resultado da criptografia usando base64: " . $criptografada."<br>";

// Aplçica a função base64_decode() para decodificar o valor contido na variável $criptografada 
// E atribui o resultado à variável $textoOriginal.
    $textoOriginal = base64_decode($criptografada);

// Exibe uma mensagem junto com o resultado do textoOriginal base64_encode
    echo "Resultado da decodificação usando base64: " . $textoOriginal;

 ?>

 