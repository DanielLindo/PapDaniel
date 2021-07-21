<?php
include_once("includes/body.inc.php");
top();
echo ($sql);
$id=intval($_GET['id']);
$sql="select * from produtos left join categorias on produtoId = produtoCategoriaId=".$id;

$result = mysqli_query($con,$sql);
$dados = mysqli_fetch_array($result);
?>
<main id="main">
    <br><br> <br> <br> <br>
    <div class="container">
        <div class="down-content">
            <div class="section-heading" style="text-align: center">
                <h2><?php echo $dados['categoriaNome']?></h2>
            </div>
            <div class="row">

                <div class="col-lg-4 col-md-6">
                    <div class="product-item">
                        <img src="<?php echo $dados['produtoURL']?>" alt="">
                        <div class="down-content">
                            <a href="produto.php?idMota=<?php echo $dados['produtoId']?>"><h4><?php echo $dados['produtoNome']?></h4></a>

                            <h6><?php echo $dados['produtoPreco']?></h6>


                            <small>&nbsp;&nbsp;&nbsp;&nbsp;

                            </small>
                        </div>
                    </div>

        </div>
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
