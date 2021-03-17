<!DOCTYPE html>
<html lang="en">
<head>
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
<body>
<header class="titulo">
    <h1 class="textCenter">Ordenes de Servicio Tecnico</h1>
</header>

<div class="container">
    <form class="formContainer" action="enviar.php" method="POST">
        <div class="formGroup col-33">
                 <label for ="orden"<h2>Numero de Orden</h2</label>
                 <input type="text" name="numero" id="numero" class="field" >
                 <label for ="fecha">Fecha: (MM/DD/AAAA)</label>
                 <input type="text" name="fecha" id="fecha" class="field" >
            </div>
        <div class="formGroup col-33">
            
            <label for="identificacion">Identificación</label>
            <input type="text" name="identificacion" id="identificacion" class="field" >
        </div>
        <div class="formGroup col-33">
            <label for="nombre">Nombre:</label>     
            <input type="text" name="nombre" id="nombre">
        </div>
        <div class="formGroup col-33">
            <label for="telefono">Telefono:</label>
            <input type="text" name="telefono" id="telefono">
        </div>
        <div class="formGroup col-50">
            <label for="direccion">Direccion:</label>
            <input type="text" name="direcion" id="direccion">
        </div>
        <div class="formGroup col-100">
            <label for="DETALLE"><center>DETALLE</center></label>
        </div>
        <div class="formGroup col-6">
            <label for="cantidad">Cant</label>
            <input type="text" name="cantidad" id="cantidad">
        </div>

        <div class="formGroup col-50">
            <label for="descripcion"><center>Descripción:</center></label>
            <input type="text" name="descripcion" id="descripcion">
        </div>
        <div class="formGroup col-15">
            <label for="vlrunitario">Vlrunitario:</label>
            <input type="text" name="vlrunitario" id="vlrunitario">
        </div>
        <div class="formGroup col-15">
            <label for="totalt">Total:</label>
            <input type="text" name="total" id="total">
        </div>
        <div class="formGroup col-100">
            <label for="observaciones">observaciones:</label>
            <textarea rows="5" type="text" name="mensaje" id="mensaje"></textarea>
        </div>
        <div class="formGroup mb-0">
            <button type="submit" onclick=this.form.action="busquedaorden.php" class="btn btn-primary" value="clientes">CLIENTES</button>
            <button type="submit" onclick=this.form.action="enviar.php" class="btn btn-secondary" value="Agregar">AGR ITEM</button>
            <button type="submit"  onclick=this.form.action="index.php" class="btn btn-success" value="mostraritem">MOSTRAR ITEMS</button>
            <button type="submit" onclick=this.form.action="busquedaorden.php" class="btn btn-primary" value="agregar">GUARDAR</button>
            <button type="submit"  onclick=this.form.action="index.php" class="btn btn-success" value="imprimir">IMPRIMIR</button>
            <button type="submit" onclick=this.form.action="index.php" class="btn btn-primary" value="salir">SALIR</button>
        </div>
    </form>
</div>

</body>
</html>
