<?php
    require_once '../app/conexion.php';
    $conexion = conectar_db();
    $sql = "SELECT imagen_heroe, nombre_heroe, apariencia_heroe, biografia_heroe, trabajo_heroe, conexiones_heroe FROM tabla_heroes";
    $query = $conexion->query($sql);
    while($datos = mysqli_fetch_assoc($query)) {                   
?>
<tr>
    <td>
        <img src="<?php echo $datos['imagen_heroe'];?>">
    </td>
    <td><?php echo $datos['nombre_heroe']?></td>
    <td><?php echo $datos['apariencia_heroe']?></td>
    <td><?php echo $datos['biografia_heroe']?></td>
    <td><?php echo $datos['trabajo_heroe']?></td>
    <td><?php echo $datos['conexiones_heroe']?></td>
</tr>
<?php
    }               
?>