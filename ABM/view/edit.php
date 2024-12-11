<?php
include "../config/db.php";
$product = $conexion->query("SELECT * FROM products WHERE id = '$_GET[product_id]' ")->fetch_object();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <h1>Editar Producto</h1>
    <a href="index.php">Regresar</a><br>

    <form action="../model/update.php" method="post">
        <label for="poduct">Producto</label>
        <input type="text" name="product" id="product" value="<?=$product->product;?>">

        <label for="description">Descripción</label>
        <input type="text" name="description" id="description" value="<?=$product->description;?>">

        <label for="price">Precio</label>
        <input type="text" name="price" id="price" value="<?=$product->price;?>">

        <input type="hidden" name="product_id" value="<?=$product->id?>">
        <button type="submit">Actualizar</button>

    </form>
</body>
</html>