<?php

$conexion = new mysqli("localhost", "student", "contraseña_segura", "mi_base_de_datos");
if($conexion->connect_error) {
    die ("Conexión fallida: " . $conexion->connect_error);
}
echo "Conexión exitosa";

try {
    $conexion = new PDO ("mysql:host=localhost;dbname=mi_base_de_datos", "usuario","contraseña");

        $conexion-> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXEPTION);

            echo "Conexion Exitosa";
    
} catch(PDOExeption $e){
    echo 'Conexion Fallida:' .$e->getMessage();
}


?>