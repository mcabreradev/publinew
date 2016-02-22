
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/index.css">
	
	<title></title>
</head>
<body>
<?php 
include "conexionDB.php";
$us=$_POST["us"];
$pw=$_POST["pw"];
$nom=$_POST["nom"];
$ape=$_POST["ape"];
$ci=$_POST["ced"];
$co=$_POST["co"];
$di=$_POST["di"];
$nm=$_POST["nm"];
$fn=$_POST["fn"];
$sex=$_POST["sex"];
$naci=$_POST["naci"];
$resi=$_POST["resi"];
$pro=$_POST["pro"];


$sql="INSERT INTO registro VALUES(' ','$us','$pw','$nom','$ape','$ci','$co','$di','$nm','$fn','$sex','$naci','$resi','$pro','')";


if (ejecutar($sql)){
	
 
 ?>
<div class="jumbotron text-center">
<?php
  echo "Se ha registrado $ape $nom";


 }else{
  echo "Ha ocurrido un error";
  }
  ?>
  <br>
  <button><a href="index.php">Volver</a></button>
</div> 

</body>
</html>