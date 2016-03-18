<!DOCTYPE html>
<html lang="es">
	<?php include('head.html'); ?>
	<body class="contactos">
		<header id="includes" class="clase-general">
			<?php include('barra-navegacion.html'); ?>
			<img src="img/banner_contacto.png" width="100%" style="background:#FF9800"alt="...">
		</header>
		<div id="content" class="clase-general">
				<h1 class="tituloH1">Contactanos</h1>
				<div class="caja800px">
					<p>
						Nos podés contactar a info@dyssoftware.com.ar o llenar el siguiente formulario:
					</p>
					<div class = "form-ventana">
						<form action="enviar_mensaje.php" method="post">
							<label for="nombre">Nombre y apellido</label>
							<input type="text" class="form-control" id="nombre" name="nombre">
							<label for="email">Correo Electrónico</label>
							<input type="email" class="form-control" id="email" name="email">
							<label for="telefono">Teléfono de contacto</label>
							<input type="number" class="form-control" id="telefono" name="telefono">
							<label for="mensaje">Mensaje</label>
							 <textarea class="form-control" rows="5" id="mensaje" name="mensaje"></textarea>
							<br>
							<button type="submit" class="btn btn-success">Enviar</button>
							<button type="reset" class="btn btn-danger">Borrar</button>
						</form>
					</div>	
				
				</div>	
		</div>
		<?php include('footer.html');?>
	</body>
</html>
