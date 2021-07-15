<?php
include_once("includes/body.inc.php");
top();
$sql = "select * from  categorias";
$result=mysqli_query($con,$sql);
?>
<script>
    function confirmaEliminaCategoria(id) {
        $.ajax({
            url:"AJAX/AJAXGetNameCategoria.php",
            type:"post",
            data:{
                idCategoria:id
            },
            success:function (result){
                if(confirm('Confirma que deseja eliminar a categoria: '+result+"?"))
                                    window.location="eliminaCategoria.php?id=" + id;
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
            <th width="10%">Id</th>
            <th width="50%">Nome</th>
            <th colspan="2">op&ccedil&otildees</th>
        </tr>
        <?php
        while($dados=mysqli_fetch_array($result)){
            ?>
            <tr style="text-align: center">
                <td><?php echo $dados['categoriaId']?></td>
                <td><?php echo $dados['categoriaNome']?></td>
                <td><a href="editaCategoria.php?id=<?php echo $dados['categoriaId']?>"><button type="button" class="btn btn-primary btn-sm"><i class="fa fa-pencil" style="color: white"></i>&nbsp;Edita</button></a></td>
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
