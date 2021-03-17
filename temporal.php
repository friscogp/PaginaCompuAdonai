<?php

	       include('conexion.php');
	       $query2="CREATE TEMPORARY TABLE temptransa(cantidad int(10), descripcion varchar(30), vlrunitario int(10), total int(10))";
	       $resultado1=$conexion->query($query2);

	?>
