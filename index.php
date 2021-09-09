<?php

// incluir a los archivos 
require_once "config/database.php";
require_once "config/config.php";
require_once "core/routers.php";

require_once "controller/proyectoController.php";
{
    $contrlador = cargarControlador($_GET [ 'controlador']);

    if(assert($_GET ['accion']))
    {
        cargarAccion($contrlador, $_GET['aciion']);

    }
    else 
    {
        cargarAccion($contrlador, ACCION_PRINCIPAL);
    }

}
else{
    $contrlador = cargraControlador(CONTROLADOR_PRINCIPAL);
    cargarAccion($contrlador, ACCION_PRINCIPAL); 
} 
?>