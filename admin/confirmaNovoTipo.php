<?php
include_once("includes/body.inc.php");
$nome=addslashes($_POST['nomeClassificacao']);
$sql = "insert into clasificacoes values(0,'".$nome."')";
mysqli_query($con,$sql);
header("location:listaTipo.php");
?>