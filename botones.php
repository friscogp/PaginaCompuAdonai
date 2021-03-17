<!DOCTYPE html>
<html>
<head>
	<title>BOTONES</title>
</head>
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
<body>
<form id="form1" name="form1" method="post" action="probar.php" autocomplete="off"
 		 <P>Cedula:    <input type="text" name="cedula"><br></P>
		 <p>Nombre:    <input type="text" name="nombre"><br></p>
		 <p>Direccion: <input type="text" name="direcccion"><br></p>
		 <p>Telefono:  <input type="text" name="telefono"><br></p>
<pre>	
<input name="btnLogA" type="submit" class="btn_primary" id="btnLogA" value="Enviar"/><span style="color: red">  <input name="btnLogC" type="submit" class="btn_secundary" id="btnLogC" value="Cancelar"/>	
</span></pre>

<?php
	if(isset($_GET["submit"]) && !empty($_GET["submit"])) { 
		echo $_GET["submit"];	
	}
?>
</form>

</html>