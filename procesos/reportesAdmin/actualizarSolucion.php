<?php 
    session_start();
   $datos = array(
    'idReporte'  => $_POST['idReporte'],
    'solucion' => $_POST['solucion'],
    'estatus' => $_POST['estatus'],
    'id_usuario' => $_SESSION['usuario']['id']
   );

    include "../../clases/Reportes.php"; 

    $reportes = new Reportes();

    echo $reportes->actualizarSolucion($datos);


?>