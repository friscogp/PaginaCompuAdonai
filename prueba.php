<!DOCTYPE html>
<html>
<head>
	<title>TABLAS TEMPORALES</title>
</head>
<body>
	<?php  
				include('conexion.php');
                 $query2="CREATE TEMPORARY TABLE temptransa(cantidad int(10), descripcion varchar(30), vlrunitario int(10), total int(10))";
                $resultado1=$conexion->query($query2);
                $query6="INSERT INTO temptransa(cantidad, descripcion, vlrunitario, total) VALUES (2,'CAMA PARA 2 PAREJA',3500,70000)";
                $resultado6=$conexion->query($query6);
                $query7="SELECT * FROM temptransa";
                $resultado7=$conexion->query($query7);
                //while($row=$resultado7->fetch_assoc()){
                $row=$resultado7->fetch_assoc();
                  echo $row['cantidad']; 
                  echo $row['descripcion'];
                  echo $row['vlrunitario'];
                  echo $row['total'];         
               
              
           
            
    ?>
</body>
</html>