<?php
	
	 
	session_start();
	?>
	 
	<!DOCTYPE html>
	<html lang="en">
	 
	<head>
	<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="css/index.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	 <title>Check Login</title>
	
	</head>
	 
	 
	<body>
	 
	<?php 
	include "conexionDB.php";
	
	
	$usuario = $_POST['usuario'];
	$pasword = $_POST['pasword'];
	
	
	$sql= "SELECT * FROM registro WHERE usuario = '$usuario' and pasword='$pasword'";
	 
	$result=ejecutar($sql);
	 

	$count= mysqli_num_rows($result);
	
	if($count == 1){
	 
	 $_SESSION['loggedin'] = true;
	 $_SESSION['username'] = $usuario;
	 $_SESSION['start'] = time();
	 $_SESSION['expire'] = $_SESSION['start'] + (5 * 60) ;
	 $_SESSION['estado']='autenticado';

	 ?>
	 <div class="jumbotron text-center ">
	 


<?php
 
ob_start();
   header('refresh:2; url=index.php');
	echo " <h2>Bienvenido! Has iniciado Sesion</h2>";	
ob_end_flush();

	?>
	

	<?php
	
	
	}
	 else {
	 	?>
	 	<div class="jumbotron text-center">
	 	<?php
	 echo "
	<h2>Username o Password estan incorrectos.</h2><br>
	";
	 
	 echo "<button class='btn btn-lg' > <a href='login.php'>Volver a Intentarlo</a></button>";
	}
	 
	?>
	 
	</body>
</html>
