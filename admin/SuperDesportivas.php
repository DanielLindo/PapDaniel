<?php
include_once("includes/body.inc.php");
top();
$sql = "select * from motas inner join marcas on motaMarcaId=marcaId";
$result=mysqli_query($con,$sql);
?>
<main id="main">
    <br><br> <br> <br> <br>
    <div class="container">
        <div class="down-content">
            <div class="section-heading" style="text-align: center">
                <h2>Super desportivas</h2>
            </div>
            <div class="row">
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
