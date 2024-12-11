<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <h1>Registar Producto</h1>
    <a href="index.php">Regresar</a><br>

    <form action="../model/save.php" method="post">
        <label for="poduct">Producto</label>
        <input type="text" name="product" id="product">

        <label for="description">Descripción</label>
        <input type="text" name="description" id="description">

        <label for="price">Precio</label>
        <input type="text" name="price" id="price">

        <button type="submit">Guardar</button>

    </form>
</body>
</html>