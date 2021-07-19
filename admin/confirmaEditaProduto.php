<?php
include_once("includes/body.inc.php");

$id=intval($_POST['id']);
$nome=addslashes($_POST['nomeProduto']);
$imagem=$_FILES['imagemProduto']['name'];
$novoNome="images/".$imagem;
$preco=floatval($_POST['precoProduto']);
$catId=floatval($_POST['produtoCategoria']);
$destaque=addslashes($_POST['destaqueProduto']);


$sql="Update produtos set produtoNome='".$nome."', produtoPreco='".$preco."', produtoCategoriaId='".$catId."', produtoDestaque='".$destaque."'";

if($imagem!=''){
    $sql.=", produtoURL='images/".$imagem."'";
    copy($_FILES['imagemProduto']['tmp_name'],$novoNome);
}
echo $sql.=" where produtoId=".$id;
mysqli_query($con,$sql);

//header("location:listaProduto.php");
?>





