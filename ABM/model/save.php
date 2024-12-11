<?php
include "../config/db.php";

$producto = $_POST["product"];
$descripcion = $_POST["description"];
$precio = $_POST["price"];

$conexion->query("INSERT INTO products VALUES(
    null,
    '$producto',
    '$descripcion',
    '$precio',
    1
)  ");