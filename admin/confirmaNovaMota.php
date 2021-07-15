<?php
include_once ("includes/body.inc.php");

$nome=$_POST['nomeMota'];

$sql="insert into motas(motaNome) values('".$nome."');";
mysqli_query($con,$sql);
header("location:index.php");
?>

