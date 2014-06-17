<html>
	<head>
		<meta charset="utf-8">
		<title>Nacer a la vida</title>
		<!-- Para los popups -->
        <script language="javascript" type="text/javascript" src="js/jquery.js"></script>
        <script language="javascript" type="text/javascript" src="js/popup.js"></script>

        <link type="text/css" rel="stylesheet" href="estilos/estilo_encontacto.css">
		<link rel="shortcut icon" href="img/nacer_vida.ico">
	</head>

	<body>

	<script LANGUAGE="JavaScript"> //Funcion para Agregar a Favoritos
		function agregar(){
			if ((navigator.appName=="Microsoft Internet Explorer") && (parseInt(navigator.appVersion)>=4)) {
				var url="http://www.TuSitio.com/";
				var titulo=" Descripcion de mi sitio web";
				window.external.AddFavorite(url,titulo);
			} else if(navigator.appName == "Netscape") {
				alert ("Presione Crtl+D para agregar este sitio en sus Bookmarks");
			}
		}
	</script>

	<div id="cuerpo">

		<div id="rotulo">
			<img src="img/rotulo_con_logo.jpg" alt="Josefina">
		</div>

		<div id="botonera_ppal">
			<ul>
			<?php /*esto est� provisorio lo vamos ir acomodando*/
				switch ($seccion) {
				case 'inicio':
						echo '<li class="barra_ppal"><a href="index.php"><span class="ppal">Qui&eacute;nes Somos</span></a></li>
									<li class="barra_ppal"><a href="servicios.php"><span class="ppal">Servicios</span></a></li>
									<li class="barra_ppal"><a href="consejos.php"><span class="ppal">Testimonios</span></a></li>
									<li class="barra_ppal"><a href="clientes.php"><span class="ppal">Fotos</span></a></li>
									<li class="barra_ppal"><a href="contacto.php"><span class="ppal">Contacto</span></a></li>';
						break;
				case 'la_empresa':
						echo '<li id="ppal_activo"><span class="ppal">Qui&eacute;nes Somos</span></li>
									<li class="barra_ppal"><a href="servicios.php"><span class="ppal">Servicios</span></a></li>
									<li class="barra_ppal"><a href="consejos.php"><span class="ppal">Testimonios</span></a></li>
									<li class="barra_ppal"><a href="clientes.php"><span class="ppal">Fotos</span></a></li>
									<li class="barra_ppal"><a href="contacto.php"><span class="ppal">Contacto</span></a></li>';
						break;
				case 'servicios':
						echo '<li class="barra_ppal"><a href="index.php"><span class="ppal">Qui&eacute;nes Somos</span></a></li>
									<li id="ppal_activo"><span class="ppal">Servicios</span></li>
									<li class="barra_ppal"><a href="consejos.php"><span class="ppal">Testimonios</span></a></li>
									<li class="barra_ppal"><a href="clientes.php"><span class="ppal">Fotos</span></a></li>
									<li class="barra_ppal"><a href="contacto.php"><span class="ppal">Contacto</span></a></li>';
						break;
				case 'consejos':
						echo '<li class="barra_ppal"><a href="index.php"><span class="ppal">Qui&eacute;nes Somos</span></a></li>
									<li class="barra_ppal"><a href="servicios.php"><span class="ppal">Servicios</span></a></li>
									<li id="ppal_activo"><span class="ppal">Testimonios</span></li>
									<li class="barra_ppal"><a href="clientes.php"><span class="ppal">Fotos</span></a></li>
									<li class="barra_ppal"><a href="contacto.php"><span class="ppal">Contacto</span></a></li>';
						break;
				case 'clientes':
						echo '<li class="barra_ppal"><a href="index.php"><span class="ppal">Qui&eacute;nes Somos</span></a></li>
									<li class="barra_ppal"><a href="servicios.php"><span class="ppal">Servicios</span></a></li>
									<li class="barra_ppal"><a href="consejos.php"><span class="ppal">Testimonios</span></a></li>
									<li id="ppal_activo"><span class="ppal">Fotos</span></li>
									<li class="barra_ppal"><a href="contacto.php"><span class="ppal">Contacto</span></a></li>';
						break;



				case 'contacto':
						echo '<li class="barra_ppal"><a href="index.php"><span class="ppal">Qui&eacute;nes Somos</span></a></li>
									<li class="barra_ppal"><a href="servicios.php"><span class="ppal">Servicios</span></a></li>
									<li class="barra_ppal"><a href="consejos.php"><span class="ppal">Testimonios</span></a></li>
									<li class="barra_ppal"><a href="clientes.php"><span class="ppal">Fotos</span></a></li>
									<li id="ppal_activo"><span class="ppal">Contacto</span></li>';
						break;
				default: /*este es el caso por defecto ac� se podr�a pensar una pantalla de error linda para el caso en que escriban cualquier cosa en la url*/
						echo '<li class="barra_ppal"><a href="index.php"><span class="ppal">Qui&eacute;nes Somos</span></a></li>
									<li class="barra_ppal"><a href="servicios.php"><span class="ppal">Servicios</span></a></li>
									<li class="barra_ppal"><a href="consejos.php"><span class="ppal">Testimonios</span></a></li>
									<li class="barra_ppal"><a href="clientes.php"><span class="ppal">Fotos</span></a></li>
									<li class="barra_ppal"><a href="contacto.php"><span class="ppal">Contacto</span></a></li>';
						break;
				}
			?>
			</ul>
		</div>
