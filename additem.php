<?php
        
        include('conexion.php');
        $identificacion=$_REQUEST['identificacion'];
		$cantidad = $_POST['cantidad'];
		$descripcion= $_POST['descripcion'];
		$vlrunitario = $_POST['vlrunitario'];
		$total = $_POST['total'];
		$query3="INSERT INTO temtransa(identificacion,cantidad, descripcion, vlrunitario, total) VALUES ('$_POST[identificacion]', $_POST[cantidad],'$_POST[descripcion]',$_POST[vlrunitario],$_POST[total])";
		$resultado2=$conexion->query($query3);
	 if ($resultado2) {
                        echo "<br />" . "<h2>" . "Item AGREGADO Exitosamente!" . "</h2>";
                        echo "<a href='ordenes2.php?identificacion=<?php echo $row['identificacion'];?>&codigo=<?php echo $row['codigo'];?>'>CONTINUAR/a>";
                    }else {
                        echo "Error al AGREGAR el ITEM" . $query . "<br>" . $conexion->error;
                    }	
?>
<tr>
                    
                    <td><?php echo $row['identificacion']; ?></td>
                    <td><?php echo $row['nombre']; ?></td>
                     
echo <td><a href="ordenes2.php?identificacion=<?php echo $row['identificacion'];  ?>&codigo=<?php echo $row['identificacion'];?>">Continuar</a></td>
                   
                </tr>
                <?php
                    }
                ?>