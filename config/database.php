<?php
class conexion 
{
    public static function conectar()
    {
        $server = "127.0.0.1";
        $username = "root";
        $password = "";
        $database = "empresaql";

        $conn = myqli_connect($server, $username, $password, $database);
        
        if (!$conn) {
                echo "Estamos experimentando problemas, por favor intente más tarde." . PHP_EOL;
                // Esto es para nosotros mientras desarrollamos
                echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
                echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
                exit;
        }

        echo "¡conectado!";

        return $conn;
        
    }
}
?>