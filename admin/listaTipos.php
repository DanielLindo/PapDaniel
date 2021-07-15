<?php
include_once("includes/body.inc.php");
top();
$sql = "select * from  classificacoes";
$result=mysqli_query($con,$sql);
?>
<script>
    function confirmaEliminaClassificacao(id) {
        $.ajax({
            url:"AJAX/AJAXGetNameTipo.php",
            type:"post",
            data:{
                idClassificao:id
            },
            success:function (result){
                if(confirm('Confirma que deseja eliminar o tipo: '+result+"?"))
                                    window.location="eliminaTipo.php?id=" + id;
            }
        })
    }

</script>
<br>
<br>
<br>
<br>
    <div class="col-md-12" >
        <div class="section-heading" style="text-align: center">
            <h2>Tipos de Moto</h2>
        </div>
    </div>

<div class="container">
    <table class='table table-striped' width="100%">
        <div>
            <a href="index.php"> <button type="button" class="btn btn-danger">Voltar</button></a>
        </div>
        <tr>
            <td colspan="5" align='right'>
                <a href="adicionaTipo.php"><i class='fas fa-plus text-success'> Adiciona</i></a>
            </td>
        </tr>
        <tr style="text-align: center">
            <th>Id</th>
            <th>Nome</th>
            <th colspan="2">op&ccedil&otildees</th>
        </tr>
        <?php
        while($dados=mysqli_fetch_array($result)){
            ?>
            <tr style="text-align: center">
                <td><?php echo $dados['classificacaoId']?></td>
                <td><?php echo $dados['classificacaoNome']?></td>
                <td><a href="editaTipo.php?id=<?php echo $dados['classificacaoId']?>"><button type="button" class="btn btn-primary btn-sm"><i class="fa fa-pencil" style="color: white"></i>&nbsp;Edita</button></a></td>
                <td><a href="#" onclick="confirmaEliminaClassificacao(<?php echo $dados['classificacaoId']?>);"><button type="button" class="btn btn-danger btn-sm"><i class="fas fa-trash" style="color: white"></i>&nbsp;Elimina</button></a></td>
            </tr>
            <?php
        }
        ?>


    </table>
</div>

<?php
bottom();
?>
