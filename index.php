<?php
include_once("includes/body.inc.php");
top();

//$id=intval($_GET['id']);
$sql="select * from motas inner join marcas on motaMarcaId=marcaId";

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

            <div class="row">
                <?php
                while ($dados=mysqli_fetch_array($result)) {
                    ?>
                <div class="col-lg-4 col-md-6">
                    <div class="product-item">

                        <img width="500" src="<?php echo $dados['motaImagemURL']?>" alt="" class="img-fluid wc-image"></td>
                        <div class="down-content">
                            <a href="mota.php?id=<?php echo $dados['motaId']?>"><h4><?php echo $dados['motaNome']?></h4></a>

                            <h6><?php echo $dados['motaPreco']?>€</h6>

                            <p <?php echo $dados['motaCombustivel']?> &nbsp;/&nbsp; <?php echo $dados['motaAno']?>&nbsp;/&nbsp;</p>

                            <small>&nbsp;&nbsp;&nbsp;&nbsp;
                                <strong title="Author"><i class="fa fa-cube"></i> <?php echo $dados['motaCilindrada']?>cv</strong>&nbsp;&nbsp;&nbsp;&nbsp;
                                <strong title="Views"><i class="fa fa-cog"></i> <?php echo $dados['motaMudanca']?></strong>
                            </small>
                        </div>
                    </div>

                </div>


                <?php
                }
                ?>

        </div>
    </div>
</div>
<br>
    <br>
    <br>
<?php
$sql1="select * from produtos inner join categorias on produtoCategoriaId=categoriaId";
$resultAce = mysqli_query($con,$sql1);

?>
    <div class="latest-products">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading" style="text-align: center">
                        <h2>Produtos em destaque</h2>
                    </div>
                </div>
                         <?php
                         while ($dadosEs=mysqli_fetch_array($resultAce)) {
                          ?>
                          <div class="col-lg-4 col-md-6">
                              <div class="product-item">

                                <img width="500" src="<?php echo $dadosEs['produtoURL']?>" alt="">
                                <div class="down-content">
                                    <a href="acessorio.php?catId=<?php echo $dadosEs['produtoId']?>"><h4><?php echo $dadosEs['produtoNome']?></h4></a>
                                     <h6><?php echo $dadosEs['produtoPreco']?>€</h6>
                                </div>
                            </div>

                        </div>
                             <?php
                         }
                         ?>
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
       <!--
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
-->


<?php
bottom();
?>

