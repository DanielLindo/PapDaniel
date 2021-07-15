<?php
include_once("includes/body.inc.php");
$id=intval($_POST['idMarca']);
$nome=addslashes($_POST['nomeMarca']);
$sql = "update marcas set marcaNome='".$nome."' where marcaId=".$id;
mysqli_query($con,$sql);
header("location:listaMarcas.php");
?>