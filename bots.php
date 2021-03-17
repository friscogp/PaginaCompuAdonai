<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
   <tr>

                <td><b>cantidad<b></td>
                <td><b>descripcion<b></td>
                <td><b>vlr Unitario<b></td>
                <td><b>Vlr Total<b></td>
                <td colspan="2">Operaciones</td>
         
            </tr>
<?php
                include('conexion.php');
                 $query1="CREATE TEMPORARY TABLE temptransa(cantidad int(10), descripcion varchar(30), vlrunit int(10), total int(10))";
                $resultado1=$conexion->query($query1);
                $query2="INSERT INTO temptransa(cantidad, descripcion, vlrunitario, total) VALUES (2,'CAMA PARA 2 PAREJA',3500,70000)";
                $resultado2=$conexion->query($query2);
                $query3="SELECT * FROM temptransa";
                $resultado3=$conexion->query($query3);
                while($row=$resultado3->fetch_assoc()){
                        
               
               
           
             ?>
            
                <tr>
                     
                    <td><?php echo $row['cantidad']; ?></td>
                    <td><?php echo $row['descripcion']; ?></td>
                    <td><?php echo $row['vlrunitario']; ?></td>
                    <td><?php echo $row['total']; ?></td>
                    <td><a href="modificar.php?identificacion=<?php echo $row['identificacion']; ?>">Modificar</a></td>
                    <td><a href="eliminar.php? identificacion=<?php echo $row['identificacion']; ?>">Eliminar</a></td>
                </tr>
                <?php
                    }
                ?>

</body>
</html>
