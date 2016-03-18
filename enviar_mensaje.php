<?php 

//OTros datos
$Santiago = "sangonzalez.94@gmail.com";
$Didier = "didierorjuela@gmail.com";
$asunto = "Mensaje de DySSoftware / Consulta";
//Conectarse y seleccionar base de datos 
/*$link = mysql_connect('localhost', 'root'); 
if (!$link) { 
	die('Could not connect: ' . mysql_error()); 
} 
	echo 'CARGANDO DATOS...'; 



$db_selected = mysql_select_db('dyssoftware', $link); 
if (!$db_selected) { 
	die ('Cant use tarea : ' . mysql_error()); 
} */
// Tomar los campos provenientes del Formulario 
$nombre   = $_POST['nombre']; 
$email    = $_POST['email']; 
$telefono = $_POST['telefono']; 
$mensaje  = $_POST['mensaje']; 

// Insertar campos en la Base de Datos 
/*$que = "INSERT INTO mensajes (nombre, email, telefono, mensaje) "; 
$que.= "VALUES ('".$nombre."', '".$email."', '".$telefono."','".$mensaje."') "; */
/*$res = mysql_query($que, $link) or die(mysql_error()); */
//Cuerpo para mail con datos de la consulta
$cuerpo = "Nombre: ".$nombre."Email: ".$email."Telefono: ".$telefono."Mensaje o consulta: ".$mensaje;
mail($Santiago,$asunto,$cuerpo); 
mail($Didier,$asunto,$cuerpo); 
header('Location: gracias_por_contactarse.php');
/*if (mysql_query($que, $link) === true){
	//mail($santiago,$asunto,$cuerpo); 
	mail('sangonzalez.94@gmail.com','hola','adf asdf asdf asdf asdf '); 
	/*header('Location: gracias_por_contactarse.php');*/
/*}else {
	header('Location: error_carga_cliente.html');
}
// Cerrar conexión a la Base de Datos 
mysql_close($link); */
?> 
