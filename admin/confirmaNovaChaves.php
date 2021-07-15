<?php
include_once("includes/body.inc.php");
$nome=addslashes($_POST['nomeChaves']);
$sql = "insert into chaves values(0,'".$nome."')";
mysqli_query($con,$sql);
header("location:listachaves.php");
?>