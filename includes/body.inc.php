<?php
include_once ("config.inc.php");
$con=mysqli_connect(HOST,USER,PWD,DATABASE);
$con->set_charset("utf8");
function top(){
    global $con;
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="assets/images/icon.ico">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>MotoCompany</title>

    <!-- Font awesome -->
    <script src='https://kit.fontawesome.com/e8e2985ace.js' crossorigin='anonymous'></script>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/owl.css">

</head>

<body>

<!-- ***** Preloader Start ***** -->
<div id="preloader">
    <div class="jumper">
        <div></div>
        <div></div>
        <div></div>
    </div>
</div>
<!-- ***** Preloader End ***** -->

<!-- Header -->
<header class="">
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="index.php"><h2>Moto<em>Company</em></h2></a>

            </button>



            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">

                        <div class="container">
                            <div class="row">
                            <?php
                            $sql="select * from tipos";
                            $res=mysqli_query($con,$sql);
                            while ($dados=mysqli_fetch_array($res)){
                            ?>


                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><?php echo $dados['tipoNome']?></a>
                                    <div class="dropdown-menu">
                                        <?php
                                        $sql="select * from classificacoes where classificacaoTipoId=".$dados['tipoId'];
                                        $resC=mysqli_query($con,$sql);
                                        while ($dadosC=mysqli_fetch_array($resC)){
                                        ?>
                                        <a class="dropdown-item" href="listaMotas.php?classId=<?php echo $dadosC['classificacaoId']?>"><?php echo $dadosC['classificacaoNome']?></a>
                                        <?php
                                        }
                                        ?>
                                    </div>
                                </li>
                    <?php
                    }

                    ?>
<!--
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Trail</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="DesportivoDeAventura.html">Desportivo de aventura</a>
                            <a class="dropdown-item" href="DesportoouAventura.html">Desporto e aventura</a>
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Todo o Terreno</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="Moto4.html">Moto 4</a>
                            <a class="dropdown-item" href="MotosDeCompetiçao.html">Motas de competição</a>
                        </div>
                    </li>
-->
                    <li class="nav-item dropdown">
                        <div class="dropdown-menu">
                            <?php
                            $sql="select * from categorias";
                            $resC=mysqli_query($con,$sql);
                            while ($dadosC=mysqli_fetch_array($resC)){
                                ?>
                                <a class="dropdown-item" href="acessorio.php?catid=<?php echo $dadosC['categoriaId']?>"><?php echo $dadosC['categoriaNome']?></a>
                                <?php
                            }
                            ?>


                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
<body>
<?php
}
function bottom(){
?>
    <script>
        $('document').ready(function(){
            fillTableMarcas($('#id').val());
        })
    </script>
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="inner-content">
                        <p>Copyright © 2020 Company Name - Template by: <a href="https://www.phpjabbers.com/">PHPJabbers.com</a></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/common.js"></script>
    <script src="assets/js/owl.js"></script>
<?php
}
?>
