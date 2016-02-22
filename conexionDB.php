<?php

$host = 'localhost';
$user = 'root';
$password = 'noname';
$database = 'publinew';

$con = mysql_connect($host, $user, $password);
if (!$con) {
    die('No se conecto a la BD: '.mysql_error());
}

//esta funcion selecciona la base de datos a utilizar
$bd = mysql_select_db($database);
if (!$bd) {
    die('No se encontro la BD seleccionada');
}

function conectar()
{
    try {
        $con = new mysqli($host, $user, $password, $database);

        return $con;
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

function ejecutar($query)
{
    $con = conectar();
    if ($con) {
        $result = $con->query($query);
        $con->close();

        return $result;
    } else {
        echo 'Ha ocurrido un error en la base de datos';
    }
}
