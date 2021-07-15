<?php
include_once("includes/body.inc.php");
top();
$id=intval($_GET['id']);
$sql="select * from motas inner join marcas on motaMarcaId=marcaId where motaId=".$id;
$result = mysqli_query($con,$sql);
$dados = mysqli_fetch_array($result);
?>
<!-- Page Content -->
<div class="page-heading about-heading header-text" style="background-image: url(assets/images/heading-6-1920x500.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="text-content">
                    <h2><?php echo $dados['motaNome']?></h2>
                    <h4><?php echo $dados['motaPreco']?> €</h4>

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
                    <img src="assets/images/cbr1000rr-rAmostra.png" alt="" class="img-fluid wc-image">
                </div>
            </div>

            <div class="col-md-6">
                <form action="#" method="post" class="form"><br><br>
                    <ul class="list-group list-group-flush">

                        <li class="list-group-item">
                            <div class="clearfix">
                                <span class="pull-left">Fabricante</span>

                                <strong class="pull-right"><?php echo $dados['marcaNome']?></strong>
                            </div>
                        </li>

                        <li class="list-group-item">
                            <div class="clearfix">
                                <span class="pull-left"> Modelo</span>

                                <strong class="pull-right"><?php echo $dados['motaNome']?></strong>
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
                                <span class="pull-left">Potencia</span>

                                <strong class="pull-right"><?php echo $dados['motaCilindrada']?> cc</strong>
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
            <div class="col-md-6">
                <h2>Discrições da mota</h2>
                <div class="left-content">



                    <div class="content">

                        <table class="table table-sm table-spec">
                            <tbody>
                            <?php
                            $sqlEs="select * from motas inner join motaChaves on motaId=motaChaveMotaId
                    inner join chaves on motaChaveChaveId=chaveId where motaId=".$id;
                            $resultEs = mysqli_query($con,$sqlEs);
                            ?>

                            <tr>
                                <th width="40%">Especificação</th>
                                <th>Valor</th>
                            </tr>
                            <?php
                            while  ($dadosEs=mysqli_fetch_array($resultEs)){
                            ?>
                            <tr>
                                <td class="title"><?php echo $dadosEs['chaveNome']?></td>
                                <td class="result"><?php echo $dadosEs['motaChaveValor']?></td>
                            </tr>

                                <?php
                            }
                            ?>
                            <!--
                            <tr>
                                <td class="title">
                                </td><td class="result">PGM-FI</td>

                            </tr>

                            <tr>
                                <td class="title">TAXA DE COMPRESSÃO</td>
                                <td class="result">13,0 : 1</td>
                            </tr>

                            <tr>
                                <td class="title">EMISSÕES C02 (g/km)</td>
                                <td class="result">148</td>
                            </tr>

                            <tr>
                                <td class="title">CILINDRADA (cm3)</td>
                                <td class="result">999,9 cm³</td>
                            </tr>

                            <tr>
                                <td class="title">TIPO DE MOTOR</td>
                                <td class="result">Tetracilíndrico em linha a quatro tempos, DOHC, arrefecido por água</td>
                            </tr>

                            <tr>
                                <td class="title">IGNIÇÃO</td>
                                <td class="result">Eletrónica, digital, transistorizada</td>
                            </tr>

                            <tr>
                                <td class="title">CAPACIDADE DE ÓLEO (Litros)</td>
                                <td class="result">3,8 litros</td>
                            </tr>

                            <tr>
                                <td class="title">ARRANQUE</td>
                                <td class="result">Elétrico</td>
                            </tr>

                            <tr>
                                <td class="title">DIÂMETRO CORPO ACELERADOR</td>
                                <td class="result">52 mm</td>
                            </tr>
-->
                            </tbody>

                        </table>
                    </div>
                </div>
            </div>
            <div class="right-content">
                <div class="col-md-3">
                    <img class="d-block w-auto"src="assets/images/cbr10002foto.png">
                </div>
            </div>

        </div>
    </div>


    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="section-heading">
                        <h2>Contact Details</h2>
                    </div>

                    <div class="left-content">
                        <p>
                            <span>Name</span>

                            <br>

                            <strong>John Smith</strong>
                        </p>

                        <p>
                            <span>Phone</span>

                            <br>

                            <strong>
                                <a href="tel:123-456-789">123-456-789</a>
                            </strong>
                        </p>

                        <p>
                            <span>Mobile phone</span>

                            <br>

                            <strong>
                                <a href="tel:456789123">456789123</a>
                            </strong>
                        </p>

                        <p>
                            <span>Email</span>

                            <br>

                            <strong>
                                <a href="mailto:john@carsales.com">john@carsales.com</a>
                            </strong>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
bottom();
?>
