<?php
include_once ("includes/body.inc.php");



$chave=intval($_POST['id']);
$produto=intval($_POST['telemovelChaveTelemovel']);
$valor=addslashes($_POST['valorChaveTelemovel']);

echo $sql="insert into motaChaves(motaChaveMotaId, motaChaveChaveId,  motaChaveValor) values(".$chave.",".$produto.",'".$valor."');";
mysqli_query($con,$sql);
//header("location:produtosChave.php?id=$produto");

?>