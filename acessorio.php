<?php
include_once("includes/body.inc.php");
top();
$id=intval($_GET['catid']);
$sql="select * from produtos left join categorias on produtoId = produtoCategoriaId=".$id;
$result = mysqli_query($con,$sql);
$dadosEs = mysqli_fetch_array($result);
?>
<!-- Page Content -->
<div class="page-heading about-heading header-text" style="background-image: url(assets/images/heading-6-1920x500.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="text-content">
                    <h2><?php echo $dadosEs['produtoNome']?></h2>
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
                                <span class="pull-left">Nome</span>

                                <strong class="pull-right"><?php echo $dadosEs['produtoNome']?></strong>
                            </div>
                        </li>


                        <li class="list-group-item">
                            <div class="clearfix">
                                <span class="pull-left"> Preço</span>

                                <strong class="pull-right"><?php echo $dadosEs['produtoPreco']?></strong>
                            </div>
                        </li>

                        <li class="list-group-item">
                            <div class="clearfix">
                                <span class="pull-left">Destaque </span>

                                <strong class="pull-right"><?php echo $dadosEs['produtoDestaque']?></strong>
                            </div>
                        </li>

                    </ul>
                </form>
            </div>
        </div>
    </div>
</div>




<?php
bottom();
?>
