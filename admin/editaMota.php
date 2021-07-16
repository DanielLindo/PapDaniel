<?php
include_once ("includes/body.inc.php");
$id=intval($_GET['id']);
$sql="select * from motas where motaId=".$id;
$res=mysqli_query($con,$sql);
$dados=mysqli_fetch_array($res);
top();
?>
<div class="services">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading ">
                    <h2 class="text-dark">Nova<em> Mota</em></h2>

                </div>
                <form action="confirmaEditaCategoria.php" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="idMota" value="<?php echo $id; ?>">
                    <div class="form-group">
                        <label for="nome">Nome: </label>
                        <input type="text" class="form-control" id="nome" name="nomeMota"  value="<?php echo $dados['motaNome']; ?>">
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



