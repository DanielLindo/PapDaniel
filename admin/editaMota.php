<?php
include_once ("includes/body.inc.php");
$id=intval($_GET['id']);

$sql="select * from motas where motaId=".$id;
$res=mysqli_query($con,$sql);
$dados=mysqli_fetch_array($res);
top();
?>
<div class="services">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading ">
                    <h2 class="text-dark">Nova<em> Mota</em></h2>

                </div>
                <form action="confirmaEditaMota.php" method="post" enctype="multipart/form-data">
                    <label>Nome: </label>

                    <input type="text" name="nomeMota" value="<?php echo $dados['motaNome']?>"><br>


                    <br>

                    <label>Imagem: </label>
                    <input type="file" name="imagemMota"><br>
                    <br><br> <img src="../<?php echo $dados['motaImagemURL']?>" width="220">

                    <br>
                    <br>
                    <label>Preço: </label>
                    <input type="text" name="precoMota" value="<?php echo $dados['motaPreco']?>">
                    <br>
                    <br>
                    <label>Categoria</label>
                    <br>
                    <select name="motaCategoria">
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
                    <br>
                    <div class="form-group">
                        <label for="motaCaixa">Caixa de mudanças: </label>
                        <input type="number" class="form-control" id="motaCaixa" name="motaCaixa">
                    </div><br>


                    <div class="form-group">
                            <label for="motaAno">Ano: </label>
                            <input type="text" class="form-control" id="motaAno" name="anoMota">
                        </div><br>

                        <div class="form-group">
                            <label for="modeloMota">Modelo: </label>
                            <input type="text" class="form-control" id="motaModelo" name="modeloMota"><br>
                        </div><br>
                        <br>
                    <br>
                    <div class="form-group">
                        <label for="motaCilindrada">Cilindrada: </label>
                        <input type="text" class="form-control" id="motaCilindrada" name="cilindradaMota">
                    </div><br>

                    <br>
                    <div class="form-group">
                        <label for="caixaTipo">Tipo de mudanças: </label><br>
                        <small><input checked type="radio"  name="caixaTipo" value="manual">
                            <label for="gasolina">Manual</label>
                            <input type="radio" name="caixaTipo" value="automatica">
                            <label for="gasoleo">Automática</label><br></small>
                    </div>

                    <div class="form-group">
                        <label for="motaCombustivel">Combustível: </label><br>
                        <small><input checked type="radio" id="sim" name="motaCombustivel" value="gasolina">
                            <label for="gasolina">gasolina</label>
                            <input type="radio" id="nao" name="motaCombustivel" value="gasoleo">
                            <label for="gasoleo">gasoleo</label><br></small>
                    </div><br>
                    <br>
                    <br>

                    <label>Destaque</label>
                    <p><input type="radio" name="destaqueMota" value="sim"
                            <?php if( $dados['motaDestaque'] == 'sim') echo " checked ";?>
                        >&nbsp;Sim</p>
                    <p><input type="radio" name="destaqueProduto" value="nao"
                            <?php if( $dados['motaDestaque'] == 'nao') echo " checked ";?>
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


