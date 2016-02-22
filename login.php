
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="css/index.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<title>Bienvenidos a PubliNew</title>
</head>
<body>

<nav>
<ul class="nav nav-tabs nav-justified">
  <li role="presentation" ><a href="index.php">Inicio</a></li>
  <li role="presentation" ><a href="registro.php">Registro</a></li>
  <li role="presentation" class="active"><a href="login.php"><b>Login</b></a></li>
  
</ul>
</nav>


<div class="container">
    <div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4">
            <h1 class="text-center login-title">Ingresa</h1>
            <div class="account-wall">
                
                <form class="form-signin" name="log" method="POST" action="logpru.php">
                <input type="text" class="form-control" name="usuario" placeholder="Usuario" required autofocus><br>
                <input type="password" class="form-control" name="pasword" placeholder="Contraseña" required><br>
                <button class="btn btn-lg btn-primary btn-block" type="submit">
                    Ingresar</button>  <br>
                
                </form>
            </div>
            <a href="Registro.php" class="text-center form-control">Crear Cuenta </a>
        </div>
    </div>
</div>


</body>
</html>