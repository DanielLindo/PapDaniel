<?php
include_once("includes/body.inc.php");
$id=intval($_POST['idCategoria']);
$nome=addslashes($_POST['nomeCategoria']);
$sql = "update categorias set categoriaNome='".$nome."' where categoriaId=".$id;
mysqli_query($con,$sql);
header("location:listaCategorias.php");
?>