<?php
    include "conexion.php";

    // se crea la variable $insert solo para imprimir el mensaje personalizado al final
   $insertar = $conexion->query("INSERT INTO publicaciones VALUES(
            NULL,
            '$_POST[title]',   /* es el name que se puso en el formulario */
            '$_POST[content]',
            '$_POST[date]',
            '$_POST[author]'
    ) ");

    if($insertar){  // si la sentencia se ejecuta sin errores muestra un mensaje personalizado
        echo "Información Registrada con exito";
    }else{
        echo "Error en el Registro";
    }