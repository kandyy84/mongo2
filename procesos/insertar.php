<?php

include "../clases/conexion.php";
include "../clases/crud.php";


$crud = new crud();

$datos=array(

"paterno" => $_POST['paterno'],
"materno"=> $_POST['materno'],
"nombre"=> $_POST['nombre'],
"fecha_nacimiento"=> $_POST['fecha_nacimiento']


);

$respuesta = $crud -> insertarDatos($datos);

if ($respuesta->getInsertedId()>0){

    header("location:../index.php");
}else{
    print_r($respuesta);
}

?>
