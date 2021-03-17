<?php
        
                    $codigo=$_REQUEST['codigo']; 
                    include('conexion.php');
                    $query8="DELETE FROM temtransa  WHERE CODIGO='$codigo'";
                    $resultado=$conexion->query($query8);
                    if ($resultado) {
                        echo "<br />" . "<h2>" . "Item borrado Exitosamente!" . "</h2>";
                        echo "<a href='mostraritems.php'>CONTINUAR/a>";
                    }else {
                        echo "Error al borrar el ITEM" . $query . "<br>" . $conexion->error;
                    }
                    //header('Location:ordenes2.php?identificacion=1045695083');
                
             ?>
		
		<a href="ordenes2.php?identificacion=<?php echo $row['identificacion'];?>&codigo=<?php echo $row['codigo'];?>');">