<?php
include_once("includes/body.inc.php");
$id=intval($_POST['idClassificacao']);
$nome=addslashes($_POST['nomeClassificacao']);
$sql = "update classificacao set classificacaoNome='".$nome."' where classificacaoId=".$id;
mysqli_query($con,$sql);
header("location:listaTipos.php");
?>