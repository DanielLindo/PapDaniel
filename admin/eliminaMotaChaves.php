
<?php
include_once ("includes/body.inc.php");

$chaveId=intval($_GET['chaveId']);
$motaId=intval($_GET['motaId']);
$sql= "delete from motaChaves where motaChaveChaveId=".$chaveId." and motaChavemotaId=".$motaId;
mysqli_query($con,$sql);
header("location:produtoChaves.php?id=$motaId");
?>