<?php
include_once("includes/body.inc.php");
$id=intval($_POST['idChaves']);
$nome=addslashes($_POST['nomeChaves']);
$sql = "update chaves set chaveNome='".$nome."' where chaveId=".$id;
mysqli_query($con,$sql);
header("location:listachaves.php");
?>