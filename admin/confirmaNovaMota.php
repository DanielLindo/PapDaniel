<?php
include_once ("includes/body.inc.php");

$nome=$_POST['nomeMota'];
$preco=floatval($_POST['precoMota']);
$modelo=addslashes($_POST['modeloMota']);
$marcaId=floatval($_POST['motaMarca']);
$cilindrada=floatval($_POST['cilindradaMota']);
$combustivel=addslashes($_POST['motaCombustivel']);
$mudanca=$_POST['caixaTipo'];
$caixa=floatval($_POST['motaCaixa']);
$imagem=$_FILES['imagemMota']['name'];
$novoNome="../images/".$imagem;
$ano=floatval($_POST['anoMota']);
$destaque=addslashes($_POST['destaqueMota']);
copy($_FILES['imagemMota']['tmp_name'],$novoNome);



$sql="insert into motas (motaNome,motaMarcaId,motaPreco,motaCilindrada,motaImagemURL,motaAno,motaCombustivel,motaCaixa,motaMudanca,motaDestaque, motaModelo)
 values('".$nome."','".$marcaId."','".$preco."','".$modelo."','".$cilindrada."','images/".$imagem."','".$ano."','".$combustivel."','".$mudanca."','".$caixa."','".$destaque."')";

mysqli_query($con,$sql);
echo ($sql);
//header("location:listaMotas.php");
?>





