<?php
include('conexion.php');
$id=$_POST["id"];
$nombre=$_POST["nombre"];
$consulta="UPDATE usuario set nombre='$nombre' where id='$id'";
$resultado=pg_query($conexion,$consulta);
if ($resultado) {
    # code...
header("location:index.php");
}
?>