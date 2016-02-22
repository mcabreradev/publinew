<?php



function conectar() {
    $host = "localhost";
    $user = "root";
    $password = "noname";
    $database = "publinew";
    try{
        $con = new mysqli($host, $user, $password, $database);
        return $con;
    }  catch (Exception $e){
        echo $e->getMessage();
    }
}

function ejecutar($query) {
    $con = conectar();
    if ($con) {
        $result = $con->query($query);
        $con->close();
        return $result;
    }else{
        echo 'Ha ocurrido un error en la base de datos';
    }
}


?>