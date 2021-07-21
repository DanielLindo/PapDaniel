<?php
include_once("includes/body.inc.php");
$id=intval($_POST['idMota']);
$nome=addslashes($_POST['nomeMota']);
$dados=addslashes($_POST['caixaTipo']);
$sql = "update motas set motaNome='".$nome."''".$dados."' where motaId=".$id;
mysqli_query($con,$sql);
header("location:listaMotas.php");
?>