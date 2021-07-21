<?php
include_once ("includes/config.inc.php");
include_once("includes/body.inc.php");
$id=intval($_GET['id']);
$sql="select * from produtos where produtoId=$id";
$result=mysqli_query($con,$sql);
top();
?>

<div class="page-heading about-heading header-text" style="background-image: url(assets/images/heading-6-1920x500.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="text-content">
                    <h2><?php echo $dadosEs['produtoNome']?></h2>
                    <h4><?php echo $dadosEs['precoMota']?></h4>

                </div>
            </div>
        </div>
    </div>
</div>

<section id="one">
        <?php
        while($dados=mysqli_fetch_array($result)){

        ?>
            <div class="products">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div>
                                <img src="<?php echo $dadosEs['produtoURL']?>"alt="" class="img-fluid wc-image"></td>
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
            <?php
            }
            ?>
        </div>



                    </div>
                </form>
            </section>
        </div>

    </section>