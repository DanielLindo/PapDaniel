<?php
include_once("includes/body.inc.php");
$id=intval($_GET['id']);
$sql="select * from motas  where motaId=$id";
$result=mysqli_query($con,$sql);
$dadosProduto=mysqli_fetch_array($result);
top();
?>


<div class="container">
    <div class="services">
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading">
                    <h2>Chaves <em> de produtos</em></h2>
                    <img src="../<?php echo $dadosProduto['motaImagemURL']?>" width="200">
                    <h1><?php echo $dadosProduto['motaNome']?></h1>
                </div>
                <form action="confirmaNovoProdutoChaves.php" method="post" enctype="multipart/form-data">
                    <input id="idMota" type="hidden" value="<?php echo $id?>" name="id">
                    <input id="idProduto" type="hidden" value="<?php echo $id?>" name="telemovelChaveTelemovel">
                    <label>Chaves</label>
                    <select name="catChaveTelemovel" id="chaveCategoria">
                        <option value="-1">Escolha a chave...</option>
                        <?php
                        $sql="select * from chaves ";
                        $result=mysqli_query($con,$sql);
                        while ($dados=mysqli_fetch_array($result)){
                            ?>
                            <option value="<?php echo $dados['chaveId']?>"><?php echo $dados['chaveNome']?></option>
                            <?php
                        }


                        ?>
                    </select>
                    <br>
                    <!--<label>Chaves</label>
                    <select name="chaveChaveTelemovel" id="chave">

                    </select>-->
                    <br>
                    <label>Valor</label>
                    <input type="text" name="valorChaveTelemovel" class="w-50 p-3"><br>
                    <br>
                    <div class="container">
                        <button type="submit" class="btn btn-primary">Confirma alterações</button>
                        <table class='table table-striped' width="100%">

                            <tr>

                                <th>Chave</th>
                                <th>Valor</th>
                                <th colspan="2">opções</th>
                            </tr>
                            <?php
                            $sql="Select * from motaChaves inner join chaves on motaChaveChaveId = chaveId where motaChaveMotaId=".$id;
                            $result=mysqli_query($con,$sql);
                            while($dados=mysqli_fetch_array($result)){
                                ?>

                                <tr>
                                    <td><?php echo $dados['chaveNome']?></td>
                                    <td><?php echo $dados['motaChaveValor']?></td>

                                    <td><a class='btn btn-danger btn-xs' href="#" onclick="confirmaEliminaProdutoChave(<?php echo $dados['chaveId']?>,<?php echo $id?>);"><i class='fa fa-trash'></i>Eliminar</a></td>

                                </tr>
                                <?php
                            }
                            ?>


                        </table>



                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php
bottom();
?>

