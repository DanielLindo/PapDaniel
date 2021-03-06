<?php
include_once("includes/body.inc.php");
top();
$sql = "select * from  produtos";
$result=mysqli_query($con,$sql);
?>
<script>
    function confirmaEliminaProdutos(id) {
        $.ajax({
            url:"AJAX/AJAXGetNameProduto.php",
            type:"post",
            data:{
                idProdutos:id
            },
            success:function (result){
                if(confirm('Confirma que deseja eliminar o Produto: '+result+"?"))
                                    window.location="eliminaProduto.php?id=" + id;
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
            <h2>Produtos</h2>
        </div>
    </div>

<div class="container">
    <table class='table table-striped' width="100%">
        <div>
            <a href="index.php"> <button type="button" class="btn btn-danger">Voltar</button></a>
        </div>
        <tr>
            <td colspan="8" align='right'>
                <a href="adicionaProduto.php"><i class='fas fa-plus text-success'> Adiciona</i></a>
            </td>
        </tr>
        <tr style="text-align: center">
            <th>Id</th>
            <th>Nome</th>
            <th>Categoria</th>
            <th>Imagem</th>
            <th>Preço</th>
            <th>Destaque</th>
            <th colspan="2">op&ccedil&otildees</th>
        </tr>
        <?php
        while($dados=mysqli_fetch_array($result)){
            ?>
            <tr style="text-align: center">
                <td><?php echo $dados['produtoId']?></td>
                <td><?php echo $dados['produtoNome']?></td>
                <td><?php echo $dados['produtoCategoriaId']?></td>
                <td><?php echo $dados['produtoURL']?></td>
                <td><?php echo $dados['produtoPreco']?></td>
                <td><?php echo $dados['produtoDestaque']?></td>
                <td><a href="editaProduto.php?id=<?php echo $dados['produtoId']?>"><button type="button" class="btn btn-primary btn-sm"><i class="fa fa-pencil" style="color: white"></i>&nbsp;Edita</button></a></td>
                <td><a href="#" onclick="confirmaEliminaProdutos(<?php echo $dados['produtoId']?>);"><button type="button" class="btn btn-danger btn-sm"><i class="fas fa-trash" style="color: white"></i>&nbsp;Elimina</button></a></td>
            </tr>
            <?php
        }
        ?>


    </table>
</div>

<?php
bottom();
?>
