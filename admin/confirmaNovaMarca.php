<?php
include_once ("includes/body.inc.php");

$nome=$_POST['nomeMarca'];

$sql="insert into marcas(marcaNome) values('".$nome."');";
mysqli_query($con,$sql);
header("location:listaMarcas.php");
?>

