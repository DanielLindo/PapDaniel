<?php
include_once("includes/body.inc.php");
$id=intval($_POST['idMota']);
$nome=addslashes($_POST['nomeMota']);
$sql = "update motas set motaNome='".$nome."' where motaId=".$id;
mysqli_query($con,$sql);
header("location:listaMotas.php");
?>