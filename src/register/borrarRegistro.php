<?php

    include '../../config/conexion.php';
    
    // Creamos la conexion
    $obj = new Conexion();
    $conexion =  $obj->abrirConexion();

    if($_POST['row5'] != ''){
        $tipo_documento = $_POST['row3'];
        $nro_documento = $_POST['row4'];

        // Borrar un registro de alumno
        $consultaBorrado = "DELETE FROM alumno WHERE tipo_documento = '$tipo_documento' 
        AND nro_documento = '$nro_documento'";
        $eliminar = $conexion->query($consultaBorrado);

   }else if(isset($_POST['row1'])){
        $nombre_empresa = $_POST['row1'];
        $cuit_empresa = $_POST['row2'];
        $descr = $_POST['row3'];

        // Borrar un registro de oferta
        $consultaBorrado = "DELETE FROM oferta_laboral WHERE empresa = '$nombre_empresa' 
        AND cuit_empresa = '$cuit_empresa' 
        AND descripcion_puesto = '$descr'";
        $eliminar = $conexion->query($consultaBorrado);

    }else{
        echo 'No se pudo eliminar el registro';
        exit;
    }

    // Cerrar conexion
    $conexion = $obj->cerrarConexion();
