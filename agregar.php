<?php include "./header.php" ?>





<div class="container">

<div class="row">
    <div class="col">
      
<div class="card mt-4">
  <div class="card-body">

  
        <a href="index.php" class="btn btn-info"> 
        <i class="fa-solid fa-backward"></i>  Regresar</a>

        <h2> Agregar Nuevo Registro</h2>
        <hr>
    
        <form action="./procesos/insertar.php" method="post">
       

        <label for="paterno"> Apellido Paterno</label>
        <input type="text" class="form-control" id="paterno" name="paterno" require>

        <label for="materno"> Apellido Materno</label>
        <input type="text" class="form-control" id="materno" name="materno" require>

        <label for="nombre"> Nombre</label>
        <input type="text" class="form-control" id="nombre" name="nombre" require>

        <label for="fecha_nacimiento"> Fecha de Naciemiento</label>
        <input type="date" class="form-control" id="fecha_nacimiento" name="fecha_nacimiento" require>

        
    <button class="btn btn-primary mt-3">
    <i class="fa-sharp fa-solid fa-user-plus"></i>Agregar
    </button>
        </form>




    </div>
</div>
</div>

  </div>
</div>





<?php include "./scripts.php" ?>