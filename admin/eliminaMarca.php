<?php
include_once ("includes/body.inc.php");
$id=intval($_GET['id']);
echo $sql= "delete from marcas where marcaId=".$id;
mysqli_query($con,$sql);
header("location:listaMarcas.php");


?>