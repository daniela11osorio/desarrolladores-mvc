<?php

class proyecto 
{
    private $db;
    private $proyectos;

    public function __construct()

    {
        $this->db = conexion::conectar();
        $this->proyectos = array();
    }

    /** lista todos los registros de la tabla*/
    public function listar()
    {
        $sql = "SELECT * FROM proyecto";
        $resultado = $this->query($sql);

        if(!$resultado)
        {
            ***// echo "estamos experimentado problemas, por favor intente mas tarde:" PHP__OEL;//** */
                // Esto es para nosotros mientras desarrollamos 
                echo "error en consulta: $sql" . PHP_EOL
                echo "erno de depuracion: " . mysqli_connect_erno() . PHP_EOL;
                echo "error de depuracion: " . mysql_connect_error() . php_EOL;  
                exit;
        }
        // si todo esta bien:
        while( $row = $resultado->fetch_assoc())
        {
            $this->proyectos[] = $row;
        }

        return $this->proyectos;


        public function insert($nombre, $duracion)
        {
            $sql = "INSERT INTO proyecto(nombre, duacion)
            VALUES ('$nombre', $duracion)";

             $this->db->query($sql);

        }

        /**obtener la informacion de un proyecto*/
        public function getproyecto($id)
        {
            $sql = "SELECT * FROM proyecto WHERE id = $id";
            $resultado = $this->db->querry($sql);
            $row = $resultado->fetch_assoc();
            return $row;
        }

        public function view($id)
        {
            $proyecto = new proyecto();
            $data['proyecto'] = $proyecto->getproyecto($id);
            $data['titulo'] = "detalle de proeycto";
            require_once "view/proyectos/view.php";
         }

         public function update($id, $nombre, $duracion)
         {
             $sql = "UPDATE proyecto 
                     SET nombre = '$nombre', duracion = $duracion
                     WHERE id = $id";

               $this->      
         }
    }

    ?>