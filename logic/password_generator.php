<?php

function passwordGenerator(int $numberChars, array $allowedChars): string
{

    if ($numberChars > 30 and $numberChars < 1) {
        throw new InvalidArgumentException("Cantidad de caracteres no permitida");
    }

    if (empty($allowedChars)) {
        throw new InvalidArgumentException("El array de caracteres permitidos no puede estar vacío");
    }

    $generatedPassword = '';

    for ($i = 0; $i < $numberChars; $i++) {
        $randomIndex = array_rand($allowedChars);
        $generatedPassword .= $allowedChars[$randomIndex];
    }

    return $generatedPassword;
}

function charsAllowed(array $chars) : array
{
    $allowedChars = [];
    
    foreach ($chars as $char) {       
        if($char === "uppercase"){
            $allowedChars = array_merge($allowedChars, range('A', 'Z')); // Letras mayúsculas
            
        }elseif($char === "lowercase"){
            $allowedChars = array_merge($allowedChars, range('a', 'z')); // Letras minúsculas
            
        } elseif ($char === "numbers") {
            $allowedChars= array_merge($allowedChars, range(0, 9));       // Números
            
        } elseif ($char === "special") {
            $allowedChars = array_merge($allowedChars,['@', '#', '$', '%', '&', '*', '!', '?', '-', '_', '+', '=']);
            
        }
    }

    return $allowedChars;

}
