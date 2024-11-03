<?php
/*
2. Problema de números Primos:
Crea una función llamada esPrimo que determine si un número dado es primo o no. 
Un número primo es aquel que solo es divisible por 1 y por sí mismo.
*/

function esPrimo($numero) {
    // Los números menores o iguales a 1 no son primos
    if ($numero <= 1) {
        return "Los números menores o iguales a 1 no son primos";
    }

    // Verificamos si el número tiene divisores
    for ($i = 2; $i <= sqrt($numero); $i++) {
        if ($numero % $i === 0) {
            return "El número {$numero}, No es primo.";
        }
    }

    return "El número {$numero}, Es primo.";
}

// Ejemplo de uso
$numero = 11;
print(esPrimo($numero));
?>