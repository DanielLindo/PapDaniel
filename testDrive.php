<?php
include_once("includes/body.inc.php");
top();
?>
<br><br><br><br><br><br>

<div class="container">

        <div class="col-md-12">
            <h4>MARQUE JÁ O SEU TEST-DRIVE</h4><br>
        </div>
        <div class="row">
        <div class="col">
            <h6>Nome próprio *</h6>
            <input type="text" class="form-control" id="name" name="name">
        </div>
        <div class="col">
            <h6>Apelido *</h6>
            <input type="text" class="form-control" id="name" name="apelido">
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-3">
            <h6>Data de Nascimento *</h6>
            <input type="date" class="form-control" id="name" name="nasc">
        </div>
        <div class="col-5">
            <h6>Email *</h6>
            <input type="text" class="form-control" id="name" name="email">
        </div>
        <div class="col-4">
            <h6>Telemóvel/telefone *</h6>
            <input type="text" class="form-control" id="name" name="telemovel">
        </div>
    </div>

    <br>
    <div class="row">
        <div class="col-3">
            <h6 style="text-align: center">Distrito * </h6>
            <br>
            <select class="form-select form-select-sm" aria-label=".form-select-sm example" style="width: 250px;overflow: hidden; background: url("http://www.webcis.com.br/images/imagens-noticias/select/ico-seta-select.gif")">
            <option selected>Selecione</option>
            <option value="1">Leiria</option>
                <option value="2">Lisboa</option>
                <option value="3">Porto</option>
            </select>
        </div>
        <div class="col-3" style="text-align: center">
            <h6 style="text-align: center">Concessionário *</h6>
            <br>
            <select class="form-select form-select-sm" aria-label=".form-select-sm example" style="width: 250px;overflow: hidden; background: url("http://www.webcis.com.br/images/imagens-noticias/select/ico-seta-select.gif")">
                <option selected>Selecione</option>
                <option value="1">leiriberia</option>
                <option value="2">Lisboa</option>
            </select>
        </div>

        <div class="col-3">
            <h6 style="text-align: center">Dia *</h6>
            <br>
            <input type="date" class="form-control" id="name" name="data">
        </div>
        <div class="col-3">
            <h6 style="text-align: center">Horas *</h6>
            <br>
            <input type="time" class="form-control" id="name" name="hora">
        </div>

    </div>
    <br>
    <br>
    <p style="size: 90px">Os campos marcados com são * de preenchimento obrigatório.</p>
    <div class="col-md-12">
        <div class="submit-button text-center">
            <button class="btn btn-common" id="submit" type="submit">Finalizar Reserva</button>
            <div id="msgSubmit" class="h3 text-center hidden"></div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>




