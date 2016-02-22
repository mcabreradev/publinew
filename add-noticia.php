<?php session_start(); ?>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="css/index.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    
    <title>PubliNew</title>
</head>
<body>

<nav>
<ul class="nav nav-tabs nav-justified">
  <li role="presentation"><a href="index.php"><b>Inicio</b></a></li>
  <li role="presentation" class="active"><a href="add-noticia.php">Crear Articulo</a></li>
  <li role="presentation"><a href="generar_pdf.php">Generar PDF</a></li>
  <li role="presentation"><a href="usuariodate.php">Edita tus Datos</a></li>
  <li role="presentation"><a href="logout.php" >Cerrar Sesion</a></li>
</ul>
</nav>

<div class="container">
    <div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4 margen-arriba">



 




<?php  

include('conexionDB.php');

 $host = "localhost";
 $user = "root";
 $password = "noname";
 $database = "publinew";
?>
<?php
 if(isset($_POST['enviar']) && $_POST['enviar'] == 'Enviar'){  

   if(!empty($_POST['notTitulo']) && $_POST['notTexto'] && $_POST['notCategoriaID']){   

    $notTitulo = $_POST['notTitulo'];     $notTexto = $_POST['notTexto'];     $notCategoriaID = $_POST['notCategoriaID'];    

    $sqlInsertNot = mysql_query("INSERT INTO sn_noticias (notTitulo, notTexto, notCategoriaID)                

     VALUES ('$notTitulo', '$notTexto', '$notCategoriaID')", $conexionDB)     or die(mysql_error());  

         echo "Los datos fueron gurdados correctamente";   }else{   

            echo "Debe llenar todos los campos del formulario";   } } ?> 

             <form name="noticia" action="<?php $_SERVER['PHP_SELF']; ?>" method="post">   

             <p> Título de la Noticia<br /> 

             <input type="text" name="notTitulo" size="50" /> </p>   

             <p> Texto de la Noticia<br /> 

             <textarea name="notTexto" rows="10" cols="50"></textarea> </p>   

             <p> Categoría<br />   <select name="notCategoriaID">     
             <option value="">Escoger de la Lista</option> <?php 

              $sqlQueryCat = mysql_query("SELECT * FROM sn_categorias", $conexionDB) or die(mysql_error()); 

               while($rowCat = mysql_fetch_array($sqlQueryCat)){   

                echo "<option value='$rowCat[cat_ID]'>$rowCat[catCategoria]</option>";   } ?>   

               </form>


  	             ?>   
					 </select>
            <button><a href="add-categoria.php">Agregar Categoria</a></button>

           <br>
           <input class="btn  btn-primary margen-arriba " type="submit" name="enviar" value="Enviar" />
		</div>
	</div>
</div>
 

	</form>


 
  	            

  	     


</body>
</html>