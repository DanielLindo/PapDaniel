<?php
include_once ("includes/body.inc.php");
$idMota=intval($_GET['id']);
$sql="select * from motas where motaId=".$idMota;
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

                    <br><label>Preço: </label>
                    <input type="text" name="precoMota" value="<?php echo $dados['motaPreco']?>">
                    <br>
                    <br><label>Modelo: </label>
                    <input type="text" name="modeloMota" value="<?php echo $dados['motaModelo']?>">
                    <br>
                    <br>
                    <label>Imagem: </label>
                    <input type="file" name="imagemMota"><br>
                    <br><br> <img src="../<?php echo $dados['motaImagemURL']?>" width="220">

<br>
                    <br><label>Ano: </label>
                    <input type="text" name="anoMota" value="<?php echo $dados['motaAno']?>">
                    <br>
                    <br>

                    <select name="classificacaoMarca"class="form-control form-control-lg">
                        <option value="-1">Escolha a classificação da mota...</option>
                        <?php
                        $sql="select * from tipos inner join classificacoes on tipoId=classificacaoTipoId ";
                        $sql.="order by tipoId ";
                        $result=mysqli_query($con,$sql);
                        while ($dadosEs=mysqli_fetch_array($result)){
                            ?>
                            <option value="<?php echo $dadosEs['classificacaoId']?>"><?php echo $dadosEs['tipoNome'].'-'.$dadosEs['classificacaoNome']?></option>
                            <?php
                        }

                        ?>

                    </select>

<br>


                    <div class="form-group">
                        <label for="motaCombustivel">Combustível: </label><br>
                        <small><input checked type="radio" id="sim" name="motaCombustivel" value="gasolina">
                            <label for="gasolina">gasolina</label>
                            <input type="radio" id="nao" name="motaCombustivel" value="gasoleo">
                            <label for="gasoleo">gasoleo</label><br></small>
                    </div><br>
                    <br>
                    <br>
                    <div class="form-group">
                        <button type="submit" class="btn btn-success">Editar</button>


                </form>
            </div>

        </div>
        </div>
    </div>
</div>
</div>
<?php
bottom();
?>


