<?php
/*
 * Template name: Faixa Imagem
 * */
?>
<div class="container-fluid faixa faixa-imagem" style="background-image: url(<?php echo get_field('imagem', $postId); ?>)">

    <div class="row">
        
        <?php include(locate_template('template-parts/faixa/imagem-12.php')); ?>
        
    </div>

</div>