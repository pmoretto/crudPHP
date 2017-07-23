<?php
    require_once("model/modelPersonas.php");
    $personas = new modelPersonas();
    $matrizPersonas = $personas->getPersonas();
    require_once("view/viewPersonas.php");
?>