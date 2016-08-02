<?php
/*
 * Template name: Template Home 
 * */
?>


<?php get_header(); ?>


<?php
while (have_posts()) : the_post();

    the_content();

endwhile; // End of the loop.
?>
<div class="main">



    <div class="sessao" id="implementar-1">

        <div class="container">
            <div class="row">
                <div class="col-xs-12">

                    <h2>Quero implementar</h2>
                    <p class="descricao">Projetos de consultoria</p>

                </div>
            </div>
        </div>

        <?php get_template_part('template-parts/home/botoes', 'consultoria'); ?>

    </div>

    <div class="sessao" id="implementar-2">

        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <h2>Quero implementar</h2>
                    <p class="descricao">Projetos de capacitação (ex-cola pr)</p>
                </div>
            </div>
        </div>

        <?php get_template_part('template-parts/home/botoes', 'capacitacao'); ?>

    </div>
    <div class="sessao" id="navegar">

        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <h2>Quero navegar</h2>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-xs-6 col-sm-3">                        
                    <a class="botao-home btn-home-2"><img src="image/social/twitter.png" class="img-responsive"></a>
                </div>
                <div class="col-xs-6 col-sm-3">                        
                    <a class="botao-home btn-home-2"><img src="image/social/facebook.png" class="img-responsive"></a>
                </div>
                <div class="col-xs-6 col-sm-3">                        
                    <a class="botao-home btn-home-2"><img src="image/social/Linkedin.png" class="img-responsive"></a>
                </div>
                <div class="col-xs-6 col-sm-3">                        
                    <a class="botao-home btn-home-2" data-tit="Blog" data-desc="Aqui vai a descriçao do botão" >Blog</a>
                </div>
            </div>
        </div>
    </div>
    <div class="sessao" id="conhecer">

        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <h2>Quero Navegar</h2>
                </div>
            </div>
        </div>

        <?php get_template_part('template-parts/home/botoes', 'conhecer'); ?>
        
    </div>


</div>


<?php get_footer(); ?>
