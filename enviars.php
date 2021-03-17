<?php
               include('conexion.php');
               $identificacion = $_POST['identificacion'];
               $nombre = $_POST['nombre'];
               $direccion = $_POST['direccion'];
               $telefono = $_POST['telefono'];
               $correo = $_POST['correo'];
               $tecnico = $_POST['tecnico'];
               $query1 = "UPDATE clientes SET nombre='$nombre',direccion='$direccion',telefono='$telefono',correo='$correo',tecnico='$tecnico' WHERE identificacion='$identificacion'";
               $resultado=$conexion->query($query1);
               if ($resultado){
                   date_default_timezone_set('America/Bogotaolo');
                   $fecha_actual=date('Y-m-d H:i:s');        
                   $query2 = "INSERT INTO servicios (identificacion,servicio,fecha)
                   VALUES ('$_POST[identificacion]', '$_POST[mensaje]', '$fecha_actual')"; 
                   $resultado1=$conexion->query($query2);
                   echo "<br />" . "<h2>" . "Solicitud creada Exitosamente!" . "</h2>";
                   echo "<a href='listar.php'>CONTINUAR/a>"; 
               }else{
                  echo "<br />" . "<h2>" . "Error, La solicitud no pudo ser creada!" . "</h2>";
                  echo "<a href='listar.php'>CONTINUAR/a>";
               }
     
     
 mysqli_close($conexion);
  
?>
				