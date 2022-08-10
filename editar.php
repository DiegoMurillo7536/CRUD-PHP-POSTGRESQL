<?php
require("conexion.php");
$id=$_GET['id'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="actualizar.php" method="post">
    <tr>
    <th>Nombres</th>
    </tr>
    <?php
    $consulta="SELECT * FROM usuario where id='$id'";
    $resultado=pg_query($conexion,$consulta);
    while($mostrar=pg_fetch_array($resultado)){
    ?>
    <tr>
    <input type="hidden" value="<?php echo $mostrar['id'] ?> " name="id"><input type="text" value="<?php echo $mostrar['nombre'] ?>" name="nombre">    
    <button type="submit">Actualizar</button>
    </tr>
    <?php
            }
    ?>
    </form>
</body>
</html>