<html>
<head>

<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="css/index.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<meta name="vieport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximun-scale=1.0, minimun-scale=1.0">



<title>Sistema de Noticias</title>
</head>
<body>
<h1>Sistema de Noticias</h1>
<?php 

include("conexionDB.php"); ?>

<div style="float:left; width: 25%;">

  <?php include('list-categoria.php'); ?>

</div>
<div style="float:right; width: 75%;">
  <?php include('list-noticia.php'); ?>
</div>
</body>
</html>