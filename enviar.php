<?php
include('conexion.php');
if ($conexion->connect_error) {
 die("La conexion falló: " . $conexion->connect_error);
}
 $buscarIdentificacion = "SELECT identificacion FROM clientes
 WHERE identificacion = '$_POST[identificacion]' ";
  $result = $conexion->query($buscarIdentificacion);
  $count = mysqli_num_rows($result);
 if ($count == 1) {
               
            $identificacion = $_POST['identificacion'];
            $nombre = $_POST['nombre'];
            $direccion = $_POST['direccion'];
            $telefono = $_POST['telefono'];
            $correo = $_POST['correo'];
            $tecnico = $_POST['tecnico'];
          echo "<br />". "Este Cliente ya se encuentra registrado en la  base de datos" . "<br />";
                    //echo "<a href='index.php'>Por favor ingrese nuevamente la identificacion </a>";
                    //echo "<br />". "Click para Mofificar la Informacion Registrada en la  base de datos" . "<br />";
        
          $query = "UPDATE clientes SET nombre='$nombre',direccion='$direccion',telefono='$telefono',correo='$correo',tecnico='$tecnico' WHERE identificacion='$identificacion'";
         
          if ($conexion->query($query) === TRUE) {
              echo "<br />" . "<h2>" . "cliente Actualizado Exitosamente!" . "</h2>";
              echo "<a href='listar.php'>CONTINUAR/a>";
          }else {
              echo "Error al crear el cliente" . $query . "<br>" . $conexion->error;
          }
     
 }else{
          $identificacion = $_POST['identificacion'];
          $nombre = $_POST['nombre'];
          $direccion = $_POST['direccion'];
          $telefono = $_POST['telefono'];
          $correo = $_POST['correo'];
          $tecnico = $_POST['tecnico'];
          $query = "INSERT INTO clientes (identificacion,nombre,direccion,telefono,correo,tecnico)
          VALUES ('$_POST[identificacion]', '$_POST[nombre]', '$_POST[direccion]', '$_POST[telefono]', '$_POST[correo]','$_POST[tecnico]')";
          if ($conexion->query($query) === TRUE) {
                echo "<br />" . "<h2>" . "cliente Creado Exitosamente!" . "</h2>";
                echo "<a href='listar.php'>CONTINUAR/a>";
          }else {
                echo "Error al crear el cliente" . $query . "<br>" . $conexion->error;
          }
} 
 
 mysqli_close($conexion);
  
?>
