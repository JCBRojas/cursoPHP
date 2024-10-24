<?php

echo "el primer valor es: " . $_POST['valorUno']; 
echo "<br>";
echo "El segundo valor es: " . $_POST['valorDos'];

/**
 * el mensaje se escribe dentro de las comillas y se concatena con punto(.)
 * en C sharp utilizabamos Console.WriteLine("mensaje" , variable). se concatena con (,)
 * $_POST['NAME']: Almacena los valores que se envian del formulario pormetodo POST, dentro de los corchetes se escribe el nombre que se asignó en el atributo name="NAME" en el formulario (Estos dos nombres deben ser iguales o si no saldría error)
 *  */ 

 /**    ERRORES
  *     Syntax error... expecting "..." line (4) : Indica que en la linea indicada o anterior a esa linea nuestro código tiene algo mal escrito o falta finalizar bien nuestro estructura.
  * Warning: Undefined array key "valorUno" nos indica que ese nombre posiblemente no es igual tanto en nuestro campo name del formulario como en el $_POST[...] de nuestro PHP.
  *     NOT FOUND: nos indica que el archivo que se esta abriendo no existe, por lo tanto la ruta debe estar mal ingresada o copiamos mal el nombre del archivo
  */