<?php 
include "./clases/conexion.php";
include "./clases/crud.php";
include "./header.php";


$crud= new crud();

echo $id=$_POST['id'];
$datos= $crud->obtenerDocumentos($id);




?>

  
        <a href="index.php" class="btn btn-info"> 
        <i class="fa-solid fa-backward"></i>  Regresar</a>

        <h2> Eliminar Registro</h2>
        <hr>
     
       
 <table class="table table-bordered"> 
 <thead>

 <th>Apellido Paterno</th>
 <th>Apellido Materno</th>
 <th>Nombre</th>
 <th>Fecha de Nacimiento</th>
 </thead>


 <tbody>

 <tr>
    <th> <?php echo $datos->paterno?> </th>
    <th> <?php echo $datos->materno?> </th>
    <th> <?php echo $datos->nombre?> </th>
    <th> <?php echo $datos->fecha_nacimiento ?> </th>
 </tr>
 </tbody>
 </table>

 <hr>
 <div class="alert alert-danger" role="alert">
  <p>¿Esta seguro de eliminar este registro?</p>
  <p>Una vez eliminado no podrá ser recuperado!</p>
</div>

 <form action="./procesos/eliminar.php" method="POST">
 <input type="text" name="id" value="<?php echo $datos->_id; ?>" hidden> 
             <button class="btn btn-danger">
             <i class="fa-solid fa-user-xmark"></i>Eliminar
             </button>
            
</form>

    </div>
</div>
</div>

  </div>
</div>





<?php include "./scripts.php" ?>