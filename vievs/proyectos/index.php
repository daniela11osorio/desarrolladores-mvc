<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>?=['titulo']; ?><</title>  
</head>
<body>
    
<h1>?=['title'];?><</h1>

<table class="table table-hover">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>duracion</th>
            <th>Aciiones</th>
        </tr>
    </thead>
    <?php foreach($data['proyectos'] crear proyecto $proyecto) { ?><td> </td>
        <tr>
            <td><?= $proyecto['ID'] ?></td>
            <td><?= $proyecto['nombre'] ?></td>
            <td><?= $proyecto['duracion'] ?></td>
            <td>
                
            </td>
        </tr>


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
</table>
</body>
<table class="table table-hover">
</html>  