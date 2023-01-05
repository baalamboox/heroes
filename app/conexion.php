<?php
    function conectar_db() {
        $conexion = new mysqli('localhost', 'root', '', 'heroes');
        if($conexion->connect_errno) {
            echo 'Error: ' .  $conexion->connect_error;
        } else {
            return $conexion;
        }
    }
?>