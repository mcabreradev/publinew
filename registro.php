<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/index.css">
        <title>PubliNew</title>
</head>
<body>

<nav>

<ul class="nav nav-tabs nav-justified no-list">
  <li role="presentation"><a href="index.php">Inicio</a></li>
  <li role="presentation" class="active"><a href="registro.php"><b>Registro</b></a></li>
  <li role="presentation"><a href="login.php">Login</a></li>

</ul>

 
</nav>
<section>


	
<form name="reg" method="POST" action="guardar.php">
<div class="col-md-4 justified derecha center-block text-center margen-arriba " >

<label for="nom">Usuario</label>

  <input type="text" name="us" id="us" value="" class="form-control" placeholder="Ingrese Nombre de Usuario" required>
<br>
<label for="nom">Contraseña</label>

 <input type="password" name="pw" id="pw" value="" class="form-control" placeholder="Ingrese Contraseña" required>

<br>
<label for="nom">Nombre</label>

            <input type="text" name="nom" id="nom" value="" class="form-control" placeholder="Ingrese Nombre Completo" required>

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
<div class="col-md-1 center-block margen-topmax" >
 <input type="submit" value="Procesar" class="btn btn-primary center-block">
 </div>
 



        
        </section>
       </form>






</body>
</html>