<?php
include_once ("includes/body.inc.php");

echo "<h1>Adicionar nova marca</h1>";
echo "<form action=\"confirmaNovaMarca.php\" method=\"post\" enctype=\"multipart/form-data\">";
echo "<label>Nome: </label>";
echo "<input type=\"text\" name=\"nomeMarca\"><br>";
echo "<input type=\"Submit\" value=\"Adiciona\"><br>";

?>


