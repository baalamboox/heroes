<?php
    require_once '../app/conexion.php';
    $conexion = conectar_db();
    $customJSON = json_decode($_POST['json_data'], true);
    $sql = "INSERT INTO tabla_heroes(nombre_heroe, apariencia_heroe, biografia_heroe, trabajo_heroe, conexiones_heroe, imagen_heroe) VALUES (?, ?, ?, ?, ?, ?)";
    $query_executed = "";
    foreach ($customJSON as $heroe) {
        $query =  $conexion->prepare($sql);
        $query->bind_param('ssssss', $heroe['nombre'], $heroe['apariencia'], $heroe['biografia'], $heroe['trabajo'], $heroe['conexion'], $heroe['imagen']);
        $query_executed = $query->execute();
        echo $heroe['nombre'], $heroe['apariencia'], $heroe['biografia'], $heroe['trabajo'], $heroe['conexion'], $heroe['imagen'];
    }

    $conexion->close();
    echo isset($query_executed);
?>