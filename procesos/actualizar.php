<?php

include "../clases/conexion.php";
include "../clases/crud.php";


$crud = new crud();

$id =$_POST['id'];

$datos=array(


"paterno" => $_POST['paterno'],
"materno"=> $_POST['materno'],
"nombre"=> $_POST['nombre'],
"fecha_nacimiento"=> $_POST['fecha_nacimiento']


);

$respuesta = $crud-> actualizar($id, $datos);

if($respuesta->getModifiedCount() > 0 || $respuesta->getMatchedCount()>0){
    
    header("location:../index.php");
}else
print_r($respuesta);

?>