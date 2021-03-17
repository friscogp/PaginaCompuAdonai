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
                <td><b>Direccion<b></td>
                <td><b>Telefono<b></td>
                <td><b>Correo<b></td>
                <td><b>tecnico<b></td>
                <td colspan="2">Operaciones</td>
         
            </tr>
            <?php
                 
                $identificacion=$_REQUEST['identificacion'];
                include('conexion.php');
                $query="SELECT * FROM clientes";
                $resultado=$conexion->query($query);
                while($row=$resultado->fetch_assoc()){
             ?>
                <tr>
                     
                    <td><?php echo $row['identificacion']; ?></td>
                    <td><?php echo $row['nombre']; ?></td>
                    <td><?php echo $row['direccion']; ?></td>
                    <td><?php echo $row['telefono']; ?></td>
                    <td><?php echo $row['correo']; ?></td>
                    <td><?php echo $row['tecnico']; ?></td>
                    <td><a href="modificar.php?identificacion=<?php echo $row['identificacion']; ?>">Modificar</a></td>
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
       	