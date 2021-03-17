<!DOCTYPE html>
<html lang="en">
<head>
    <title>Formulario Clientes de CompuAdonai</title> 
    <link rel="stylesheet" type="text/css" href="css/estilos.css"> 
    <link rel="stylesheet" href="css/boton.css"> 
    <header class="titulo">
         <h1>Registro de Clientes</h1> 
    </header>
<style>
    body{
        font-family: Arial; 
        background-color: #18a383;
        box-sizing: border-box;
       }
        form{
            font-size: 0.8em;
            background-color: white;
            padding: 15px;
            margin: 0 auto;
            width: 310px;
            border-radius: 3px;
        }
        input, textarea{
            border:0;
            outline: none;
            padding: 15px;
            width: 280px;


        }
        .field{
              border: solid 1px #ccc;
              padding: 10px;
           

        }

        .field:focus{
            border-color: #18a383;

        }
        .center-content{
            text-align: center;
            padding:13px;

        }
        button{
            padding: 5
        }
        .titulo{ font-style: italic;
      
      color: blue;
      text-align: center;
      padding: 30px;
    }
 </style>
</head>
<body>
<Form action="enviar.php" method="POST">
<?php
               $id=$_REQUEST['id']; 
              $host_db = "localhost";
               $user_db = "1099456";
               $pass_db = "72162794";
               $db_name = "1099456db2";
               $tbl_name = "identificacion";
               $conexion = new mysqli($host_db, $user_db, $pass_db, $db_name);
                $query="SELECT * FROM clientes  WHERE identificacion='$id'";
                $resultado=$conexion->query($query);
                $row=$resultado->fetch_assoc()
             ?>
    <p>Identificación:</p>
    <input type="text"  onclick=this.form.action="index.php" name="identificacion" class="field" requered  value ="<?php echo $row['identificacion']; ?>"><br/>
    <p>Nombre:</p>
    <input type="text" name="nombre" class="field" required value ="<?php echo $row['nombre']; ?>"> <br/>
    <p>Direccion:</p>
    <input type="text" name="direccion" class="field" required value ="<?php echo $row['direccion']; ?>"> <br/>
    <p>Telefono:</p>
    <input type="text" name="telefono" class="field" required value ="<?php echo $row['telefono']; ?>"> <br/>
    <p>Correo:</p>
    <input type="email" name="correo" class="field" required value ="<?php echo $row['correo']; ?>" ><br/>
    <p>Tecnico:</p>
    <input type="Tecnico" name="tecnico" class="field" required value ="<?php echo $row['tecnico']; ?>"><br/>
   
    
    <p class="center-content">
        <button type="submit" class="btn btn-green" value="Actualizar">ACEPTAR</button> 
        <button type="submit"  onclick=this.form.action="index.php" class="btn btn-green" value="Actualizar">SALIR</button>       
    </p>
    

</Form>
</body>
</html>
    
