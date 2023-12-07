<?php

    $sql = "DELETE FROM usuarios WHERE id=9"; 
    if ($conexion->query($sql) === TRUE) { 
        echo "Registro eliminado con éxito"; 
    } else { 
        echo "Error al eliminar el registro: ";
        echo $conexion->error; 
    }

?>