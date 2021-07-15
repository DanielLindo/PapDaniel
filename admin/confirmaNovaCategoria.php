<?php
include_once("includes/body.inc.php");
$nome=addslashes($_POST['nomeCategoria']);
$sql = "insert into categorias values(0,'".$nome."')";
mysqli_query($con,$sql);
header("location:listaCategorias.php");
?>