<!DOCTYPE html>
<html lang="en">
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
    <meta charset="UTF-8">
    <title>Formulario Solicitar un Servicio Via mail</title>
    <link rel="stylesheet" type="text/css" href="css/estilos.css">
    <link rel="stylesheet" href="css/boton.css">
    <title>Ordenes de Servicio Tecnico</title>
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,600&display=swap" rel="stylesheet">
    <style>

        body{
            font-family: 'Raleway', sans-serif;
            background-color: #18a383;
            box-sizing: border-box;
            font-size: 14px;
            border-color: blue;
        }
        header h1{
            color: yellow;
        }
        .textCenter{
            text-align: center;
        }
        .container{
            margin: 0 auto;
            box-sizing: border-box;
            max-width: 900px;

        }
        .formContainer{
            background: #dd127b;
            padding: 15px;
            color: white;
        }
        .formGroup{
            width: 100%;
            margin-bottom: 10px;
        }
        .formGroup label{
            display: block;
        }
        input, textarea{
            padding: 10px;
            width: 100%;
            box-sizing: border-box;
            font-family: 'Raleway', sans-serif;
            color: black;
        }
        button{
            padding: 10px;
            border: unset;
            margin-bottom: 10px;
            font-family: 'Raleway', sans-serif;
        }
        .col-6{
                width:6%;
                display: inline-block;
                color:white;

            }
            .col-15{
                width: 15%;
                display: inline-block;
                color:white;
            }
        .col-33{
            width: 32.7%;
            display: inline-block;
            color:white;
        }
        .col-50{
            width: 49.5%;
            display: inline-block;
           color:white;
        }
        .col-100{
            width: 100%;
            color:white;
        }
        .btn-primary{
            background: blueviolet;
            color: white;
        }
        .btn-secondary{
            background: crimson;
            color: white;
        }
        .btn-success{
            background: forestgreen;
            color: white;
        }
        .mb-0{
            margin-bottom: 0;
        }
        @media (max-width: 600px) {
            .col-33 {
                width: 100%;
            }
            .col-50{
                width: 100%;
            }
            .btn{                     
                width: 100%;
            }
            .col-6{
                width:10%;
            }
            .col-15{
                width: 15%;

            }

        }
        .orden{text-align: right;}
        .grid-container{
            display: grid;
            grid-template-columns: 10% 50% 20% 20%
            grid-gap:1;

        }

    </style>
</head>
    <?php
      
       include('temporal.php');
       date_default_timezone_set("America/Bogota"); 
       $fecha_actual=date('Y-m-d H:i:s');
    ?>
<body>
<header class="titulo">
    <h1 class="textCenter">Ordenes de Servicio Tecnico</h1>
</header>

<div class="container">
    <form class="formContainer" action="" method="POST">
                   
        <?php
             
                include('conexion.php'); 
                $identificacion=$_REQUEST['identificacion'];
                $query="SELECT * FROM clientes  WHERE identificacion='$identificacion'";
                $resultado=$conexion->query($query);
                $row=$resultado->fetch_assoc();
                                
             ?>
        <div class="formGroup col-33">
                 <label for ="orden"<h2>Numero de Orden</h2</label>
                 <input type="text" name="numero" id="numero" class="field" >
                 <label for ="fecha">Fecha: (MM/DD/AAAA)</label>
                 <input type="text" name="fecha" class="field" required value ="<?php echo $fecha_actual;?>">
            </div>
        <div class="formGroup col-33">
            
            <label for="identificacion">Identificación</label>
            <input type="text" onclick=this.form.action="index.php" name="identificacion" class="field" requered  value ="<?php echo $row['identificacion']; ?>">
        </div>
        <div class="formGroup col-33">
            <label for="nombre">Nombre:</label>     
           <input type="text" name="nombre" class="field" required value ="<?php echo $row['nombre']; ?>">
        </div>
        <div class="formGroup col-50">
            <label for="direccion">Direccion:</label>
            <input type="text" name="direccion" class="field" required value ="<?php echo $row['direccion']; ?>">
        </div>
        <div class="formGroup col-33">
            <label for="telefono">Telefono:</label>
             <input type="text" name="telefono" class="field" required value ="<?php echo $row['telefono']; ?>"> 
        </div>
        <?php
               
                include('conexion.php'); 
                 $codigo =$_GET['codigo'];
                
                    $query7="SELECT * FROM temtransa WHERE codigo=$codigo" ;
                 $resultado7=$conexion->query($query7);
                    if (!$resultado7)
                      echo 'error, no se encontraron datos';
                    else{
                    $row=$resultado7->fetch_assoc();
                          
                
             ?>     
        
        <div class="formGroup col-100">
            <label for="DETALLE"><center>DETALLE</center></label>
        </div>
              
        <div class="formGroup col-6">
            <label for="cantidad">Cant</label>
            <input type="text" name="cantidad" id="cantidad" value ="<?php echo $row['cantidad']; ?>" onkeyup="calcular();">
        </div>

        <div class="formGroup col-50">
            <label for="descripcion"><center>Descripción:</center></label>
            <input type="text" name="descripcion" id="descripcion" value ="<?php echo $row['descripcion']; ?>">
        </div>
        <div class="formGroup col-15">
            <label for="vlrunitario">Vlrunitario:</label>
            <input type="text" name="vlrunitario" id="vlrunitario" value ="<?php echo $row['vlrunitario']; ?>" onkeyup="calcular();">
        </div>
        <div class="formGroup col-15">
            <label for="total">Total:</label
            <td><input type="text" name="total" value ="<?php echo $row['vlrunitario']; ?>" readonly id="total" size="3"></td>
        </div>
        <?php
          }
        ?>
        <div class="formGroup col-100">
            <label for="observaciones">observaciones:</label>
            <textarea rows="5" type="text" name="mensaje" id="mensaje"></textarea>
        </div>
        <div class="formGroup mb-0">
            <button type="submit" onclick=this.form.action="busquedaorden.php" class="btn btn-primary" value="clientes">CLIENTES</button>
            <button type="submit" onclick=this.form.action="additem.php" class="btn btn-secondary" value="Agregar">AGR ITEM</button>
            <button type="submit"  onclick=this.form.action="mostraritems.php?identificacion=echo $row['identificacion'];?&codigo=<?php echo $row['codigo'];?>" class="btn btn-success" value="mostraritem">MOSTRAR ITEMS</button>
            <button type="submit" onclick=this.form.action="guardaritems.php" class="btn btn-primary" value="agregar">GUARDAR</button>
            <button type="submit" onclick=this.form.action="modificaritem.php?identificacion=echo $row['identificacion'];?&codigo=<?php echo $row['codigo'];?>" class="btn btn-secondary" value="MODIFICAR">MODIFICAR ITEMS</button>
            <button type="submit"  onclick=this.form.action="" class="btn btn-success" value="imprimir">IMPRIMIR</button>
            <button type="submit" onclick=this.form.action="index.php" class="btn btn-primary" value="salir">SALIR</button>
        </div>
    </form>
</div>

</body>
</html>
