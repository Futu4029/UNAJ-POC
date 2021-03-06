<?php

class Conexion{
    private static $conexion;

    public static function abrirConexion(){
        
        if (!validarConexion()) {
            
            try{
                include_once 'config.php';

                self::$conexion = new PDO('pgsql:host='.NOMBRE_SERVIDOR.'; dbname='.DATABASE, NOMBRE_USUARIO, PASSWORD);
                self::$conexion -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                self::$conexion -> exec('SET CHARACTER SET utf8');
            }
            catch(PDOException $ex){
                print "ERROR". $ex->getMessage(). "<br>";
            }
        }
    }

    public static function cerrarConexion(){
        
    }

    public static function obtenerConexion(){
        
    }

    public static function validarConexion(){
        return isset(self::$conexion);
    }
}
?>
