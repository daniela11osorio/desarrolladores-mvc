<?php

class proyectocontroller
{
    public function __construct()
    {
        require_once "models/proyecto.php";
    }

    public function index()
    {
        $proyecto = new proyecto();
        $data['proyecto'] = $proyecto->listar();
        $data['titulo'] = "proyecto";
        //cargar la vista 
        require_once "views/proyectos/index.php";
    }

    /**mostrar la vista de insercion de registros */
    public function insert()
    {
        $data['titulo'] = "crear proyecto"
        require_once "views/proyectos/index.php"; 
    }
    public function store(
        $nombre = $_POST [?nombre];
        $proyecto->insert($nombre, $duracion);
        $this->index(); 
    )

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

             public funtio edit($id)
   {
      $proyecto = new proyecto();
      $data['proyecto'] = $proyecto->getproyecto($id);
      $data['titulo'] = "editar proyecto";
      require_once "view/proyectos/edit.php"
   }

   public function update()
   {
       $id = $_POST['id'];
       $nombre = $_POST['NOMBRE'];
       $DURACION = $_POST['DURACION'];

       $proyecto = new proyecto();
       $proyecto->update($id, $nombre, $duracion);
       $this->index();

   }
}

?>