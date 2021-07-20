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
                    <h2>kawasaki H2R</h2>
                    <h4>32.000€</h4>

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
                    <img src="assets/images/Ninjazx1.png" alt="" class="img-fluid wc-image">
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
                            <div class="clearfix">
                                <span class="pull-left">Type</span>

                                <strong class="pull-right">Veiculo Novo</strong>
                            </div>
                        </li>

                        <li class="list-group-item">
                            <div class="clearfix">
                                <span class="pull-left">Fabricante</span>

                                <strong class="pull-right">kawasaki</strong>
                            </div>
                        </li>

                        <li class="list-group-item">
                            <div class="clearfix">
                                <span class="pull-left"> Ano</span>

                                <strong class="pull-right">2020</strong>
                            </div>
                        </li>

                        <li class="list-group-item">
                            <div class="clearfix">
                                <span class="pull-left"> Modelo</span>

                                <strong class="pull-right">Kawasaki H2R</strong>
                            </div>
                        </li>


                        <li class="list-group-item">
                            <div class="clearfix">
                                <span class="pull-left">Combustível</span>

                                <strong class="pull-right">Gasolina</strong>
                            </div>
                        </li>

                        <li class="list-group-item">
                            <div class="clearfix">
                                <span class="pull-left">Potência</span>

                                <strong class="pull-right">217 cv hp</strong>
                            </div>
                        </li>


                        <li class="list-group-item">
                            <div class="clearfix">
                                <span class="pull-left">mudanças</span>

                                <strong class="pull-right">Manual</strong>
                            </div>
                        </li>

                        <li class="list-group-item">
                            <div class="clearfix">
                                <span class="pull-left">caixa de mudanças</span>

                                <strong class="pull-right">6</strong>
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

                            <tr>
                                <td class="title">DIÂMETRO X CURSO (mm)</td>
                                <td class="result">81 mm x 48,5 mm</td>
                            </tr>

                            <tr>
                                <td class="title">ALIMENTAÇÃO</td>
                                <td class="result">PGM-FI</td>
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
