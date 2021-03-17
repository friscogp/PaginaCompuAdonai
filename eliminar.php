<!DOCTYPE html>
<html>
<head>
    <title>Eliminar</title>
</head>
<body>
<center>
    <form action="eliminar.php?" method="POST">
        
            <?php
               $id=$_REQUEST['identificacion']; 
                include('conexion.php');
                $query="DELETE FROM clientes  WHERE identificacion='$id'";
                $resultado=$conexion->query($query);
                if ($resultado) {
                    echo "<br />" . "<h2>" . "cliente borrado Exitosamente!" . "</h2>";
                    echo "<a href='listar.php'>CONTINUAR/a>";
                }else {
                    echo "Error al borrar el cliente" . $query . "<br>" . $conexion->error;
                }
             ?>
               
        </form>                           }
    </center>
    </body> 
    </html>
       