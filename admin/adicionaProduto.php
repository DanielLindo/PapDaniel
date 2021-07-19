<?php
include_once ("includes/body.inc.php");
top();
?>
<div class="services">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading">
                    <h2>Novo<em> Produto</em></h2>

                </div>
                <form action="confirmaNovoProduto.php" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="produtoNome">Nome: </label>
                        <input type="text" class="form-control" id="produtoNome" name="nomeProduto">
                    </div><br>
                    <div class="form-group">
                        <label for="produtoCategoria">Preco: </label>
                        <input type="number" class="form-control" id="produtoPreco" name="precoProduto"><br>
                    </div><br>


                    <select name="produtoCategoria">
                        <option value="-1">Escolha a categoria...</option>
                        <?php
                        $sql="select * from categorias order by categoriaNome";
                        $result=mysqli_query($con,$sql);
                        while ($dados=mysqli_fetch_array($result)){
                            ?>
                            <option value="<?php echo $dados['categoriaId']?>"><?php echo $dados['categoriaNome']?></option>
                            <?php
                        }

                        ?>
                    </select>
                    <br>
                    <br>
                    <br>
                    <div class="form-group">
                        <label for="produtoURL">Imagem: </label>
                        <input type="file" class="form-control" id="produtoImagemUrl" name="imagemProduto">
                    </div><br>

                    <br>
                    <label>Destaque</label>

                    <p><input type="radio" name="destaqueProduto" value="sim" >&nbsp;Sim</p>
                    <p><input type="radio" name="destaqueProduto" value="nao" checked>&nbsp;Não</p>

                    <br>
                    <input type="Submit" value="Adiciona"><br>
                </form>
            </div>

            <?php
            Bottom();
            ?>




