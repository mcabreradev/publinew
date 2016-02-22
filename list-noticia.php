<?php 

if(isset($_GET['id']) && $_GET['categoria']){
  
  $cat_ID = $_GET['id'];
  $categoria = $_GET['categoria'];
  $clausula = "WHERE notCategoriaID = '$cat_ID'";
  

  $titulo = "Noticias en la categoria $categoria"; 
}else{
  
  $titulo = "Todas las noticias"; 
}

$sqlQueryNot = mysql_query("SELECT notTitulo, notTexto FROM sn_noticias $clausula", $con) or die(mysql_error());
echo "<h1>$titulo</h1>";

while($rowNot = mysql_fetch_array($sqlQueryNot)){
  echo "<h1>$rowNot[notTitulo]</h1>";
  echo nl2br($rowNot['notTexto']);
}
?>