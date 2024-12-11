<?php   
    include "../config/db.php";
    $products = $conexion->query("SELECT * FROM products");
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

    <h1>listado de Productos</h1>
    
    <a href="create.php">Registrar Producto</a><br>

    <table border="1">
        <thead>
            <th>Producto</th>
            <th>Precio</th>
            <th>Estado</th>
            <th>Ver</th>
            <th>Editar</th>
            <th>Eliminar</th>
        </thead>
        <tbody>
            <?php  foreach($products as $product):  ?>
                <tr>
                    <td><?= $product['product']?></td>
                    <td><?= $product['price']?></td>
                    <td><?= $product['state']?></td>
                    <td>
                        <a href="show.php?product_id=<?=$product['id']?>">Ver</a>
                    </td>
                    <td>
                        <a href="edit.php?product_id=<?=$product['id']?>"">Editar</a>
                    </td>
                    <td></td>
                </tr>
            <?php  endforeach;  ?>
        </tbody>
    </table>

</body>
</html>