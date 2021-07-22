<?php
include_once("includes/body.inc.php");
$idMota=intval($_GET['id']);
$sql="select * from motas  where motaId=$idMota";
$result=mysqli_query($con,$sql);
$dadosMota=mysqli_fetch_array($result);
top();
?>
<script>
    function confirmaEliminaMotaChaves(id) {
        $.ajax({
            url:"AJAX/AJAXGetNameMotaChaves.php",
            type:"post",
            data:{
                idMotas:id
            },
            success:function (result){
                if(confirm('Confirma que deseja eliminar a Chave da mota: '+result+"?"))
                    window.location="eliminaMotaChave.php?id=" + id;
            }
        })
    }

</script>

<div class="container">
    <div class="services">
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading">
                    <h2>Chaves <em> de produtos</em></h2>
                    <img src="../<?php echo $dadosMota['motaImagemURL']?>" width="200">
                    <h1><?php echo $dadosMota['motaNome']?></h1>
                </div>
                <form action="confirmaNovaMotaChaves.php" method="post" enctype="multipart/form-data">
                    <input id="idMota" type="hidden" value="<?php echo $idMota?>" name="idMota">
                    <label>Chaves</label>

                    <div class="container">

                        <table class='table table-striped' width="100%">

                            <tr>

                                <th>Chave</th>
                                <th>Valor</th>
                                <th colspan="2">opções</th>
                            </tr>
                            <?php
                            $sql="Select * from motaChaves inner join chaves on motaChaveChaveId = chaveId where motaChaveMotaId=".$idMota;
                            $result=mysqli_query($con,$sql);
                            while($dados=mysqli_fetch_array($result)){
                                ?>

                                <tr>
                                    <td><?php echo $dados['chaveNome']?></td>
                                    <td><?php echo $dados['motaChaveValor']?></td>

                                    <td><a class='btn btn-danger btn-xs' href="#" onclick="confirmaElimina(<?php echo $dados['chaveId']?>,<?php echo $idMota?>);"><i class='fa fa-trash'></i>Eliminar</a></td>

                                </tr>
                                <?php
                            }
                            ?>


                        </table>
                        <div class="row border pt-3">
                            <div class="col-5">
                                <select name="chaveMota" id="chaveCategoria" class="form-control form-control-lg">
                                    <option value="-1">Escolha a chave...</option>
                                    <?php
                                    $sql="select * from chaves where chaveId not in( 
                                            select motaChaveChaveId from motachaves where motaChaveMotaId = $idMota) ";
                                    $result=mysqli_query($con,$sql);
                                    while ($dados=mysqli_fetch_array($result)){
                                        ?>
                                        <option value="<?php echo $dados['chaveId']?>"><?php echo $dados['chaveNome']?></option>
                                        <?php
                                    }


                                    ?>
                                </select>
                            </div>
                            <div class="col-5">
                                <input type="text" name="valorChaveMota" class="form-control form-control-lg" placeholder="valor"><br>
                            </div>
                            <div class="col-2">
                                <button type="submit" class="btn btn-primary">Adiciona</button>
                            </div>

                    </div>


                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
<?php
bottom();
?>

