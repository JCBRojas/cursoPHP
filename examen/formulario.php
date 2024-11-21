<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    label{
        font-size: 1.2em;
    }
    label,input{
        display: block;
        padding: 7PX;
        width: 14%;
    }
    button{
        padding: 7px;
        font-size: 1em;
    }
</style>
<body>

<h1>REGISTRO</h1>

    <form method="post" action="insertar.php">
        <label for="">Título</label>
        <input type="text" name="title">

        <label for="">Contenido</label>
        <input type="text" name="content"> <!-- el name debe ser el mismo que se envía a la sentencia insert ene el $_POST[] -->

        <label for="">Fecha de Creación</label>
        <input type="date" name="date">

        <label for="">Autor</label>
        <input type="text" name="author"><br>

        <button type="submit">Guardar</button>
    </form>

</body>
</html>