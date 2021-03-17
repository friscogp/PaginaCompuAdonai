<?php
               include('conexion.php');
               $identificacion = $_POST['identificacion'];
               $nombre = $_POST['nombre'];
               $direccion = $_POST['direccion'];
               $telefono = $_POST['telefono'];
               $correo = $_POST['correo'];
               $tecnico = $_POST['tecnico'];
               $query = "UPDATE clientes SET nombre='$nombre',direccion='$direccion',telefono='$telefono',correo='$correo',tecnico='$tecnico' WHERE identificacion='$identificacion'";
           
        
       if ($conexion->query($query) === TRUE) {
              echo "<br />" . "<h2>" . "cliente Actualizado Exitosamente!" . "</h2>";
              echo "<a href='listar.php'>CONTINUAR/a>";
          }else {
              echo "Error al crear el cliente" . $query . "<br>" . $conexion->error;
        }
     
     
 mysqli_close($conexion);
  
?>
			