<?php
    require_once '../app/conexion.php';
    $conexion = conectar_db();
    $sql = "TRUNCATE TABLE tabla_heroes";
    $query =  $conexion->prepare($sql);
    $query_executed = $query->execute();

    $conexion->close();
    echo isset($query_executed);
?>