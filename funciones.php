<?php

/**
 * una función es un bloque de código que realiza una tarea específica y puede ser reutilizado en diferentes partes de un programa. Las funciones en PHP permiten estructurar mejor el código, facilitando su mantenimiento y reducción de repeticiones.
 * Características principales:
Modularidad: Permiten dividir el código en pequeñas partes lógicas.
Reutilización: Una vez creada, una función puede ser invocada varias veces sin tener que escribir nuevamente el código.
Parámetros: Puedes pasarle valores (parámetros) que serán usados dentro de la función.
Retorno: Las funciones pueden devolver valores usando la palabra clave return

 * para crear una funcion en PHP se debe iniciar con la palabra reservada 'function' seguido del nombre que se le va asignar
 * seguido utilizamos los parentesis y por último utilizamos {} para indicarle las intrucciones EJ:
 * function nombre_de_la_funcion(){ Instrucciones de lo que realizará nuestro código }
 * para ejecutar las funciones debemos invocarlas por su nombre seguido de los parantecis EJ: nombre_de_la_funcion();
 */

function suma(){
    $num1 = 5;
    $num2 = 7;
    $suma = $num1 + $num2;
    echo $suma;
}

// se invoca a la funcion
    suma();

/**
 * Funciones con parametros
 * las funciones con parametros nos indian que para ser ejecutadas necesitamos enviarle parametros o valores para poder ejecutar las intrucciones
 * function nombre_de_la_funcion($parametro1, $parametro2){ instrucciones }
 */

 function suma_con_parametros($parametro1, $parametro2){
    $suma = $parametro1 + $parametro2;
    return $suma;
 }

 // En este caso, dentro de los parantecis le agregamos los números que se asignaran a los parametros (45, 6)
 // y con esos valores la funcion realizará las operaciones necesarias
 // en este caso la funcion se pone dentro de un echo ya que es un function de retorno.
 // las funciones de retorno siempre se invocan dentro de un echo para poder imprimir la informacion
 echo suma_con_parametros(45, 6);