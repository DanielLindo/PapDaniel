<?php
include_once("includes/body.inc.php");
top();
$sql = "select * from  categorias inner join produtos where categoriaId=1";
$result=mysqli_query($con,$sql);
?>
<script>
    function confirmaEliminaCapacete(id) {
        $.ajax({
            url:"AJAX/AJAXGetNameCapacete.php",
            type:"post",
            data:{
                idCapacete:id
            },
            success:function (result){
                if(confirm('Confirma que deseja eliminar o capacete:'+result+"?"))
                                    window.location="eliminaPacete.php?id=" + id;
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
            <h2>Capacetes</h2>
        </div>
    </div>

<div class="container">
    <div class="col-12">

        <input  type="text" id="search" class="border float-left">
        &nbsp;
        <i class="fas fa-search" style="color: #f33f3f"></i>
    </div>
    <br>
    <table class='table table-striped' width="100%">
        <tr>
            <td colspan="6" align='right'>
                <a href="adicionaCapacete.php"><i class='fas fa-plus text-success'> Adiciona</i></a>
            </td>
        </tr>
        <tr style="text-align: center">
            <th>Id</th>
            <th>Nome</th>
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
                <td><img width='90' src="../<?php echo $dados['produtoURL']?>"></td>
                <td><?php echo $dados['produtoPreco']?></td>
                <td><i class="fas fa-star" style="color: #ffd11a"></i></td>
                <td><a href="#" onclick="confirmaEliminaProduto(<?php echo $dados['produtoId']?>);"><button type="button" class="btn btn-danger btn-sm"><i class="fas fa-trash" style="color: white"></i>&nbsp;Elimina</button></a></td>
            </tr>
            <?php
        }
        ?>


    </table>
</div>

<?php
bottom();
?>
