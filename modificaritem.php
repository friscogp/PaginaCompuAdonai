<?php
        
        $codigo=$_REQUEST['codigo'];
        include('conexion.php');
        $identificacion=$_REQUEST['identificacion'];
        $cantidad = $_POST['cantidad'];
		$descripcion= $_POST['descripcion'];
		$vlrunitario= $_POST['vlrunitario'];
		$total = $_POST['total'];
		$query3="UPDATE temtransa SET identificacion='$identificacion',cantidad='$cantidad', descripcion='$descripcion', vlrunitario='$vlrunitario', total='$total' WHERE codigo='$codigo'";
		$resultado2=$conexion->query($query3);
		 if ($resultado2) {
                    echo "<br />" . "<h2>" . "Item actualizado Exitosamente!" . "</h2>";
                    echo "<a href='	mostraritems.php'>CONTINUAR/a>";
                }else {
                    echo "Error al actualizar el item" . $query3 . "<br>" . $conexion->error;
                }
		
	
 ?>
 <a href="ordenes2.php?identificacion=<?php echo $row['identificacion'];?>&codigo=<?php echo $row['codigo'];?>');">