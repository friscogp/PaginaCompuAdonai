<!DOCTYPE html>
<html lang="es">
<head>
	<title>Menu Principal</title>
	<meta charset="utf-8">
	<meta reset"viewport" content="width=device-width, user-scalable=no, initial-scale=1, minimum-scale=1">
	<link rel="stylesheet" href="estilos2.css">
    <link rel="stylesheet" href="ccs/bootstrap.css">
    <script src="js/bootstrap.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/jquery-3.3.1.slim.min.js"></script>
</head>
<body>
	<header>
        <div class="container bg-primary py-5">
                <img src="mobil21.jpg">
                <img src="logocompuadonai.jpg" 
        </div> 
		<input type="checkbox" id="btn-menu">
		<label for="btn-menu"><img src="icono2.bmp" alt =""></label>
		<nav class="navegacion">
            <ul class="menu">
                <li><a href="#">Admon CompuAdonai</a>
                    <ul class="submenu">
                        <li><a href="listar.php">Administrar</a></li>
                        <li><a href="ordenes.php">Ordenes de Servicio</a></li>
                        <li><a href="factura.php">Facturas Clientes</a></li>
                    </ul>
                </li>                    
                <li><a href="#">Servicio Tecnico</a>
                    <ul class="submenu">
                        <li><a href="solicitar_servicio.php">Solicitud de Servicios</a></li>
                        <li><a href="#">Estado de un equipo</a></li>
                        <li><a href="#">Bitacora CompuAdonai</a></li>
                        <li><a href="#">Solicitar Cotizacion</a></li>
                    </ul>
                </li>
                <li><a href="#">Ingeniería</a>
                    <ul class="submenu">
                        <li><a href="#">Cámaras</a></li>
                        <li><a href="#">Redes</a></li>
                        <li><a href="#">Programación WEB</a></li>
                        <li><a href="#">Domótica</a></li>
                        <li><a href="#">Automatización</a></li>
                    </ul>
                </li>
                <li><a href="#">Tecnologías</a>
                     <ul class="camaras">
                        <li><a href="#">Computadores</a></li>
                        <li><a href="#">Portátiles</a></li>
                        <li><a href="#">Impresoras</a></li>
                        <li><a href="#">Videobeams</a></li>
                        <li><a href="#">Televisores</a></li>
                        <li><a href="#">Ups</a></li>
                        <li><a href="#">Fuentes de Poder</a></li>
                        
                </ul>
                </li>
                        <li><a href="#">Contactanos</a></li>
            </ul>         
        </nav>
	</header>
</body>
</html>