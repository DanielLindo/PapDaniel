<?php
include_once("includes/body.inc.php");
top();
$sql = "select * from  motas inner join marcas on marcaId=motaMarcaId inner join classificacoes on classificacaoId=motaClassificacaoId";
$result=mysqli_query($con,$sql);
?>
<script>
    function confirmaEliminaMota(id) {
        $.ajax({
            url:"AJAX/AJAXGetNameMota.php",
            type:"post",
            data:{
                idMotas:id
            },
            success:function (result){
                if(confirm('Confirma que deseja eliminar a mota: '+result+"?"))
                                    window.location="eliminaMota.php?id=" + id;
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
            <td colspan="12" align='right'>
                <a href="adicionaMota.php"><i class='fas fa-plus text-success'> Adiciona</i></a>
            </td>
        </tr>
        <tr style="text-align: center">
            <th>Id</th>
            <th>Marca</th>
            <th>Nome</th>
            <th>Modelo</th>
            <th>Imagem</th>
            <th>Preço</th>
            <th>Combustivel</th>
            <th>Classificação</th>
            <th colspan="2">op&ccedil&otildees</th>
        </tr>
        <?php
        while($dados=mysqli_fetch_array($result)){
            ?>
            <tr style="text-align: center">
                <td><?php echo $dados['motaId']?></td>
                <td><?php echo $dados['marcaNome']?></td>
                <td><?php echo $dados['motaNome']?></td>
                <td><?php echo $dados['motaModelo']?></td>
                <td><img width="120" src="../<?php echo $dados['motaImagemURL']?>"></td>
                <td><?php echo $dados['motaPreco']?></td>
                <td><?php echo $dados['motaCombustivel']?></td>
                <td><?php echo $dados['classificacaoNome']?></td>
                <td><a href="produtoChaves.php?id=<?php echo $dados['motaId']?>"><button type="button" class="btn btn-warning btn-sm"><i class="fa fa-cog" style="color: white"></i>&nbsp;Especificações</button></a></td>
                <td><a href="editaMota.php?id=<?php echo $dados['motaId']?>"><button type="button" class="btn btn-primary btn-sm"><i class="fa fa-pencil" style="color: white"></i>&nbsp;Edita</button></a></td>
                <td><a href="#" onclick="confirmaEliminaMota(<?php echo $dados['motaId']?>);"><button type="button" class="btn btn-danger btn-sm"><i class="fas fa-trash" style="color: white"></i>&nbsp;Elimina</button></a></td>
            </tr>
            <?php
        }
        ?>


    </table>
</div>

<?php
bottom();
?>
