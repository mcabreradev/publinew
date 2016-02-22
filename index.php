<?php
  session_start();
  ?>
<html>
<head>

<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="css/index.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<meta name="vieport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximun-scale=1.0, minimun-scale=1.0">

	<title>Bienvenidos a PubliNew</title>

</head>
<body>

 <nav>

<ul class="nav nav-tabs nav-justified">

  <li role="presentation" class="active"><a href="index.php"><b>Inicio</b></a></li>

<?php


 include "conexionDB.php";
    
 if(isset($_SESSION['username']) and $_SESSION['estado']== 'autenticado'){
  ?>

<li role="presentation"><a href="index-noticias.php" >Noticias</a></li>  
<li role="presentation"><a href="add-noticia.php">Crear Articulo</a></li>
<li role="presentation"><a href="generar_pdf.php">Generar PDF</a></li>
<li role="presentation"><a href="usuariodate.php">Edita tus Datos</a></li>
<li role="presentation"><a href="logout.php" >Cerrar Sesion</a></li>

<?php  

}else{
?> 
<li role="presentation"><a href="registro.php">Registro</a></li>
<li role="presentation"><a href="login.php">Login</a></li>

<?php
}
?>

</ul>
<div class="text-center"><img src="imgs/index.png"></div>



</nav>

<header>

		<div class="left ">
  <div class="col-xs-6 col-sm-4">
    <div class="thumbnail">
      <img class="imagen" src="imgs/1.jpg" alt="...">
      <div class="caption">
        
      <p><b>Un Día Más Productivo</b> <br>
Si tienes muchas diligencias por hacer redacta una lista con todas las tareas que tienes pendientes para ese día, así evitarás que se te olviden y a medida que vayas tachando notarás que tu día es más productivo, porque te enfocarás en una cosa a la vez.
</p>
     
      </div>
    </div>
  </div>
</div>

	<div class="center">
  <div class="col-xs-6 col-sm-4">
    <div class="thumbnail">
      <img class="imagen" src="imgs/2.jpg">
      <div class="caption">
       
      <p><b>Celebre la Soledad</b> <br>
A veces la mejor compañía es la de uno mismo. Celebre la soledad con alegría. Prepare su comida favorita, abra una botella de vino, ponga su música preferida y brinde por lo bueno de la vida afirmando su propia valía sin complejos ni tristeza.
</p>
 
      </div>
    </div>
  </div>
</div>
	
		<div class="right">
  <div class="col-xs-6 col-sm-4">
    <div class="thumbnail">
      <img class="imagen" src="imgs/3.jpg" >
      <div class="caption">
        
      <p><b>Gente Positiva</b><br>
Mientras pases más tiempo compartiendo con gente positiva más rápido actuarás y pensarás de la misma forma. Reírse de vez en cuando, ayuda con el estrés
</p>
     
      </div>
    </div>
  </div>
</div>
</header> 	



	<footer>
	<div class="margen-arriba">
		<b><h3>Siguenos:   </h3></b><br> <a href="http://www.facebook.com"><img src="imgs/facebook-32.png"></a>
		<a href="http://www.twitter.com"><img src="imgs/twitter-32.png"></a>
		<a href="https://youtube.com/"><img src="imgs/instagram-32.png"></a>
		<a href="https://plus.google.com/"><img src="imgs/google+-32.png"></a>
		<a href="https://youtube.com/"><img src="imgs/YouTube.png"></a>
		<a href="https://hotmail.com/"><img src="imgs/email-32.png"></a>
		<a href="https://picasa.google.com/"><img src="imgs/picasa-32.png"></a>
		<a href="https://googleblog.blogspot.com/"><img src="imgs/rss-32.png"></a>
		<a href="https://skype.com/"><img src="imgs/skype-32.png"></a>
		<a href="https://www.tumblr.com/"><img src="imgs/tumblr-32.png"></a>
		</div>
	</footer>	


</body>

</html>