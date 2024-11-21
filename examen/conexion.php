<?php

$conexion = new mysqli('localhost', 'root', '', 'examen');

/*

    CREATE TABLE publicaciones(
        id BIGINT PRIMARY KEY AUTO_INCREMENT,
        titulo VARCHAR(50) NOT NULL,
        contenido VARCHAR(300) NOT NULL ,
        fechaCreacion DATE NOT NULL ,
        autor VARCHAR(50) NOT NULL
    );

*/