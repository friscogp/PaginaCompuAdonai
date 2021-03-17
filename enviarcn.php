<?php
               include('conexion.php');
               $identificacion = $_POST['identificacion'];
               $nombre = $_POST['nombre'];
               $direccion = $_POST['direccion'];
               $telefono = $_POST['telefono'];
               $correo = $_POST['correo'];
               $tecnico = $_POST['tecnico'];
               $query1 = "INSERT INTO clientes (identificacion,nombre,direccion,telefono,correo,tecnico)
               VALUES ('$_POST[identificacion]', '$_POST[nombre]', '$_POST[direccion]', '$_POST[telefono]', '$_POST[correo]','$_POST[tecnico]')";
               $resultado=$conexion->query($query1);
               if ($resultado){
                   date_default_timezone_set('America/colombia_city');
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
				