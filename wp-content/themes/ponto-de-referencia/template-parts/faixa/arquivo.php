<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<!-- col-txt-6-->
<div class="col-xs-12 col-sm-8 col-sm-offset-2 text-center">
    <h2><?php echo get_field('titulo', $postId); ?></h2>
    <div class="descricao">
        <p>
            <?php echo get_field('descricao', $postId); ?>
        </p>

        <a class="btn-arquivo" target="_black" href="<?php echo get_field('arquivo', $postId); ?>">
            <?php echo get_field('nome-btn', $postId); ?>
        </a>

    </div>
</div>
<!-- col-txt-6 END -->

