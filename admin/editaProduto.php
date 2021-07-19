<?php
include_once ("includes/body.inc.php");
$id=intval($_GET['id']);

$sql="select * from produtos where produtoId=".$id;
$res=mysqli_query($con,$sql);
$dados=mysqli_fetch_array($res);
top();
?>
<div class="services">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading ">
                    <h2 class="text-dark">Novo<em> Produto</em></h2>

                </div>
                <form action="confirmaEditaProduto.php" method="post" enctype="multipart/form-data">
                    <label>Nome: </label>

                    <input type="text" name="nomeProduto" value="<?php echo $dados['produtoNome']?>"><br>


                    <br> <img src="../<?php echo $dados['produtoURL']?>" width="220">


                    <label>Imagem: </label>
                    <input type="file" name="imagemProduto"><br>
                    <br>

                    <br>
                    <label>Preço: </label>
                    <input type="text" name="precoProduto" value="<?php echo $dados['produtoPreco']?>">
                    <br>
                    <br>
                    <label>Categoria</label>
                    <select name="produtoCategoria">
                        <option value="-1">Escolha a categoria...</option>
                        <?php
                        $sql="select * from categorias order by categoriaNome";
                        $result=mysqli_query($con,$sql);
                        while ($dadosCat=mysqli_fetch_array($result)){
                            ?>
                            <option value="<?php echo $dadosCat['categoriaId']?>"
                                <?php if( $dados['produtoCategoriaId'] == $dadosCat['categoriaId']) echo " selected ";?>

                            ><?php echo $dadosCat['categoriaNome']?></option>
                            <?php
                        }


                        ?>
                    </select>
                    <br>
                    <label>Destaque</label>

                    <p><input type="radio" name="destaqueProduto" value="sim"
                            <?php if( $dados['produtoDestaque'] == 'sim') echo " checked ";?>
                        >&nbsp;Sim</p>
                    <p><input type="radio" name="destaqueProduto" value="nao"
                            <?php if( $dados['produtoDestaque'] == 'nao') echo " checked ";?>
                        >&nbsp;Não</p>
                    <br>
                    <input type="hidden" name="id" value="<?php echo $id?>">
                     <button type="submit" class="btn btn-primary">Altera</button><br>
                </form>
            </div>

            <?php
            Bottom();
            ?>
            </div>
        </div>
    </div>
</div>
<?php
bottom();
?>



