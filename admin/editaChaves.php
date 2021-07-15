<?php
include_once ("includes/body.inc.php");
$id=intval($_GET['id']);
$sql="select * from chaves where chaveId=".$id;
$res=mysqli_query($con,$sql);
$dados=mysqli_fetch_array($res);
top();
?>
<div class="services">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading ">
                    <h2 class="text-dark">Editar</E><em> Chaves</em></h2>

                </div>
                <form action="confirmaEditaChaves.php" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="idChaves" value="<?php echo $id; ?>">
                    <div class="form-group">
                        <label for="nome">Nome: </label>
                        <input type="text" class="form-control" id="nome" name="nomeChaves"  value="<?php echo $dados['chaveNome']; ?>">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Altera</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
<?php
bottom();
?>



