<?php
  session_start();
  ?>

<html>
<head>

<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="css/index.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    
    <title>PubliNew</title>
</head>
<body>


<?php 

 include ("conexionDB.php");

if(isset($_POST['enviar']) && $_POST['enviar'] == 'Enviar'){   

    if(!empty($_POST['catCategoria'])){  

    $catCategoria = $_POST['catCategoria'];     

     $sqlInsertCat = mysql_query("INSERT INTO sn_categorias (catCategoria)               

       VALUES ('$catCategoria')", $con)     or die(mysql_error());    
         echo "Los datos fueron gurdados correctamente";   }else{    

            echo "Debe llenar el formulario";   } } ?>  
 
 <div class="jumbotron text-center">
 <form name="categoria" action="<?php $_SERVER['PHP_SELF'] ?>" method="post">  

  <p> Nueva Categoría<br />

  <input type="text" name="catCategoria" />
  <br><br>   
    


    <input class="btn  btn-primary  " type="submit" name="enviar" value="Enviar" /> </p> </form>

</body>
</html>