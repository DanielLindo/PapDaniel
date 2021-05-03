<?php
include_once("includes/body.inc.php");
top();

$sql = "select * from motas inner join marcas on motaMarcaId=marcaId";
$result=mysqli_query($con,$sql);
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
                <div class="section-heading">
                    <h2>Motas em destaque</h2>
                </div>
            </div>
            <table class="table table-hover table-striped">
                <tr style="text-align: center">
                    <th>Nome</th>
                    <th>Marca</th>
                    <th>Imagem</th>
                    <th>Detalhe</th>
                    <th colspan="3"> Opções </th>
                </tr>
                <?php
                while ($dados = mysqli_fetch_array($result)) {
                ?>
                    <tr style="text-align: center">
                        <td><?php echo $dados['motaNome']?></td>
                        <td><?php echo $dados['marcaNome']?></td>
                        <td><img src="assets/images/honda.jpg" alt=""  width="102"></td>
                        <td><a href="../cbr1000rr.php"> <span class="btn-sm btn-success">Ir para a página</span></a></td>
                        <td><i class="fas fa-edit" style="color: #009900"></i></td>
                        <td><i class="fas fa-trash-alt" style="color: #e60000"></i></td>
                        <td><i class="fas fa-star" style="color: #ffd11a"></i></td>
                    </tr>
                <?php
                }
                ?>
            </table>

    </div>
</div>



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

<div class="happy-clients">
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

