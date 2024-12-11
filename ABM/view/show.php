<?php
include "../config/db.php";
$product = $conexion->query("SELECT * FROM products WHERE id = '$_GET[product_id]' ")->fetch_object();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Producto Seleccionado</h1>
    <a href="index.php">Regresar</a>
    <p>Producto: <?=$product->product; ?></p>
    <p>Producto: <?=$product->description; ?></p>
    <p>Producto: <?=$product->price; ?></p>

</body>
</html>