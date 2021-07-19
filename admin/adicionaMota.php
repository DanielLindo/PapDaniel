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
                    <select name="marcaMota">
                        <option value="-1">Escolha a marca...</option>
                        <?php
                        $sql="select * from motas where motaCombustivel";
                        $result=mysqli_query($con,$sql);
                        while ($dados=mysqli_fetch_array($result)){
                            ?>
                            <option value="<?php echo $dados['marcaId']?>"><?php echo $dados['marcaNome']?></option>
                            <?php
                        }

                        ?>
                    </select>
                    <br>
                    <br>
                    <br>
                    <select name="marcaMota">
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
                    <br>
                    <div class="form-group">
                        <label for="motaCaixa">Caixa: </label>
                        <input type="number" class="form-control" id="motaCaixa" name="caixaMota">
                    </div><br>

                    <select name="marcaMota">
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
                        <br>
                    </select>
                    <br>
                    <br>
                    <br>
                    <label>Destaque</label>

                    <p><input type="radio" name="destaqueMota" value="sim" >&nbsp;Sim</p>
                    <p><input type="radio" name="destaqueMota" value="nao" >&nbsp;Não</p>

                    <br>
                    <input type="Submit" value="Adiciona"><br>
                </form>
            </div>

            <?php
            Bottom();
            ?>




