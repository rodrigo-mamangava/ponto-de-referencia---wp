<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<div class="col-xs-12 col-sm-6 col-sm-offset-3">

    <h2>
        <?php _e('Preencha o formulário abaixo para baixar o e-book "Marcas Simbióticas"') ?>
    </h2>

    <form>

        <div class="row">

            <div class="form-group col-sm-12">
                <label for="name"class="" ><?php _e('Name', 'ponto-de-referencia') ?></label>
                <input type="text" class="form-control" id="name" placeholder="">
            </div>
            <div class="form-group col-sm-12">
                <label for="email"class="" ><?php _e('Email', 'ponto-de-referencia') ?></label>
                <input type="email" class="form-control" id="email" placeholder="">
            </div>
            <div class="form-group col-sm-12">
                <label for="telefone"class="" ><?php _e('Telefone', 'ponto-de-referencia') ?></label>
                <input type="tel" class="form-control" id="telefone" placeholder="">
            </div>
            <div class="form-group col-sm-12">
                <label for="cidade"class="" ><?php _e('Cidade', 'ponto-de-referencia') ?></label>
                <input type="text" class="form-control" id="cidade" placeholder="">
            </div>
            <div class="form-group col-sm-6">
                <label for="empresa"class="" ><?php _e('Empresa', 'ponto-de-referencia') ?></label>
                <input type="text" class="form-control" id="empresa" placeholder="">
            </div>
            <div class="form-group col-sm-6">
                <label for="cargo"class="" ><?php _e('Cargo', 'ponto-de-referencia') ?></label>
                <input type="text" class="form-control" id="cargo" placeholder="">
            </div>


            <button type="submit" class="btn btn-form"><?php _e('Submit', 'ponto-de-referencia') ?></button>

        </div>




    </form>


</div>

