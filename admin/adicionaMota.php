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
                        <label for="motaImagemUrl">Imagem: </label>
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
                        <label for="motaCaixa">Tipo de mudanças: </label><br>
                        <small><input checked type="radio"  name="caixaTipo" value="manual">
                            <label for="gasolina">Manual</label>
                            <input type="radio" name="caixaTipo" value="automatica">
                            <label for="gasoleo">Automática</label><br></small>
                    </div>
                    <div class="form-group">
                        <label for="motaCaixa">Caixa de mudanças: </label>
                        <input type="number" class="form-control" id="motaCaixa" name="caixaNum">
                    </div><br>

                    <div class="form-group">
                        <label for="motaCaixa">Combustível: </label><br>
                        <small><input checked type="radio" id="sim" name="combustivel" value="gasolina">
                            <label for="gasolina">gasolina</label>
                            <input type="radio" id="nao" name="combustivel" value="gasoleo">
                            <label for="gasoleo">gasoleo</label><br></small>
                    </div><br>

                    <select name="marcaMota"class="form-control form-control-lg">
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
                        <label for="motaCaixa">Destaque: </label><br>
                        <small><input checked type="radio" id="sim" name="destaque" value="sim">
                            <label for="gasolina">Sim</label>
                            <input type="radio" id="nao" name="destaque" value="nao">
                            <label for="gasoleo">Não</label><br></small>
                    </div><br>
                    <div class="form-group">
                        <button type="submit" class="btn btn-success">Adicionar</button>
                    </div>

                </form>
            </div>

            <?php
            Bottom();
            ?>




