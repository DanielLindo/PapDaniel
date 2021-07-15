<?php
include_once ("includes/body.inc.php");
top();
?>
<div class="services">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading">
                    <h2>Nova<em> Mota</em></h2>

                </div>
                <form action="confirmaNovaMota.php" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="modeloTelemovel">Nome: </label>
                        <input type="text" class="form-control" id="MotaNome" name="NomeMota">
                    </div><br>
                    <div class="form-group">
                        <label for="preco">Preço: </label>
                        <input type="number" class="form-control" id="motaPreco" name="preco"><br>
                    </div><br>
                    <div class="form-group">
                        <label for="imagemTelemovel">Imagem: </label>
                        <input type="file" class="form-control" id="motaImagemUrl" name="imagemMota">
                    </div><br>

                    <div class="form-group">
                        <label for="produtoCategoria"> Categoria:</label>
                        <select name="produtoCategoria" class="form-control">
                            <option value="-1">Escolha a categoria...</option>
                            <?php
                            $sql="select * from categorias order by categoriaNome";
                            $result=mysqli_query($con,$sql);
                            while ($dados=mysqli_fetch_array($result)){
                                ?>
                                <option value="<?php echo $dados['categoriaId']?>"><?php echo $dados['categoriaNome']?></option>
                                <?php
                            }
                            ?>
                        </select>
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="telemovelMarca"> Marca:</label>
                        <select name="telemovelMarca" class="form-control">
                            <option value="-1">Escolha a marca...</option>
                            <?php
                            $sql="select * from marcas order by marcaNome";
                            $result=mysqli_query($con,$sql);
                            while ($dados=mysqli_fetch_array($result)){
                                ?>
                                <option id="telemovelMarca" value="<?php echo $dados['marcaId']?>"><?php echo $dados['marcaNome']?></option>
                                <?php
                            }

                            ?>
?>



