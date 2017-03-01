<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>

<div  class="capa-single" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>)" >

    <?php get_template_part('template-parts/header/loop', 'posts'); ?>

    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-7 col-sm-offset-1" >
                <?php the_title('<h1>', '</h1>'); ?>
            </div>
        </div>
    </div>
    <div class="img-filter"></div>
</div>

<div class="container">
    <div class="row">
        <div class="col-sm-3 meta-dados">            
            <img class="img-circle avatar" src="<?php echo get_avatar_url(get_the_author_meta('id')); ?>"> 
            <p class="autor"><?php echo get_the_author(); ?></p> 
            <p class="descricao"><?php echo get_the_author_meta('description'); ?></p> 
            <p class="social-autor">
                <i class="fa fa-twitter" aria-hidden="true"></i>
                <?php echo get_user_meta(1, 'twitter', true); ?>
            </p>

            <hr/>

            <p class="compartilhe"><?php _e('Gostou desse post?', 'ponto-de-referencia') ?></p>

            <p class="compartilhe"><?php _e('Compartilhe ;)', 'ponto-de-referencia') ?></p>

            <ul class="social list-inline">
                <li>
                    <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                </li>
            </ul>

        </div>
        <div class="col-sm-7 col-sm-offset-1">
            <div class="row conteudo">
                <?php the_content(); ?>
            </div>

            <div class="tags">
            <?php
            if (get_the_tag_list()) {
                echo get_the_tag_list('<ul class="list-inline"><li>Tags</li><li>', '</li><li>', '</li></ul>');
            }
            ?>
            </div>
            
            


        </div>
    </div>
</div>


