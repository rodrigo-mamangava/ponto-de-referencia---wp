<?php ?>


<!-- col-img-12 -->
<div class="container-fluid faixa faixa-titulo-imagem-grande" style="background-image: url(<?php echo get_field('imagem', $postId); ?>)">
    <div class="row">
        <div class="container">
            <div class="row">
                <div class="col-tit-img-12 col-xs-12 col-sm-6">
                    <?php echo get_field('titulo', $postId); ?>
                </div>
            </div>
        </div>
        <!-- col-img-12 END -->
    </div>
</div>