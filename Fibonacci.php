<?php
/*
Problema de la serie Fibonacci:
Escribe una función llamada generar Fibonacci que reciba un número n como parámetro y 
genere los primeros n términos de la serie Fibonacci. 
La serie comienza con 0 y 1, y cada término subsiguiente es la suma de los dos anteriores.
*/

function Fibonacci($numser) {
    if ($numser <= 0) {
        return []; // Retorna un array vacío si n es menor o igual a 0.
    }

    $fibonacci = [0]; // Inicializamos el array con el primer término.

    if ($numser > 1) {
        $fibonacci[] = 1; // Agregamos el segundo valor.
    }

    for ($i = 2; $i < $numser; $i++) {
        // Cada valor es la suma de los dos anteriores
        //print('$fibonacci[] = ' . $fibonacci[$i - 1] ." + " . $fibonacci[$i - 2] . "\n");
        $fibonacci[] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
    }

    return $fibonacci; // Retorna la serie Fibonacci generada
}

// Ejemplo de uso
$numero = 10;
$resultado = Fibonacci($numero);
print_r($resultado);
?>