<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Introduccion a php</title>
</head>
<body>
    <h1>Formulario</h1>
    <form action="recive-datos.php" method="POST">

    <label>Ingresar un número</label><br>
    <input type="number" min="0" name="valorUno"><br>

    <label>Ingresar Otro número</label><br>
    <input type="number" min="0" name="valorDos" ><br><br>

    <input type="submit" value="Enviar">
    </form>

    <!-- 
        *** Atributos   ***
        min: indica el número minimo que se puede ingresar en el input (solo se usa en campos numéricos)
        max: indica el número maximo que se puede ingresar en en input (solo se usa en campos numéricos)
        name: es el atributo que recoge o almacena la informacion ingresada en el input
     -->

</body>
</html>
