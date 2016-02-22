<?php
  session_start();
  
  ?>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/index.css">

<?php  

include "conexionDB.php"; 
  
 
  $nombre="";
  $apellido="";
  

  $sql= "SELECT * FROM registro WHERE nombre = '$nombre' and apellido='$apellido'";
   
  $result=($sql);

?>
	<title>PubliNew</title>

</head>
<body>

<nav>
<ul class="nav nav-tabs nav-justified">
  <li role="presentation"><a href="index.php"><b>Inicio</b></a></li>
  <li role="presentation"><a href="add-noticia.php">Crear Articulo</a></li>
  <li role="presentation"><a href="generar_pdf.php">Generar PDF</a></li>
  <li role="presentation" class="active"><a href="usuariodate.php">Edita tus Datos</a></li>
  <li role="presentation"><a href="logout.php" >Cerrar Sesion</a></li>
</ul>
</nav>




                <h1 class="text-center login-title">Edita tus Datos</h1>

<form action="editardatos.php" method="POST">


<div class="col-md-4 justified derecha center-block text-center margen-arriba " >


<label for="nom">Contraseña</label>

 <input type="password" name="pw" id="pw" value="" class="form-control" placeholder="Ingrese Contraseña" required>

<br>
<label for="nom">Nombre</label>

            <input type="text" name="nom" id="nom" value="<?php echo $nombre; ?>" class="form-control" placeholder="Ingrese Nombre Completo" required>

<br>
        <label for="ape">Apellido</label>

            <input type="text" name="ape" id="ape" value="" class="form-control" placeholder="Ingrese Apellido Completo" required>
       
<br>
        <label for="ci" >Cedula
            <div class="form-inline">
              <select class="form-control" name="nac" id="nac">
                <option value="V">V</option>
                <option value="E">E</option>
              </select>
              <input type="int" name="ced" id="ci" value="" class="form-control cold- " placeholder="Ingrese Cedula" required><br>
 
</div>

    
    <label for="co">Email</label><br>
    <input type="text" name="co" class="form-control" placeholder="Correo Electronico">



</div>



<div class="col-md-4 justified derecha text-center margen-arriba  ">

<label for="di">Direccion</label><br>
  <input type="text" name="di" class="form-control" placeholder="Ubicacion">
<br>
<label for="nm">Numero Telefonico</label>
  <input type="text" name="nm" class="form-control" placeholder="Ejemp: +58 ###-####-###"> 
 <br>
 <div class="form-inline">
           <label>Fecha Nacimiento</label> <input type="date" name="fn"> <span class="glyphicon glyphicon-calendar"></span></label>
    
            <br>
             <label for="sex">Sexo</label>
            
            <div class="form-inline" >
            
              <input type="radio" name="sex" value="F" checked>Femenino &nbsp; <img src="imgs/girl4.png">&nbsp;
              
              <input type="radio" name="sex" value="M">Masculino &nbsp; <img src="imgs/man13.png">
            </div>

           <br>

         <label for="naci">Nacionalidad: </label>
         <select class="form-control" name="naci" id="naci">
                <option value="Ve">Venezolano/a</option>
                <option value="Ex">Extranjero/a</option>
              </select>
              <br><br>

<label for="resi">Tipo de Residencia: </label>
         <select class="form-control" name="resi" id="resi">
                <option>Residente</option>
                <option>Transeunte</option>
              </select>
<br><br>
              <label for="pro">Profesion</label>
  <input type="text" name="pro" class="form-control"> <br>
 

  </div>

<br>

  <button class="btn btn-lg btn-primary center-block " type="submit">
                   Actualizar</button>



</div>
</form>



</body>
</html>