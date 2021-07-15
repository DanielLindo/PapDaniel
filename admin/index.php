<?php
include_once("includes/body.inc.php");
top();

$sql = "select * from motas inner join marcas on motaMarcaId=marcaId";
$result=mysqli_query($con,$sql);
?>
<!-- Page Content -->
<!-- Banner Starts Here -->
<div class="banner header-text">

</div>
<!-- Banner Ends Here -->




<div class="happy-clients">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading">
                    <h2>Menus</h2>


                </div>
            </div>
            <div class="row">
                <div class="col-4">
                   <a href="listaCategorias.php">
                       <div class="service-item ">
                        <div class="icon ">
                            <i class="fa fa-cog"></i>
                        </div>
                        <div class="down-content">
                            <h4>Categorias</h4>
                            <p class="n-m"><em>Gestão das categorias dos acessórios</em></p>
                        </div>
                    </div>
                    </a>
                </div>
                <div class="col-4">
               <a href="listaTipos.php">
                       <div class="service-item ">
                        <div class="icon ">
                            <i class="fa fa-cog"></i>
                        </div>
                        <div class="down-content">
                            <h4>Tipos de Motos</h4>
                            <p class="n-m"><em>Gestão dos tipos de motos</em></p>
                        </div>
                    </div>
                    </a>
                </div>
                <div class="col-4">
                   <a href="listaChaves.php">
                       <div class="service-item ">
                        <div class="icon ">
                            <i class="fa fa-cog"></i>
                        </div>
                        <div class="down-content">
                            <h4>Chaves</h4>
                            <p class="n-m"><em>Gestão das chaves de especificações das motos</em></p>
                        </div>
                    </div>
                    </a>
                </div>
                <div class="col-4">
               <a href="listaMarcas.php">
                       <div class="service-item ">
                        <div class="icon ">
                            <i class="fa fa-cog"></i>
                        </div>
                        <div class="down-content">
                            <h4>Marcas</h4>
                            <p class="n-m"><em>Gestão das marcas das motos</em></p>
                        </div>
                    </div>
                    </a>


                </div>
                <div class="col-4">
               <a href="listaMotos.php">
                       <div class="service-item ">
                        <div class="icon ">
                            <i class="fa fa-cog"></i>
                        </div>
                        <div class="down-content">
                            <h4>Motos</h4>
                            <p class="n-m"><em>Gestão das motos e especificações</em></p>
                        </div>
                    </div>
                    </a>


                </div>
                <div class="col-4">
               <a href="listaAcessorios.php">
                       <div class="service-item ">
                        <div class="icon ">
                            <i class="fa fa-cog"></i>
                        </div>
                        <div class="down-content">
                            <h4>Acessórios</h4>
                            <p class="n-m"><em>Gestão dos acessórios das motos.</em></p>
                        </div>
                    </div>
                    </a>


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

