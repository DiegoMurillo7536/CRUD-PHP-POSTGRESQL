<?php
require('conexion.php');
$id=$_GET['id'];
$consulta="DELETE FROM usuario WHERE id='$id'";
$resultado=pg_query($conexion,$consulta);
if ($resultado) {
    # code...
header("location:index.php");
}
?>