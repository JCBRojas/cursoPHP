<?php
include "../config/db.php";

$conexion->query("UPDATE products SET 
        product = '$_POST[product]',
        description = '$_POST[description]',
        price = '$_POST[price]',
        state = 1
        WHERE id = '$_POST[product_id]'
");