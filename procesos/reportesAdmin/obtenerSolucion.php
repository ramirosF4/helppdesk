<?php

    error_reporting(E_ALL);
    ini_set('display_errors', 1);
    $idReporte = $_POST['idReporte'];
    include "../../clases/Reportes.php";
    $Reportes = new Reportes(); 
    echo json_encode($Reportes->obtenerSolucion($idReporte));
?>