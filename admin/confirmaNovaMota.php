<?php
include_once ("includes/body.inc.php");

$nome=$_POST['nomeMota'];
$preco=floatval($_POST['precoMota']);
$marcaId=floatval($_POST['marcaMota']);
$cilindrada=floatval($_POST['cilindradaMota']);
$combustivel=addcslashes($_POST['combustivelMota']);
$mudanca=addcslashes($_POST['mundacaMota']);
$caixa=floatval($_POST['caixaMota']);
$imagem=$_FILES['imagemMota']['name'];
$novoNome="../images/".$imagem;
$ano=floatval($_POST['anoMota']);
$destaque=addslashes($_POST['destaqueMota']);
copy($_FILES['imagemMota']['tmp_name'],$novoNome);



$sql="insert into motas (motaNome,motaMarcaId,motaPreco,motaCilindrada,motaImagemURL,motaAno,motaCombustivel,motaCaixa,motaMudanca,motaDestaque)
 values('".$nome."','".$marcaId."','".$preco."','".$cilindrada."','images/".$imagem."','".$ano."','".$combustivel."','".$mudanca."','".$caixa."','".$destaque."');";


mysqli_query($con,$sql);
//header("location:listaMotas.php");
?>





