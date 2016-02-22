<h1>Categorías...</h1>

  <?php

$sqlQueryCat=mysql_query("SELECT publinew FROM sn_categorias",$con)or die(mysql_error());


echo "<ul>";


while($rowCat =mysql_fetch_array($sqlQueryCat)){
  echo "<li> <a href='?categoria=$rowCat[catCategoria]&id=$rowCat[cat_ID]'> $rowCat[catCategoria] </a> </li>";
}
echo "</ul>";
?>