<?php
require_once('conexion.php');
$Nombre=$_POST['nombre'];
$Id=$_POST['id'];
$consulta="INSERT INTO usuario values ('$Nombre')";
$resultado=pg_query($conexion,$consulta);
if ($resultado) {
    # code...
    header('location:index.php');
}else{
    echo "Algo salió mal";
}


?>