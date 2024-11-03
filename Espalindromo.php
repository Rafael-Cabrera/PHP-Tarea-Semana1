<?php
/*
3.Problema de Palíndromos:
Implementa una función llamada esPalindromo que determine si una cadena de texto dada es 
un palíndromo. Un palíndromo es una palabra, frase o secuencia que se lee igual en ambas 
direcciones.
*/
function esPalindromo($cadena) {
    // Elimina espacios y se convierte a minúsculas
    $cadenaorig = $cadena;
    $cadena = strtolower(str_replace(' ', '', $cadena));
    
    // Invertimos la cadena
    $cadenaInvertida = strrev($cadena);
    
    if ($cadena === $cadenaInvertida) {
        echo "'{$cadenaorig}' es un palíndromo.";
    } else {
        echo "'{$cadenaorig}' no es un palíndromo.";
    }
}

// Ejemplo de uso
//$texto = "Dábale arroz a la zorra el abad";
$texto = "Anita lava la tina";
print(esPalindromo($texto))
?>