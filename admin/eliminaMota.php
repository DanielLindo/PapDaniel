<?php
include_once ("includes/body.inc.php");
$id=intval($_GET['id']);
echo $sql= "delete from motas where motaId=".$id;
mysqli_query($con,$sql);
header("location:listaMota.php");


?>