<?php

include_once("includes/body.inc.php");
$txt=addslashes($_POST['txt']);
$sql="Select * from marcas where marcaNome LIKE '$txt%'";

$result=mysqli_query($con,$sql);

?>

<table class='table table-striped' width="100%">
    <tr>
        <td colspan="5" align='right'>
            <a href="adicionaMarca.php"><i class='fas fa-plus text-success'> Adiciona</i></a>
        </td>
    </tr>
    <tr>
        <th>Id</th>
        <th>Nome</th>
        <th>Detalhe</th>
        <th colspan="2">op&ccedil&otildees</th>
    </tr>
    <?php
    while($dados=mysqli_fetch_array($result)){
        ?>

        <tr>
            <td><?php echo $dados['marcaId']?></td>
            <td><?php echo $dados['marcaNome']?></td>
            <td><a href="../cbr1000rr.php"> <button type="button" class="btn btn-light" style="color: #f33f3f">Ver motos</button></a></td>
          </tr>
        <?php
    }
    ?>


</table>

