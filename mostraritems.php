<html>
<head>
       <script language="JavaScript">  
    function calcular()
    {
        var cantidad=  parseFloat( document.getElementById("cantidad").value);   
        var vlrunitario = parseFloat( document.getElementById("vlrunitario").value);            
        var total = document.getElementById("total").value = cantidad*vlrunitario;              
    }   
      function mostrar()
    {
        var cantidad=  parseFloat( document.getElementById("cantidad").value); 
        var descripcion=  parseFloat( document.getElementById("descripcion").value);
        var vlrunitario = parseFloat( document.getElementById("vlrunitario").value);            
        var total = document.getElementById("total").value = cantidad*vlrunitario;              
    }   
</script>
</head>

<body>

<center>
    <table bgcolor="cyan" border="4">
        <thead>
            <tr>
                
                <th colspan="1"><a href="nuevoitem.php?identificacion=<?php echo $row['identificacion']; 
                     ?>&codigo=<?php echo $row['codigo'];?>">Nuevo</a></th>
                <th colspan="1"><a href="index.php">Menu Principal</a></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><b>codigo<b></td>
                <td><b>cantidad<b></td>
                <td><b>descripcion<b></td>
                <td><b>vlr Unitario<b></td>
                <td><b>Vlr Total<b></td>
                <td colspan="3">Operaciones</td>
         
            </tr>
           

           <?php
               include('conexion.php');
                
                $query7="SELECT * FROM temtransa" ;
                $resultado7=$conexion->query($query7);
                if (!$resultado7)
                      echo 'error, no se encontraron datos';
                  else{
                    while($row=$resultado7->fetch_assoc()){
                       
                
             ?>    
                        
               <tr>
                    <td><?php echo $row['codigo']; ?></td>
                    <td><?php echo $row['cantidad']; ?></td>
                    <td><?php echo $row['descripcion']; ?></td>
                    <td><?php echo $row['vlrunitario']; ?></td>
                    <td><?php echo $row['total']; ?></td>
                    <?php
                        $codigo=$row['codigo'];
                    ?>
                    <td><a href="ordenes2.php?identificacion=<?php echo $row['identificacion']; 
                     ?>&codigo=<?php echo $row['codigo'];?>">Modificar</a></td>
                    <td><a href="ordenes2.php?identificacion=<?php echo $row['identificacion']; 
                     ?>&codigo=<?php echo $row['codigo'];?>">Eliminar</a></td>
                      <td><a href="ordenes2.php?identificacion=<?php echo $row['identificacion']; 
                     ?>&codigo=<?php echo $row['codigo'];?>">Menu Anterior</a></td>
                </tr
                <?php
                    }
                }
                ?>

            
        </tbody>
    </table>
    </center>
    </body> 
    </html>
       	