<?php

function cargraControlador($controlador)
{
    $nombrecontrolador = ucwords($controlador) . "controller";
    $archivoControlador = "controller/$nombreControlador.php";

    if(!is_file($archivoControlador)) {// si no existe el archivo
         $archivoControlador = "controllers/" . CONTROLADOR_PRINCIPAL . ".php"; //controlador 
     }

     require_once $archivoControlador


     return= $controlador;

}

function cargarAccion($controlador, $accion)
{
    $control= new $nombreControlador
    // si el metodo existe dentro del controlador 
   if(isset($accion) && method_exists($controlador, $accion)) 

   {
    if ($id == null)
    {
       $controlador->$accion(); 
    }
   }
   else
   {
       $controlador->ACCION_PRINCIPAL();
       
   }
}

?>
