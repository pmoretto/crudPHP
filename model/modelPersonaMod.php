<?php
    require_once("conexion.php");
    function modPersona($ID,$NOMBRE,$APELLIDO,$DIRECCION){
        $base = conexion::conectar();
        $query = ("UPDATE DATOS_USUARIOS SET NOMBRE = :nom, APELLIDO = :ape, DIRECCION = :dir WHERE id = :id");
        $result = $base->prepare($query);
        $result->execute(array(":id"=>$ID,":nom"=>$NOMBRE,":ape"=>$APELLIDO,":dir"=>$DIRECCION));
    }
    $ID = $_POST['id'];
    $NOMBRE = $_POST['om'];
    $APELLIDO = $_POST['ape'];
    $DIRECCION = $_POST['dir'];
    modPersona($ID,$NOMBRE,$APELLIDO,$DIRECCION);
    header("location:../index.php");
?>