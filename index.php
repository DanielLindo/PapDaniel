<?php
include_once("includes/body.inc.php");
top();
$sql="select * from motas";
$result = mysqli_query($con,$sql);
?>
<!-- Page Content -->
<!-- Banner Starts Here -->
<div class="banner header-text">
    <div class="owl-banner owl-carousel">
        <div class="banner-item-01">
            <div class="text-content">
                <h4>Encontre a sua</h4>
                <h2>Moto</h2>
            </div>
        </div>
        <div class="banner-item-02">
            <div class="text-content">
                <h4>Encontre a sua</h4>
                <h2>Moto</h2>
            </div>
        </div>
        <div class="banner-item-03">
            <div class="text-content">
                <h4>Encontre a sua</h4>
                <h2>Moto</h2>
            </div>
        </div>
    </div>
</div>
<!-- Banner Ends Here -->
<div class="latest-products">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading" style="text-align: center">
                    <h2>Motas em destaque</h2>
                </div>
            </div>

            <div class="col-12">
                <i class="fas fa-search" style="color: firebrick"></i>
                <input style="width: 95%;" type="text" id="search" class="border float-left">

            </div>

            <div class ="row">
                <div class="col-lg-4 col-md-6">
                     <?php
                        while ($dados=mysqli_fetch_array($result)) {
                        ?>
                    <div class="product-item">
                        <a href="mota.php?id=<?php echo $dados["motaId"]?>">  <td><img width="120" src="<?php echo $dados['motaImagemURL']?>"></td></a>
                        <div class="down-content">

                            <a href="mota.php?id=<?php echo $dados["motaId"]?>"><h4><?php echo $dados['motaNome']?></h4></a>

                            <h6><?php echo $dados['motaPreco']?> €</h6>

                            <p> <?php echo $dados['motaCombustivel']?> &nbsp;/&nbsp; <?php echo $dados['motaAno']?></p>

                            <small>&nbsp;&nbsp;&nbsp;&nbsp;
                                <strong title="Author"><i class="fa fa-cube"></i><?php echo $dados['motaCilindrada']?></strong>&nbsp;&nbsp;&nbsp;&nbsp;
                                <strong title="Views"><i class="fa fa-cog"></i> Manual</strong>

                                <div class="alert alert-primary" role="alert" style="text-align: center">
                                    <a href="testDrive.php"> testdrive</a>
                            </small>
                        </div>
                    </div>
                </div>
            </div>

                <?php
                }
                ?>

        </div>
    </div>
</div>
<!--<div class="latest-products">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading">
                    <h2>Motas em destaque</h2>
                </div>
            </div>
            <div class="col-12">
                <i class="fas fa-search" style="color: firebrick"></i>
                <input style="width: 95%;" type="text" id="search" class="border float-left">
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="product-item">
                    <a href="cbr1000rr.php"><img src="assets/images/honda.jpg" alt=""></a>
                    <div class="down-content">
                        <a href="cbr1000rr.php"><h4>honda cbr1000rr-r</h4></a>

                        <h6>26.200€</h6>

                        <p>190 hp &nbsp;/&nbsp; Petrol &nbsp;/&nbsp; 2020&nbsp;/&nbsp;</p>

                        <small>&nbsp;&nbsp;&nbsp;&nbsp;
                            <strong title="Author"><i class="fa fa-cube"></i> 217 cv</strong>&nbsp;&nbsp;&nbsp;&nbsp;
                            <strong title="Views"><i class="fa fa-cog"></i> Manual</strong>

                            <div class="alert alert-primary" role="alert" style="text-align: center">
                                <a href="testDrive.php"> testdrive</a>
                        </small>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-6">
            <div class="product-item">
                <a href="mt-09detalhes.html"><img src="assets/images/mt-09Inicial.png" alt=""></a>
                <div class="down-content">
                    <a href="mt-09detalhes.html"><h4>Mt-09</h4></a>

                    <h6>9.295€</h6>

                    <p>190 hp &nbsp;/&nbsp; Petrol &nbsp;/&nbsp; 20021 &nbsp;/&nbsp; Used vehicle</p>

                    <small>
                        <strong title="Author"><i class="fa fa-cube"></i> 115,0 cv</strong>&nbsp;&nbsp;&nbsp;&nbsp;
                        <strong title="Views"><i class="fa fa-cog"></i> Manual</strong>
                    </small>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-6">
            <div class="product-item">
                <a href="yamahaXSR900detalhes.html"><img src="assets/images/xsr900.png" alt=""></a>
                <div class="down-content">
                    <a href="yamahaXSR900detalhes.html"><h4>Yamaha XSR900</h4></a>

                    <h6>10 295€</h6>

                    <p>190 hp &nbsp;/&nbsp; Petrol &nbsp;/&nbsp; 2020&nbsp;/&nbsp; Used vehicle</p>

                    <small>

                        <strong title="Author"><i class="fa fa-cube"></i> 1800cc</strong>&nbsp;&nbsp;&nbsp;&nbsp;
                        <strong title="Views"><i class="fa fa-cog"></i> Manual</strong>
                    </small>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-6">
            <div class="product-item">
                <a href="BWM%201200%20GSDetalhes.html"><img src="assets/images/bwm1200gs.png" alt=""></a>
                <div class="down-content">
                    <a href="BWM%201200%20GSDetalhes.html"><h4>BWM R 1200 GS</h4></a>

                    <h6>17.800€</h6>

                    <p>190 hp &nbsp;/&nbsp; Petrol &nbsp;/&nbsp; 2008 &nbsp;/&nbsp; Used vehicle</p>

                    <small>

                        <strong title="Author"><i class="fa fa-cube"></i> 1800cc</strong>&nbsp;&nbsp;&nbsp;&nbsp;
                        <strong title="Views"><i class="fa fa-cog"></i> Manual</strong>
                    </small>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-6">
            <div class="product-item">
                <a href="V-STORM1050XTDetalhes.html"><img src="assets/images/V-STROM1050XT.png" alt=""></a>
                <div class="down-content">
                    <a href="V-STORM1050XTDetalhes.html"><h4>Suzuki V-STROM1050XT</h4></a>

                    <h6><small>14 999€ </small> </h6>

                    <p>190 hp &nbsp;/&nbsp; Petrol &nbsp;/&nbsp; 2008 &nbsp;/&nbsp; Used vehicle</p>

                    <small>
                        <strong title="Author"><i class="fa fa-cube"></i> 1800cc</strong>&nbsp;&nbsp;&nbsp;&nbsp;
                        <strong title="Views"><i class="fa fa-cog"></i> Manual</strong>
                    </small>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-6">
            <div class="product-item">
                <a href="yzf%20r%20125.html"><img src="assets/images/yzf%20r125.png" alt=""></a>
                <div class="down-content">
                    <a href="yzf%20r%20125.html"><h4>yamaha yzf r 125</h4></a>

                    <h6>5 325€</h6>

                    <small>

                        <strong title="Author"><i class="fa fa-cube"></i> 14,5cc</strong>&nbsp;&nbsp;&nbsp;&nbsp;
                        <strong title="Views"><i class="fa fa-cog"></i> Manual</strong>
                    </small>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
-->

<div class="services" style="background-image: url(assets/images/6motosBackGround.png);" >
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading">
                    <h2>Acessórios</h2>

                    <a href="acessorios.html"><h7>clique para ver mais</h7><i class="fa fa-angle-right"></i></a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">

                <a href="#" class="services-item-image"><img src="assets/images/luvas.png" class="img-fluid" alt=""></a>

                <div class="down-content">
                </div>

            </div>
            <div class="col-lg-4 col-md-6">
                <a href="#" class="services-item-image"><img src="assets/images/Casaco.png" class="img-fluid" alt=""></a>

                <div class="down-content">

                </div>
            </div>
            <div class="col-lg-4 col-md-6">

                <a href="#" class="services-item-image"><img src="assets/images/Botas.png" class="img-fluid" alt=""></a>

                <div class="down-content">
                </div>
            </div>
        </div>
    </div>
</div>

<!--<div class="happy-clients">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading">
                    <h2>Critícas e feedbacks</h2>

                    <a href="testimonials.html">Leia mais<i class="fa fa-angle-right"></i></a>
                </div>
            </div>
            <div class="col-md-12">
                <div class="owl-clients owl-carousel text-center">
                    <div class="service-item">
                        <div class="icon">
                            <i class="fa fa-user"></i>
                        </div>
                        <div class="down-content">
                            <h4>Filipe Vital</h4>
                            <p class="n-m"><em>"Excelente variadade de motas, preços muito ajustados.."</em></p>
                        </div>
                    </div>

                    <div class="service-item">
                        <div class="icon">
                            <i class="fa fa-user"></i>
                        </div>
                        <div class="down-content">
                            <h4>Miguel Pereira</h4>
                            <p class="n-m"><em>"Podia aderir a black friday ahahahaah."</em></p>
                        </div>
                    </div>

                    <div class="service-item">
                        <div class="icon">
                            <i class="fa fa-user"></i>
                        </div>
                        <div class="down-content">
                            <h4>Paulo Ferreira</h4>
                            <p class="n-m"><em>"Preços demasiado elevados mas com tudo uma boa qualidade de motas."</em></p>
                        </div>
                    </div>

                    <div class="service-item">
                        <div class="icon">
                            <i class="fa fa-user"></i>
                        </div>
                        <div class="down-content">
                            <h4>John Doe</h4>
                            <p class="n-m"><em>"Lorem ipsum dolor sit amet, consectetur an adipisicing elit. Itaque, corporis nulla at quia quaerat."</em></p>
                        </div>
                    </div>

                    <div class="service-item">
                        <div class="icon">
                            <i class="fa fa-user"></i>
                        </div>
                        <div class="down-content">
                            <h4>Jane Smith</h4>
                            <p class="n-m"><em>"Lorem ipsum dolor sit amet, consectetur an adipisicing elit. Itaque, corporis nulla at quia quaerat."</em></p>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
</div>
-->
<div class="call-to-action">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="inner-content">
                    <div class="row">
                        <div class="col-md-8">
                            <p>Para mais informações. Contacte-nos</p>
                        </div>
                        <div class="col-lg-4 text-center">
                            <a href="contact.html" class="filled-button">Contacto</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<?php
bottom();
?>

