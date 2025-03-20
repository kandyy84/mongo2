

<?php 

include "./clases/conexion.php";
include "./clases/crud.php";

$crud = new crud ();
$id= $_POST['id'];
$datos=$crud->obtenerDocumentos($id);
$idMongo= $datos ->_id; //obtenemos el id de mongo

?>


<?php include "./header.php" ?>





<div class="container">

<div class="row">
    <div class="col">
      
<div class="card mt-4">
  <div class="card-body">

  
        <a href="index.php" class="btn btn-info"> 
        <i class="fa-solid fa-backward"></i>  Regresar</a>

        <h2> Actualizar Registro</h2>
        <hr>
     
        <form action="./procesos/actualizar.php" method="POST">
        <input type="text" hidden value="<?php echo $idMongo?>" name="id"> 

        <label for="paterno"> Apellido Paterno</label>
        <input type="text" class="form-control" id="paterno" name="paterno" value="<?php echo $datos->paterno ?>">

        <label for="materno"> Apellido Materno</label>
        <input type="text" class="form-control" id="materno" name="materno" value="<?php echo $datos->materno ?>" >

        <label for="nombre"> Nombre</label>
        <input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo $datos->nombre ?>">

        <label for="fecha_nacimiento"> Fecha de Nacimiento</label>
        <input type="text" class="form-control" id="fecha_nacimiento" name="fecha_nacimiento" value="<?php echo $datos->fecha_nacimiento ?>">

    <button class="btn btn-warning mt-3">
    <i class="fa-sharp fa-solid fa-user-plus"></i>Actualizar
    </button>
        </form>




    </div>
</div>
</div>

  </div>
</div>





<?php include "./scripts.php" ?>