<html>
<head>

</head>
<body>
<center>
    <table bgcolor="cyan" border="4">
        <thead>
            <tr>
                <th colspan="1"><a href="agregar.php">Nuevo</a></th>
                <th colspan="1"><a href="index.php">Retornar Menu</a></th>
                <th colspan="7">Lista de Clientes</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><b>Identificacion<b></td>
                <td><b>Nombre<b></td>
                
                <td colspan="2">Operaciones</td>
         
            </tr>
            <?php
                include('conexion.php');  
                $identificacion=$_REQUEST['identificacion'];
                include('conexion.php');
                $query="SELECT * FROM clientes";
                $resultado=$conexion->query($query);
                while($row=$resultado->fetch_assoc()){
             ?>
                <tr>
                    
                    <td><?php echo $row['identificacion']; ?></td>
                    <td><?php echo $row['nombre']; ?></td>
                     
 <td><a href="ordenes2.php?identificacion=<?php echo $row['identificacion'];  ?>&codigo=<?php echo $row['identificacion'];?>">Continuar</a></td>
                   
                </tr>
                <?php
                    }
                ?>

            
        </tbody>
    </table>
    </center>
    </body> 
    </html>
       	