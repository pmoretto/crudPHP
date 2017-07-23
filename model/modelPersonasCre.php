<?php
    require_once("conexion.php");
    function crePersona($NOM,$APE,$DIR){
        $base = conexion::conectar();
        $query = "INSERT INTO DATOS_USUARIOS(NOMBRE,APELLIDO,DIRECCION) VALUES (:NOM,:APE,:DIR)";
        $result = $base->prepare($query);
        $result->execute(array(":NOM"=>$NOM,":APE"=>$APE,":DIR"=>$DIR));
    }
    $NOM = $_POST['Nom'];
    $APE = $_POST['Ape'];
    $DIR = $_POST['Dir'];
    crePersona($NOM,$APE,$DIR);
    echo "Nombre:" . $NOM;
    header("location:../index.php");

?>