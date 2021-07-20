<?php
include_once ("includes/config.inc.php");
include_once("includes/body.inc.php");
$id=intval($_GET['id']);
$sql="select * from produtos where produtoId=$id";
$result=mysqli_query($con,$sql);
top();
?>

<<div class="page-heading about-heading header-text" style="background-image: url(assets/images/heading-6-1920x500.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="text-content">
                    <h2><?php echo $dados['marcaNome']?></h2>
                    <h4><?php echo $dados['precoMota']?></h4>

                </div>
            </div>
        </div>
    </div>
</div>

<section id="one">
        <?php
        while($dados=mysqli_fetch_array($result)){

        ?>
        <div class="inner">
            <header class="major">
                <h1><?php echo $dados['produtoNome']?></h1>
            </header>

            <div class="row">
                <div class="col-md-5">
                    <img src="<?php echo $dados['produtoURL']?>" class="img-responsive" alt="">
                </div>

                <div class="col-md-7">
                    <h2><?php echo $dados['produtoPreco']?>&euro;</h2>
                </div>
            </div>
            <br>
            <h3>Sobre:</h3>
            <p><?php echo $dados['produtoDestaque']?></p>
            <?php
            }
            ?>
        </div>



                    </div>
                </form>
            </section>
        </div>

    </section>