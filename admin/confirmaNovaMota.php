<?php
include_once ("includes/body.inc.php");

$nome=$_POST['nomeMota'];
$marcaId=intval($_POST['motaMarca']);
$preco=floatval($_POST['precoMota']);
$modelo=addslashes($_POST['modeloMota']);
$cilindrada=floatval($_POST['cilindradaMota']);
$combustivel=addslashes($_POST['motaCombustivel']);
$mudanca=$_POST['caixaTipo'];
$caixa=floatval($_POST['motaCaixa']);
$imagem=$_FILES['imagemMota']['name'];
$novoNome="../images/".$imagem;
$ano=floatval($_POST['anoMota']);
$destaque=addslashes($_POST['destaqueMota']);
$classificacaoId=intval($_POST['classificacaoMarca']);
copy($_FILES['imagemMota']['tmp_name'],$novoNome);



$sql="insert into motas (motaNome,motaMarcaId,motaPreco, motaModelo,motaCilindrada,motaImagemURL,motaAno,motaCombustivel,motaCaixa,motaMudanca,motaDestaque, motaClassificacaoId)
 values('".$nome."','".$marcaId."','".$preco."','".$modelo."','".$cilindrada."','images/".$imagem."','".$ano."','".$combustivel."','".$caixa."','".$mudanca."','".$destaque."',".$classificacaoId.")";

mysqli_query($con,$sql);
header("location:listaMotas.php");
?>





