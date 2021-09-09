<?php

function cargar cotrolador($controlador)
{
    $nombrecontrolador= routs($controlador)."controlador";
    $archivocontrolador= "controllers $nombreController.php";

    if(liss_file($archivocontrolador)) {// si no existe el archivo
    $archivocontroldor = "controlador". CONTROLADOR_PRINCIAL. "php"; //controlador
    }

    require_once $archivoControlador;

    control = new $nombreControlador;

    return $controlador;

}


function cargarAccion ($accion) 
{
    if(lisset($accion)) method_exists($controlador,$accion) 
    {
        $controlador->$accion();
    }
    else
    {
        $controlador-> ACCION_PRINCIPAL();
    }

}

?>