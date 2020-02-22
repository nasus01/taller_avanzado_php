<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <meta http-equiv="content-type" content="text/html"; charset="utf-8" />
    <title>Trabajo MVC PHP</title>
    </head>
    <body>


            <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre documento</th>
                <th>Modificar</th>
                <th>Eliminar</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($consulta as $datos): ?>
            <tr>
                <td><?php echo $datos['idtipo']; ?></td>
                <td><?php echo $datos['nombre']; ?></td>
                <td><a href="index.php?accion=modificar&id=<?php echo $datos['idtipo']; ?>">Modificar</a></td>
                <td><a href="index.php?accion=eliminar&id=<?php echo $datos['idtipo']; ?>">Eliminar</a></td>
                <a href="index.php?accion=Estudiante"></a>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
           
    </body>
</html> 