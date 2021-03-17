<?php
        
        
        include('conexion.php');
        $query="SELECT * FROM temtransa";
                $resultado=$conexion->query($query);
                while($row=$resultado->fetch_assoc()){
        $identificacion=$_REQUEST['identificacion'];
		$cantidad = $_POST['cantidad'];
		$descripcion= $_POST['descripcion'];
		$vlrunitario = $_POST['vlrunitario'];
		$total = $_POST['total'];
		$query3="INSERT INTO transacciones(identificacion,cantidad, descripcion, vlrunitario, total) VALUES ('$_POST[identificacion]', $_POST[cantidad],'$_POST[descripcion]',$_POST[vlrunitario],$_POST[total])";
		$resultado2=$conexion->query($query3);
		
?>
<a href="ordenes2.php?identificacion=<?php echo $row['identificacion'];?>&codigo=<?php echo $row['codigo'];?>');">