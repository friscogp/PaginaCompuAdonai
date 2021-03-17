<?php
        
        include('conexion.php');
		$cantidad = $_POST['cantidad'];
		$descripcion= $_POST['descripcion'];
		$vlrunitario = $_POST['vlrunitario'];
		$total = $_POST['total'];
		$query3="UPDATE temtransa SET cantidad=$_POST[cantidad], descripcion='$_POST[descripcion]', vlrunitario=$_POST[vlrunitario], total=$_POST[total]";
		$resultado2=$conexion->query($query3);
		header('Location:ordenes2.php?identificacion=1045695083');
?>