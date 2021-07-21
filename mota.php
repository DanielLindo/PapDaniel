<?php
include_once("includes/body.inc.php");
top();
$idMota=intval($_GET['idMota']);
 $sql="select * from  motas inner join marcas on marcaId=motaMarcaId inner join classificacoes on classificacaoId=motaClassificacaoId";
echo $sql.=" where motaId=".$idMota;
$result = mysqli_query($con,$sql);
 mysqli_affected_rows($con);
$dados = mysqli_fetch_array($result);

?>
<!-- Page Content -->
<div class="page-heading about-heading header-text" style="background-image: url(assets/images/heading-6-1920x500.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="text-content">
                    <h2><?php echo $dados['motaNome']?></h2>
                    <h4><?php echo $dados['motaPreco']?>€</h4>

                </div>
            </div>
        </div>
    </div>
</div>



<div class="products">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div>
                    <img src="<?php echo $dados['motaImagemURL']?>"alt="" class="img-fluid wc-image"></td>
                </div>
                <br>
                <div class="row bg">
                    <div class="col-sm-4 col-6">
                        <div>

                        </div>
                        <br>
                    </div>
                    <div class="col-sm-4 col-6">
                        <div>
                        </div>
                        <br>
                    </div>
                    <div class="col-sm-4 col-6">
                        <div>

                        </div>
                        <br>
                    </div>

                    <div class="col-sm-4 col-6">
                        <div>

                        </div>
                        <br>
                    </div>
                    <div class="col-sm-4 col-6">
                        <div>

                        </div>
                        <br>
                    </div>
                    <div class="col-sm-4 col-6">
                        <div>

                        </div>
                        <br>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <form action="#" method="post" class="form">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">

                        </li>

                        <li class="list-group-item">
                            <div class="clearfix">
                                <span class="pull-left">Fabricante</span>

                                <strong class="pull-right"><?php echo $dados['marcaNome']?></strong>
                            </div>
                        </li>

                        <li class="list-group-item">
                            <div class="clearfix">
                                <span class="pull-left"> Ano</span>

                                <strong class="pull-right"><?php echo $dados['motaAno']?></strong>
                            </div>
                        </li>

                        <li class="list-group-item">
                            <div class="clearfix">
                                <span class="pull-left"> Modelo</span>

                                <strong class="pull-right"><?php echo $dados['motaModelo']?></strong>
                            </div>
                        </li>


                        <li class="list-group-item">
                            <div class="clearfix">
                                <span class="pull-left">Combustível</span>

                                <strong class="pull-right"><?php echo $dados['motaCombustivel']?></strong>
                            </div>
                        </li>

                        <li class="list-group-item">
                            <div class="clearfix">
                                <span class="pull-left">Potência</span>

                                <strong class="pull-right"><?php echo $dados['motaCilindrada']?></strong>
                            </div>
                        </li>


                        <li class="list-group-item">
                            <div class="clearfix">
                                <span class="pull-left">mudanças</span>

                                <strong class="pull-right"><?php echo $dados['motaMudanca']?></strong>
                            </div>
                        </li>

                        <li class="list-group-item">
                            <div class="clearfix">
                                <span class="pull-left">caixa de mudanças</span>

                                <strong class="pull-right"><?php echo $dados['motaCaixa']?></strong>
                            </div>
                        </li>

                    </ul>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Discrições da mota</h2>
                <div class="left-content">

                    <div class="content">
                        <table class="table table-sm table-spec">
                            <tbody>
                            <tr>
                                <th width="40%">Especificação</th>
                                <th>Valor</th>
                            </tr>
                            <?php
                            $sql="select * from motas inner join motachaves on motaId=motaChaveMotaId";
                            $sql.=" inner join chaves on chaveId=motaChaveChaveId";
                            $sql.=" where motaId=".$idMota;
                            $res=mysqli_query($con,$sql);
                            while($dados=mysqli_fetch_array($res)){
                            ?>
                            <tr>
                                <td class="title"><?php echo $dados['chaveNome']?></td>
                                <td class="result"><?php echo $dados['motaChaveValor']?></td>
                            </tr>
                            <?php
                            }
                            ?>


                            </tbody>
                        </table>
                    </div>
                </div>
            </div>


        </div>
    </div>
</div>

<?php
bottom();
?>
