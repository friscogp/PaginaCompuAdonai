<?php
        
        $codigo=$_REQUEST['codigo'];
        include('conexion.php');
        $identificacion=$_REQUEST['identificacion'];
        cantidad = echo " " ;
	    descripcion= echo " ";
		vlrunitario=  echo " ";
		total = echo " ";
		
		
	
 ?>
 <a href="ordenes2.php?identificacion=<?php echo $row['identificacion'];?>&codigo=<?php echo $row['codigo'];?>');">