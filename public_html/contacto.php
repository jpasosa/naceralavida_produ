<?php
	$seccion = 'contacto';
	$Error_email="no";

	function formatear_texto($texto)
	{
		$texto = trim ($texto);		// saca los espacios de adelante y atras
		$texto = strip_tags ($texto); // saca los tags
		$texto = strtoupper($texto); // pasa todo a mayusculas
		$texto = strtr ($texto, "áéíóúüñ", "ÁÉÍÓÚÜÑ");  // convierte las letras con acentos a mayusculas con acentos
		$texto = strtr ($texto, '"', ' '); 
		$texto = htmlspecialchars( $texto);	// saca los tags, creo que es igual al strip_tags
		return $texto;		// deveulve el texto formateado
	}	
/*	$detalleErrores = ''; */
/*	$noerrores = "Los campos que poseen aster&iacute;sco deben completarse obligatoriamente."; */
	
	if ($_REQUEST['action'] == "Enviar Consulta")
	{
		/*
		 * Primero levanto las variables que me envia form_preacreditaciones.php; esto 
		 * no es absolutamente necesario, ya que php te prepara
		 * las variables automÃ¡ticamente, pero es una buena costumbre
		 * inicializarlas a manopla, al principio del codigo.
		 */
		 
		$noerrores = '';
		$hayErrores = false;
		$detalleErrores = '';

		$nombre = $_REQUEST['nombre'];
		$nombre = formatear_texto($nombre);
		$apellido = $_REQUEST['apellido'];
		$apellido = formatear_texto($apellido);
		$telefono = $_REQUEST['telefono'];
		$telefono = formatear_texto($telefono);
		$email = $_REQUEST['email'];
		$email = formatear_texto($email);
		$mensaje = $_REQUEST['mensaje'];
		$mensaje = formatear_texto($mensaje);
	
		if ($mensaje == "")
		{
			$detalleErrores = "Escriba su consulta por favor.";
			$hayErrores = true;
		}
				
		if(!ereg("([-!#\$%&'*+./0-9=?A-Z^_`a-z{|}~])+@([-!#\$%&'*+/0-9=?A-Z^_`a-z{|}~]+\\.)+[a-zA-Z]{2,6}\$",$email))
		{
			$Error_email = "SI";
		}
		
		if ($Error_email=="SI")		
		{
			$hayErrores = true;
			$detalleErrores = "Ha introducido una direcci&oacute;n de correo no v&aacute;lida.";
		}	
		
		if ($email == "")
		{
			$detalleErrores = "El campo e-mail es obligatorio. Por favor ingrese su direcci&oacute;n de correo electr&oacute;nico.";
			$hayErrores = true;
		}
/*		if ($telefono == "")
		{
			$detalleErrores = "Ingrese un telefono por favor.";
			$hayErrores = true;
		}
*/		
		if ($apellido == "")
		{
			$detalleErrores = "Ingrese su apellido por favor.";
			$hayErrores = true;
		}
		
		if ($nombre == "")
		{
			$detalleErrores = "Ingrese su nombre por favor.";
			$hayErrores = true;
		}

		if ($hayErrores == false)
		{
		
		// Envio del formulario por email
		
		// 	DESTINATARIO TITULO Y ASUNTO DEL EMAIL (no usar acentos, etc. etc.)
		
		$destinatario = "zulmadoviak@naceralavida.com.ar";
		$tituloemail = "NaceraLaVida";
		$mail_headers = 'Content-type: text/html; charset=US-ASCII\r\n';
		$mail_headers .= 'Content-transfer-encoding:8BIT\r\n\r\n';
		
		$mail_body='
					<p>
						<font color="#FF9900" size="3" face="Arial, Helvetica, sans-serif"><strong>'.$tituloemail.'</strong></font>
					</p>
					<p>
						<font size="3" face="Arial, Helvetica, sans-serif">
						Nombre: <strong>'.$nombre.'</strong>
						<br>
						Apellido: <strong>'.$apellido.'</strong>
						<br>
						<br>
						Mensaje: <strong>'.$mensaje.'</strong>
						<br>
						<br>
						E-mail: <strong>'.$email.'</strong>
						<br>
						Teléfono: <strong>'.$telefono.'</strong>
						</font>
					</p>';
		
		mail($destinatario,$tituloemail,$mail_body,$mail_headers);
		// header ('Location: form_gracias.php');
		


		/* pagina muchas gracias */
		include('inc/encabezado.php'); 
?>
		<div id="contenedor">
			<div class="margen_izq" id="secc_contacto">
				<img src="img/cartel_izq.jpg" />
			</div>
			<div id="contenido">
				<h3 class="titulo">Gracias por su consulta.</h3>
			</div>
		
<?php include('inc/pie.php');							
/* fin pagina muchas gracias */

	}	
}
	if ($_REQUEST['action'] != "Enviar Consulta" || $hayErrores == true)
	{

	include('inc/encabezado.php');
?>
	<!-- aca va el formulario de inscripcion-->
	<div id="contenedor">
		<div class="margen_izq" id="secc_contacto">
			<img src="img/cartel_izq.jpg" />
		</div>
		<div id="contenido">
			<h3 class="titulo">Envianos Tus Comentarios</h3>
			<div class="continente">	
				<form name="form_contacto" id="form_contacto" method="post" action="<?=$_SERVER['PHP_SELF']?>">
					<p class="p_inputs">
						<label class="form_labels">Nombre:</label>
						<input class="campos" type="text" name="nombre" size="61" value="<?=$nombre?>" />
					</p>											
					<p class="p_inputs">
						<label class="form_labels">Apellido:</label>
						<input class="campos" type="text" name="apellido" size="61" value="<?=$apellido?>" />
					</p>						
					<p class="p_inputs">
						<label class="form_labels">E-mail:</label>						
						<input class="campos" type="text" name="email" size="61" value="<?=$email?>" />
					</p>						
					<p class="p_inputs">
						<label class="form_labels">Telefono:</label>						
						<input class="campos" type="text" name="telefono" size="61" value="<?=$telefono?>" />
					</p>
					<p class="p_textarea">
						<label class="form_labels">Mensaje:</label>
						<textarea class="campos" id="mensaje" cols="50" name="mensaje" rows="6" value="<?=$mensaje?>" ></textarea>
					</p>
					<p id="mensaje_error"><?=$detalleErrores?><?=$noerrores?></p>
					<p>
						<input type="hidden" name="action" value="Enviar Consulta"/>
					</p>
	                <p id="p_enviar"><input id="btn_enviar" name="submit" type="submit" value="Enviar Consulta >>"></p>
				</form>
			</div>
		</div>
<?php include('inc/pie.php');
}
/*
	echo '<pre>';
	print_r($_POST);
	echo '</pre>';
*/
?>

