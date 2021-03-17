<html>
<head>

</head>
<body>
<center>
    <table bgcolor="cyan" border="4">
        <thead>
            <tr>
                <th colspan="1"><a href="ordenes.php">Nuevo</a></th>
                <th colspan="1"><a href="index.php">Retornar Menu</a></th>
                <th colspan="7">Lista de Clientes</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><b>Numero<b></td>
                <td><b>Identificacion<b></td>
                <td><b>servicio<b></td>
                <td><b>fecha<b></td>
                <td colspan="2">Operaciones</td>
         
            </tr>
            <?php
                $identificacion=$_REQUEST['identificacion'];
                include('conexion.php');
                $query="SELECT * FROM servicios";
                $resultado=$conexion->query($query);
                while($row=$resultado->fetch_assoc()){
             ?>
                <tr>
                    <td><?php echo $row['numero']; ?></td>     
                    <td><?php echo $row['identificacion']; ?></td>
                    <td><?php echo $row['servicio']; ?></td>
                    <td><?php echo $row['fecha']; ?></td>
                    <td><a href="modificar.php?identificacion=<?php echo $row['identificacion']; ?>">imprimir</a></td>
                    <td><a href="eliminar.php? identificacion=<?php echo $row['identificacion']; ?>">Eliminar</a></td>
                </tr>
                <?php
                    }
                ?>

            
        </tbody>
    </table>
    </center>
    </body> 
    </html>
       	