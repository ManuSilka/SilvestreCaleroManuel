<?php


/**
 * Este es un script de prueba para la tarea 5 de Despliegue de Aplicaciones Web con el fin de documentar con phpDocumentor.
 *
 * @author Manuel Silvestre Calero
 * @version 1.0
 */

/**
 * Función que permite sumar dos números.
 *
 * @param int $num1 Primer número a sumar.
 * @param int $num2 Segundo número a sumar.
 * @return int La suma de los dos números.
 * @internal Este comentario solo es visible en el código.
 */
function sumar($num1, $num2)
{
    return $num1 + $num2;
}

/**
 * Función que verifica si un número es par o impar.
 *
 * @param int $num Número a comprobar.
 * @return Bool Con true o false si el resultado es par o impar respectivamente.
 */
function esPar($num)
{
    return $num % 2 == 0;
}
