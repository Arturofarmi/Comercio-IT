<?php
if($_SERVER['REQUEST_METHOD'] === 'POST' ){
	if(isset($_post['nombre']) && isset($_POST['email'])&&
		isset($_post['mensaje']) {
	//capturar los parametros
	$nombre  = $_post['nombre'];
	$email   = $_post['email'];
	$mensaje = $_POST['mensaje'];

	$primercaracter = substr($nombre, 0,1);
	//validacion del nombre
	if (empty($nombre) || strlen($nombre)<3 ||is_numeric($nombre) || is_numeric($primercaracter)  ){

		echo "nombre incorrecto";


		}

	}

}else{

	header("location:index.php?=contacto"
}

?>