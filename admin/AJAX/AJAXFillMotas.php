<?php

include_once("includes/body.inc.php");
$txt=addslashes($_POST['txt']);
$sql="Select * from motas where motaNome LIKE '$txt%'";

$result=mysqli_query($con,$sql);

?>

<table class='table table-striped' width="100%">
    <tr>
        <td colspan="5" align='right'>
            <a href="adicionaMota.php"><i class='fas fa-plus text-success'> Adiciona</i></a>
        </td>
    </tr>
    <tr>
        <th>Id</th>
        <th>Nome</th>
        <th>Preco</th>
        <th>Cilindrada</th>
        <th>Ano</th>
        <th>Tipo Combustivel</th>
        <th colspan="2">op&ccedil&otildees</th>
    </tr>
    <?php
    while($dadosEs=mysqli_fetch_array($result)){
        ?>

        <tr>
            <td><?php echo $dadosEs['motaId']?></td>
            <td><?php echo $dadosEs['motaNome']?></td>
            <td><?php echo $dadosEs['motaPreco']?></td>
            <td><?php echo $dadosEs['motaCilindrada']?></td>
            <td><?php echo $dadosEs['motaAno']?></td>
            <td><?php echo $dadosEs['motaCombustivel']?></td>
            <td><a href="../cbr1000rr.php"> <button type="button" class="btn btn-light" style="color: #f33f3f">Ver motos</button></a></td>
          </tr>
        <?php
    }
    ?>


</table>

