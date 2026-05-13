<?php

    # Conexión a la Base de Datos
    function conexion(){
        $pdo = new PDO('mysql:host=localhost; dbname=inventario', 'root', '');
        return $pdo;
    }

    