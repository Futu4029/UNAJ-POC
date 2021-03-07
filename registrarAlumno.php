<?php
include 'sistema/conexion.php';

// Almacenando los datos obtenidos de los formularios
$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$tipo_documento = $_POST["tipo-documento"];
$nro_documento = $_POST["nro-documento"];
$fecha_nac = $_POST["fecha-nac"];
$email = $_POST["email"];
$carrera = $_POST["carrera"];
$año = $_POST["año"];
$experiencia = $_POST["experiencia"];

// Creamos la conexion
$obj = new Conexion();
$conexion =  $obj->abrirConexion();


// Verificar que el registro no sea repetido
$consulta = "SELECT * FROM alumno WHERE tipo_documento = '$tipo_documento' AND nro_documento = '$nro_documento'";
$buscarRepetido = $conexion->prepare($consulta);
$buscarRepetido->execute();
$verificar_usuario = $buscarRepetido->rowCount();
if ($verificar_usuario>0){
    echo 'El usuario ya esta registrado';
    exit;
}

// Consulta para insertar datos
$insertar = "INSERT INTO alumno(nombre, apellido, tipo_documento, nro_documento, fecha_nac, mail, carrera, anio, experiencia) 
             VALUES ('$nombre', '$apellido', '$tipo_documento', '$nro_documento', '$fecha_nac', '$email', '$carrera', '$año', '$experiencia')";

//Insertando la consulta

$resultado = $conexion->prepare($insertar);
$resultado->execute();
if (!$resultado){
    echo 'Error al registrar los datos.';
} else{
    echo 'Usuario registrado exitosamente.';
}
// cerrar conexion
$conexion = $obj->cerrarConexion();
?>