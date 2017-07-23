<?php
    class conexion{
        public static function conectar(){
            try{
                require_once ("config.php");
                $conexion = new PDO("mysql:host=".DB_HOST."; dbname=".DB_NOMBRE."",DB_USUARIO,DB_CONTRA);
                $conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
                $conexion->exec("SET CHARACTER SET ".DB_CHARSET);
                return $conexion;
            }catch (Exception $e){
                echo ("Error en linea: " . $e->getLine() . "<br>");
                echo ("Código del error: " . $e->getCode() . "<br>");
                die ("Mensage de error: " . $e->getMessage() . "<br>");
            }
        }
    }
?>