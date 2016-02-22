<?php session_start();

$usuario= $_SESSION['usuario'];

$estado = false;

if (isset($usuario)) {
	$estado= true;
}
 ?>