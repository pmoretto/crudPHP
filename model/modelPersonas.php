<?php
    class modelPersonas{
        private $db;
        private $personas;

        public function __construct(){
            require_once("model/conexion.php");
            $this->db = conexion::conectar();
            $this->personas = array();
        }

        public function getPersonas(){
            require_once("paginacion.php");
            $query = $this->db->query("SELECT * FROM datos_usuarios LIMIT $empieza_desde,$tamagno_pagina");
            while ($filas = $query->fetch(PDO::FETCH_ASSOC)){
                $this->personas[] = $filas;
            }
            return $this->personas;
        }

    }
?>