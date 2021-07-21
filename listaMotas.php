<?php
include_once("includes/body.inc.php");
top();

$classId=intval($_GET['classId']);
$sql="select * from classificacoes left join motas on classificacaoId = motaClassificacaoId left join tipos on tipoId=classificacaoNome left join marcas on motaMarcaId=marcaId ";
$sql.=" where classificacaoId=".$classId;
echo ($sql);
$result = mysqli_query($con,$sql);
$dados = mysqli_fetch_array($result);
$result = mysqli_query($con,$sql);
?>
<main id="main">
    <br><br> <br> <br> <br>
    <div class="container">
        <div class="down-content">
            <div class="section-heading" style="text-align: center">
                <h2><?php echo $dados['classificacaoNome']?></h2>
            </div>
            <div class="row">
                <?php
                while ($dados = mysqli_fetch_array($result)){
                ?>


                <div class="col-lg-4 col-md-6">
                    <div class="product-item">
                        <img src="<?php echo $dados['motaImagemURL']?>" alt="">
                        <div class="down-content">
                            <a href="mota.php?idMota=<?php echo $dados['motaId']?>"><h4><?php echo $dados['motaNome']?></h4></a>

                            <h6><?php echo $dados['motaPreco']?></h6>

                            <p>190 hp &nbsp;/&nbsp; <?php echo $dados['motaCombustivel']?> &nbsp;/&nbsp; <?php echo $dados['motaAno']?>&nbsp;/&nbsp;</p>

                            <small>&nbsp;&nbsp;&nbsp;&nbsp;
                                <strong title="Author"><i class="fa fa-cube"></i> <?php echo $dados['motaCilindrada']?></strong>&nbsp;&nbsp;&nbsp;&nbsp;
                                <strong title="Views"><i class="fa fa-cog"></i> <?php echo $dados['motaMudanca']?></strong>
                            </small>
                        </div>
                    </div>

        </div>
                <?php
                }
                ?>
</main>




<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Book Now</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="contact-form">
                    <form action="#" id="contact">
                        <div class="row">
                            <div class="col-md-6">
                                <fieldset>
                                    <input type="text" class="form-control" placeholder="Pick-up location" required="">
                                </fieldset>
                            </div>

                            <div class="col-md-6">
                                <fieldset>
                                    <input type="text" class="form-control" placeholder="Return location" required="">
                                </fieldset>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <fieldset>
                                    <input type="text" class="form-control" placeholder="Pick-up date/time" required="">
                                </fieldset>
                            </div>

                            <div class="col-md-6">
                                <fieldset>
                                    <input type="text" class="form-control" placeholder="Return date/time" required="">
                                </fieldset>
                            </div>
                        </div>
                        <input type="text" class="form-control" placeholder="Enter full name" required="">

                        <div class="row">
                            <div class="col-md-6">
                                <fieldset>
                                    <input type="text" class="form-control" placeholder="Enter email address" required="">
                                </fieldset>
                            </div>

                            <div class="col-md-6">
                                <fieldset>
                                    <input type="text" class="form-control" placeholder="Enter phone" required="">
                                </fieldset>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary">Book Now</button>
            </div>
        </div>
    </div>
</div>
<?php
bottom();
?>
