<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="keywords" 
          charset="UTF-8"
          content="Meta Tags, Metadata" /> 
    <title>Formulario Solicitar un Servicio Via mail</title> 
    <link rel="stylesheet" type="text/css" href="css/estilos.css"> 
    <link rel="stylesheet" href="css/boton.css"> 
    <header class="titulo">
         <h1>Ordenes de Servicio Tecnico</h1> 
    </header>
<style>
    body{
        font-family: Arial; 
        background-color: #18a383;
        box-sizing: border-box;
       }
    .container{
        margin: 0 auto;
        width: 1200px;
    }
        form{
            font-size: 0.8em;
            background-color: white;
            padding: 15px;            
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
              padding: 5px;
           

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

<div class="container">
<Form action="enviar.php" method="POST">
    <div class="group">
        <label></label>
        <input type="text"  onclick=this.form.action="index.php" name="identificacion" class="field" requered> 
    </div>
     Nombre:
    <input type="text" name="nombre" class="field" requered> 
    <p>Direccion:</p>
    <input type="text" name="direccion" class="field" requered> <br/>
    <p>Telefono:</p>
    <input type="text" name="telefono" class="field" requered> <br/>
    <p>Correo:</p>
    <input type="email" name="correo" class="field" requered><br/>
    <p>Mensaje:</p>
    <Textarea type="text" name="mensaje" class="field" requered></textarea><br/>

    <p class="center-content">
    <button type="submit" onclick=this.form.action="busqueda.php" class="btn btn-green" value="Buscar">BUSQUEDA</button>
    <button type="submit" onclick=this.form.action="enviar.php" class="btn btn-green" value="Aceptar">ACEPTAR</button>
    <button type="submit"  onclick=this.form.action="index.php" class="btn btn-green" value="Retornar Menu">SALIR</button>
       
    </p>   

</Form>
</div>

</body>
</html>