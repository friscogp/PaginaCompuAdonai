<!DOCTYPE html>
<html lang="es"> 
     <head>
        <script language="JavaScript">  
                function Salir() {
                    opener = self
                    self.close()
                }
                function activarmicrofono()
                {
                    navigator.mediaDevices.getUserMedia({ audio: true, video: true}).then((stream)=>{console.log(stream)
                    let video = document.getElementById('video')
                    video.srcObject = stream
                    video.onloadedmetadata = (ev)=>video.play()
                    }).catch((err)=>console.log(err))            
                }   
                function desactivarmicrofono()
                {
                    navigator.mediaDevices.getUserMedia({ audio: false, video: true}).then((stream)=>{console.log(stream)
                    let video = document.getElementById('video')
                    video.srcObject = stream
                    video.onloadedmetadata = (ev)=>video.play()
                    }).catch((err)=>console.log(err))            
                }   
                function desactivarcamara()
                {
                    navigator.mediaDevices.getUserMedia({ audio: true, video: false}).then((stream)=>{console.log(stream)
                    let video = document.getElementById('video')
                    video.srcObject = stream
                    video.onloadedmetadata = (ev)=>video.play()
                    }).catch((err)=>console.log(err))            
                }   
                function activarcamara()
                {
                    navigator.mediaDevices.getUserMedia({ audio: false, video: true}).then((stream)=>{console.log(stream)
                    let video = document.getElementById('video')
                    video.srcObject = stream
                    video.onloadedmetadata = (ev)=>video.play()
                    }).catch((err)=>console.log(err))            
                }   
        </script>

     	<meta charset="utf-8">
     	<meta name="viewport" content="width=device-width, initial-scale=1.0">
     	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	      <title>Bienvenidos a la sala de oracion</title>
          <style>

        body{
            font-family: 'Raleway', sans-serif;
            background-color: white;
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
      <link rel="stylesheet" type="text/css" href="css/estilos.css">
    <link rel="stylesheet" href="css/boton.css">
    <title>Ordenes de Servicio Tecnico</title>
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,600&display=swap" rel="stylesheet">
    
                
     
     <body>
            <h1> <b><CENTER>VIDEO CONFERENCIA IGLESIA JEHOVA SHAMA NUEVA JERUSALEN</p></CENTER> </b><h1>
            	<video src="" id="video"></video>
                <div class="formGroup mb-0">
                        <div class="col-15">
                            <input type="button" class="btn btn-primary"
                            onclick="activarcamara()"
                            value="Activar Camara">
                        </div>
                        <div class="col-15">
                            <input type="button" class="btn btn-secondary"
                            onclick="desactivarcamara()"
                            value="Desactivar Camara">
                        </div>
                        <div class="col-15">
                            <input type="button" class="btn btn-primary"
                            onclick="activarmicrofono()"
                            value="Activar Microfono">
                        </div>
                        <div class="col-15">
                            <input type="button" class="btn btn-secondary"
                            onclick="Desactivarmicrofono()"
                            value="Desactivar Microfono">
                        </div>
                        <div class="col-15">
                            <input type="button" class="btn btn-primary"
                            onclick="Salir()"
                            value="Salir">
                        </div>
                </div>
     </body>
</html>