<?php
include_once("includes/body.inc.php");
top();
$sql = "select * from  classificacoes";
$result=mysqli_query($con,$sql);
?>
<script>
    function confirmaEliminaTipo(id) {
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
            <h2>Categorias</h2>
        </div>
    </div>

<div class="container">
    <table class='table table-striped' width="100%">
        <tr>
            <td colspan="5" align='right'>
                <a href="adicionaCategoria.php"><i class='fas fa-plus text-success'> Adiciona</i></a>
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
                <td><?php echo $dados['categoriaId']?></td>
                <td><?php echo $dados['categoriaNome']?></td>
                <td><a href="#" onclick="confirmaEliminaCategoria(<?php echo $dados['categoriaId']?>);"><button type="button" class="btn btn-danger btn-sm"><i class="fas fa-trash" style="color: white"></i>&nbsp;Elimina</button></a></td>
            </tr>
            <?php
        }
        ?>


    </table>
</div>

<?php
bottom();
?>
