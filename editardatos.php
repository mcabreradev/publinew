<?php
  session_start();
  $us=$_SESSION['username'];

  ?>

<html>
<head>

<meta charset="utf-8">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/index.css">

	<title>PubliNew</title>
</head>
<body>


 <?php
 $host = "localhost";
 $user = "root";
 $password = "noname";
 $database = "publinew";

$con=mysql_connect($host,$user,$password)or die ("Problemas al conectar servidor");

mysql_select_db($database,$con)or die ("Problemas al conectar BD");




  
mysql_query("UPDATE registro SET pasword = '$_POST[pw]', nombre = '$_POST[nom]', apellido = '$_POST[ape]',
cedula = '$_POST[ced]', email = '$_POST[co]', direccion = '$_POST[di]', numerotelefono = '$_POST[nm]', 
fechanacimiento = '$_POST[fn]', sexo = '$_POST[sex]', nacionalidad = '$_POST[naci]', tiporesidencia = '$_POST[resi]',
profesion = '$_POST[pro]'  WHERE usuario = '$us'", $con)or die (mysql_error());
?>

<div class="jumbotron text-center ">
<?php
ob_start();
   header('refresh:2; url=index.php');
	echo " <h2>Se han Actualizado sus Datos</h2>";	
ob_end_flush();

?>
</div>

</body>
</html>