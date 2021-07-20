<?php
include_once ("includes/body.inc.php");
top();
?>
<div class="services">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading">
                    <h2>Nova<em> Mota</em></h2>

                </div>
                <form action="confirmaNovaMota.php" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="motaNome">Nome: </label>
                        <input type="text" class="form-control" id="MotaNome" name="nomeMota">
                    </div><br>
                    <div class="form-group">
                        <label for="motaPreco">Preco: </label>
                        <input type="number" class="form-control" id="motaPreco" name="precoMota"><br>
                    </div><br>
                    <div class="form-group">
                        <label for="modeloMota">Modelo: </label>
                        <input type="text" class="form-control" id="motaModelo" name="modeloMota"><br>
                    </div><br>
                    <div class="form-group">
                        <label for="imagemMota">Imagem: </label>
                        <input type="file" class="form-control" id="motaImagemUrl" name="imagemMota">
                    </div><br>
                    <div class="form-group">
                        <label for="motaCilindrada">Cilindrada: </label>
                        <input type="text" class="form-control" id="motaCilindrada" name="cilindradaMota">
                    </div><br>
                    <div class="form-group">
                        <label for="motaAno">Ano: </label>
                        <input type="text" class="form-control" id="motaAno" name="anoMota">
                    </div><br>
                    <div class="form-group">
                        <label for="caixaTipo">Tipo de mudanças: </label><br>
                        <small><input checked type="radio"  name="caixaTipo" value="manual">
                            <label for="gasolina">Manual</label>
                            <input type="radio" name="caixaTipo" value="automatica">
                            <label for="gasoleo">Automática</label><br></small>
                    </div>
                    <div class="form-group">
                        <label for="motaCaixa">Caixa de mudanças: </label>
                        <input type="number" class="form-control" id="motaCaixa" name="motaCaixa">
                    </div><br>

                    <div class="form-group">
                        <label for="motaCombustivel">Combustível: </label><br>
                        <small><input checked type="radio" id="sim" name="motaCombustivel" value="gasolina">
                            <label for="gasolina">gasolina</label>
                            <input type="radio" id="nao" name="motaCombustivel" value="gasoleo">
                            <label for="gasoleo">gasoleo</label><br></small>
                    </div><br>

                    <select name="motaMarca"class="form-control form-control-lg">
                        <option value="-1">Escolha a marca...</option>
                        <?php
                        $sql="select * from marcas ";
                        $result=mysqli_query($con,$sql);
                        while ($dados=mysqli_fetch_array($result)){
                            ?>
                            <option value="<?php echo $dados['marcaId']?>"><?php echo $dados['marcaNome']?></option>
                            <?php
                        }

                        ?>

                    </select>
                    <br>


                    <div class="form-group">
                        <label for="destaqueMota">Destaque: </label><br>
                        <small><input checked type="radio" id="sim" name="destaqueMota" value="sim">
                            <label for="gasolina">Sim</label>
                            <input type="radio" id="nao" name="destaqueMota" value="nao">
                            <label for="gasoleo">Não</label><br></small>
                    </div><br>

                    <select name="classificacaoMarca"class="form-control form-control-lg">
                        <option value="-1">Escolha a classificação da mota...</option>
                        <?php
                        $sql="select * from tipos inner join classificacoes on tipoId=classificacaoTipoId ";
                        $sql.="order by tipoId ";
                        $result=mysqli_query($con,$sql);
                        while ($dados=mysqli_fetch_array($result)){
                            ?>
                            <option value="<?php echo $dados['classificacaoId']?>"><?php echo $dados['tipoNome'].'-'.$dados['classificacaoNome']?></option>
                            <?php
                        }

                        ?>

                    </select>
                    <br>

                    <div class="form-group">
                        <button type="submit" class="btn btn-success">Adicionar</button>
                    </div>


                </form>
            </div>

            <?php
            Bottom();
            ?>




