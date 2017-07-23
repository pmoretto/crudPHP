<?php
    require_once("model/conexion.php");
    $base = conexion::conectar();
    $tamagno_pagina = 3;
    if(isset($_GET['pagina'])){
    if($_GET['pagina']==1){
    header("location:index.php");
    }else{
    $pagina=$_GET['pagina'];
    }
    }else{
    $pagina = 1;
    }

    $empieza_desde = ($pagina-1)*$tamagno_pagina;
    $sql_total = "SELECT * FROM DATOS_USUARIOS";
    $resultado= $base->prepare($sql_total);
    $resultado->execute(array());
    $num_filas= $resultado->rowCount();
    $totalPaginas = ceil($num_filas/$tamagno_pagina);
?>