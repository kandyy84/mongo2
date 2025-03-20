<?php

include "../clases/conexion.php";
include "../clases/crud.php";
include "./vendor/mongodb/mongodb";

$crud = new crud();
$id= $_POST['id'];

$respuesta= $crud->eliminarDatos($id);

if($respuesta->getDeletedCount()>0){
    
    header("location:../index.php");

}else{
    print_r($respuesta);
}
?>