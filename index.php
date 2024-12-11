<?php

// Definir arrays de caracteres
$uppercase = range('A', 'Z'); // Letras mayúsculas
$lowercase = range('a', 'z'); // Letras minúsculas
$numbers = range(0, 9);       // Números
$specialCharacters = ['@', '#', '$', '%', '&', '*', '!', '?', '-', '_', '+', '='];

function passwordGenerator(int $numberChars, array $allowedChars) : string
{

    if ($numberChars > 30 and $numberChars < 1 ) {
        throw new InvalidArgumentException("Cantidad de caracteres no permitida");
    }

    if(empty($allowedChars)){
        throw new InvalidArgumentException("El array de caracteres permitidos no puede estar vacío");
    }

    $generatedPassword = ''; 

    for($i = 0;$i < $numberChars; $i++) {
        $randomIndex = array_rand($allowedChars);
        $generatedPassword .= $allowedChars[$randomIndex];
    }

    return $generatedPassword;
    
}

$allowedCharsArray = array_merge($uppercase, $numbers, $lowercase, ['@', '#', '$']);

print_r(passwordGenerator(29, $allowedCharsArray));