<?php 
require_once('conexion.php')
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
    <h1> Hola mundo</h1>
    <form action="registrar.php" method="post">
        
    Nombre: <input type="text" name="nombre">
    <button type="submit">Enviar</button>
    </form>
    <table>
    <tr>
    <th>ID</th><th>Nombres</th>
    </tr>
    <?php
    $consulta="SELECT * FROM usuario";
    $resultado=pg_query($conexion,$consulta);
    while($mostrar=pg_fetch_array($resultado)){
    ?>
    <tr>
    <th><?php echo $mostrar['id'] ?></th><th><?php echo $mostrar['nombre'] ?></th>
    <th><a href="editar.php?id=<?php echo $mostrar['id']?>">Editar</a></th>
    <th><a href="eliminar.php?id=<?php echo $mostrar['id']?>">Eliminar</a></th>    
    </tr>
    <?php
            }
    ?>
    </table>
</body>
</html>