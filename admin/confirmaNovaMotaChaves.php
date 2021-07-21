<?php
include_once ("includes/body.inc.php");



$motaId=intval($_POST['idMota']);
$chave=intval($_POST['chaveMota']);
$valor=addslashes($_POST['valorChaveMota']);

 $sql="insert into motaChaves(motaChaveMotaId, motaChaveChaveId,  motaChaveValor) values(".$motaId.",".$chave.",'".$valor."');";
mysqli_query($con,$sql);
header("location:produtoChaves.php?id=$motaId");

?>