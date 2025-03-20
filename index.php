
<?php

require_once "./clases/conexion.php";

require_once "./clases/crud.php";

$crud = new crud();
$datos= $crud->mostrarDatos();

?>

<?php include "./header.php" ?>



      

    <div class="container">

    <div class="row">
      <div class="cols">
      <div class="card mt-4">
      <div class="card-body">

     
  
        <h2> CRUD MONGODB Y PHP</h2>



        <a href="./agregar.php" class="btn btn-info"><i class="fa-solid fa-user-plus"></i> Agregar Nuevo</a>
        <hr>
        <table class="table table-sm table-bordered table-striped ">
           <thead>
           <th> Apellido Paterno</th>
           <th>Apellido Materno</th>
           <th>Nombre</th>
           <th>Fecha Nacimiento</th>
           <th>Editar</th>
           <th>Eliminar</th>
           

           </thead>


           <tbody>

           <?php

            foreach($datos as $item){

            
           ?>
            <tr>
             <th> <?php echo $item->paterno; ?></th>
             <th> <?php echo $item->materno; ?> </th>
             <th> <?php echo $item->nombre; ?></th>
             <th> <?php echo $item->fecha_nacimiento; ?></th>

             <th class="text-center"> 
              <form action="./actualizar.php" method="POST" >
              <input type="text" hidden value="<?php echo $item->_id?>" name="id"> 
             <button class="btn btn-warning">
             <i class="fa-sharp fa-solid fa-user-pen"></i>
             </button>
             </form>
            </th>
             <th class="text-center">
             <form action="./eliminar.php" method="POST" >
              <input type="text" hidden value="<?php echo $item->_id?>" name="id"> 
             <button class="btn btn-danger">
             <i class="fa-solid fa-user-xmark"></i>
             </button>
             </form>
             </th>
             

            </tr>

            <?php

            }


          ?>
           </tbody>




        </table>
        </div>
        </div>
        </div>


  </div>
</div>



<?php include "./scripts.php" ?>