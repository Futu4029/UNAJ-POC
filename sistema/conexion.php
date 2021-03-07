<?php

class Conexion{
    private static $conexion;

    //Abrimos la conexión
    public static function abrirConexion(){
        if (!self::validarConexion()) {
            
            try{
                //incluimos la configuración del config.php
                include_once 'config.php';
                //configuramos un nuevo PDO, los parametros utilizados son los del sv
                self::$conexion = new PDO('pgsql:host='.NOMBRE_SERVIDOR.'; port=5433; dbname='.DATABASE, NOMBRE_USUARIO, PASSWORD);
                //si el PDO no recibe los parametros correctamente, se indicaran los errores en la variable conexion.
                self::$conexion -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                //Se indican los tipos de caracteres que va a estar recibiendo la conexión. 
                self::$conexion -> exec("SET NAMES 'UTF8'");
                //Se devuelve el objeto para poder usar los comandos PDO cuando se lo invoque.
                return self::$conexion;
            }
            catch(Exception $error){
                //Muestra el error en caso de que falle la conexión.
                die("El error de conexión es: ".$error->getMessage());
            }
        }
    }

    //Cierra la conexión
    public static function cerrarConexion(){
        if(self::validarConexion()){
            self::$conexion=null;
        }
    }
    //Si esta establecida muestra un mensaje de que se estableció correctamente, si no devuelve un mensaje indicando lo contrario.
    public static function estadoConexion(){
        if(self::validarConexion()){
            echo 'Conexion estable';
        }
        else{
            echo 'No se pudo conectar con la base de datos postrgresql';
        }
    }

    // validador que indica si la conexión esta inicializada.
    public static function validarConexion(){
        return isset(self::$conexion);
    }
}
?>
