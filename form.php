<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Introduccion a php</title>
</head>
<body>
    <h1>Formulario</h1>
    <form action="recive-datos.php" method="get">

    <label>Ingresar un número</label><br>
    <input type="number" min="0" name="valorUno"><br>

    <label>Ingresar Otro número</label><br>
    <input type="number" min="0" name="valorDos" ><br><br>

    <select name="opciones" >
        <option value="1"> Opcion 1 </option>
        <option value="2"> Opcion 2 </option>
        <option value="3"> Opcion 3 </option>

    </select><br><br>

    <label for="">Genero</label>
    <input type="radio" value="m" name="genero"> Masculino
    <input type="radio" value="f" name="genero"> Femenino
    <br><br>

    <label for="">Colores favoritos</label><br> 
     <input type="checkbox" value="rojo" name="colores"> Rojo <br>
     <input type="checkbox" value="amarillo" name="colores"> Amarillo <br>
    <input type="checkbox" value="azul" name="colores"> Azul <br>
    <input type="checkbox" value="verde" name="colores"> Verde <br>

    <br><br>

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
