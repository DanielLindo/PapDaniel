<?php
include_once ("includes/body.inc.php");
top();
?>
<div class="services">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading ">
                    <h2 class="text-dark">Nova<em> Chave</em></h2>

                </div>
                <form action="confirmaNovaChaves.php" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="nome">Nome: </label>
                        <input type="text" class="form-control" id="nome" name="nomeChaves">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-success">Adicionar</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
<?php
bottom();
?>



