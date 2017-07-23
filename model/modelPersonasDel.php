<?php
    require_once("conexion.php");
    function delPersona($id){
        $base = conexion::conectar();
        $query = "DELETE FROM DATOS_USUARIOS WHERE ID=:id";
        $result = $base->prepare($query);
        $result->execute(array(":id"=>$id));
    }
    $ID = $_GET['id'];
    delPersona($ID);
    header("location:../index.php");

?>