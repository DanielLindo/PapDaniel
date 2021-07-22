<?php
include_once("includes/body.inc.php");
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$idMota=intval($_POST['']);

$nome=addslashes($_POST['nomeMota']);
$modelo=addslashes($_POST['modeloMota']);
$imagem=$_FILES['imagemMota']['name'];
$novoNome="../images/".$imagem;
$preco=floatval($_POST['precoMota']);
$combustivel=addslashes($_POST['motaCombustivel']);
$classificacaoId=intval($_POST['classificacaoMarca']);


$sql = "update motas set motaNome='".$nome."', set motaModelo='".$modelo."'set motaPreco='".$preco."'set motaCombustivel='".$combustivel."'set motaClassificacaoId='".$classificacaoId."' where motaId=".$idMota;

    $sql.=" where motaId=".$idMota;
    mysqli_query($con,$sql);
    echo ($sql);
//header("location:listaMotas.php");
?>