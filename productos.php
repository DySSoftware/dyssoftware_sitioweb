<!DOCTYPE html>
<html lang="es">
	<?php include('head.html'); ?>
	<body class="producto">
		<header id="includes" class="clase-general">
			<?php include('barra-navegacion.html'); ?>
			<img src="img/banner_nuestrosproductos.png" style="background-color:#2196F3"width="100%" alt="...">
		</header>
		<div id="content" class="clase-general">
				<h1 class="tituloH1">Nuestros productos</h1>
				<div class="seccion_producto" id="seccionProductos">
					
						<div class = "divP">
							
							<img src="img/adaptable.png" class="img-circle img-responsive img-centro" width="200px">
							<h1 class="letraBlanca">Diseño Web</h1>
							<h2 class="tituloH2">¿Para qué necesito un sitio web?</h2>
							<p>
								 Hoy en día, todo esta en internet. Con un sitio web, su negocio
								 local o emprendimiento ampliará la cantidad de potenciales
								 clientes, además de mejorar la forma de contacto
								 con los actuales.
						  </p>
						 
							 <a onClick="cargar('#seccionProductos','listado_productos_web.html')" class="btn btn-success  boton-masinfo">Ver productos</a>
						
					</div>
					
						<div class = "divP">
							
							<img src="img/redes-sociales.png" class="img-circle img-responsive img-centro" width="200px">
							<h1 class="letraBlanca">Redes sociales</h1>
							<h2 class="tituloH2">Hay que estar en todos lados</h2>
							<p>
								 Todos estan en Facebook, Twitter, Google+. 
								 Por eso, lo importante es estar en todos lados
								 con la misma identidad visual que en el sitio web.
								 Nuestra misión, es ayudarle a usted a tener
								 además de su página web, su presencia en las
								 redes sociales, con la misma imagen.
						  </p>			
			
						
						
							 <a onClick="cargar('#seccionProductos','productos_web.html')" class="btn btn-success  boton-masinfo">Más información</a>
						
					</div>
					<div class = "divP">
						
						<img src="img/diseno-grafico.png" class="img-circle img-responsive img-centro" width="200px">
						<h1 class="letraBlanca">Diseño Gráfico</h1>
						<h2 class="tituloH2">La imagen es importante</h2>
						<p>
							 Además del sitio web, la imagen también es
							 importante. Por eso nuestro objetivo es 
							 realizar una identidad visual, que puedas
							 utilizar en el sitio web y las redes sociales
							 y que sea facilmente reconocida por tus clientes.
					  </p>
						<a onClick="productosDiseno()" class="btn btn-success  boton-masinfo">Más información</a>
					</div>
					
					<div class = "divP">
						
						<img src="img/mundo-mobile.png" class="img-circle img-responsive img-centro" width="200px">
						<h1 class="letraBlanca">Mundo Mobile</h1>
						<h2 class="tituloH2">Los smartphones, son el futuro</h2>
						<p>
							 Hoy en día, todos tienen un smartphone. Por eso,
							 algo necesario, es tener un sitio web Responsive Design,
							 para que pueda ser visto desde cualquier pantalla,
							 pero además, tener una aplicación disponible para ser
							 descargada por los usuarios moviles.
					  </p>
						<a onClick="productosMobile()" class="btn btn-success  boton-masinfo">Más información</a>
					</div>
					
			</div>
		</div>
		<?php include('footer.html');?>
	</body>
</html>
